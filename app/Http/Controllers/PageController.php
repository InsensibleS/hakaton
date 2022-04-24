<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Files;
use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function main()
    {
        return view('indexx');
    }

    public function iq()
    {
        return view('iq');
    }

    public function tasks(int $id = null)
    {
        $executed = Task::where('deadline', '<', Carbon::now()->format('Y-m-d'))
            ->when(!is_null($id), function ($q) use ($id) {
                $q->where('project_id', $id);
            })
            ->get();

        $day = Task::where('deadline', '>=', Carbon::now()->format('Y-m-d'))
            ->where('deadline', '<', Carbon::now()->addDay()->format('Y-m-d'))
            ->when(!is_null($id), function ($q) use ($id) {
                $q->where('project_id', $id);
            })
            ->get();

        $next = Task::where('deadline', '>', Carbon::now()->addDay()->format('Y-m-d'))
            ->when(!is_null($id), function ($q) use ($id) {
                $q->where('project_id', $id);
            })
            ->get();

        return view('tasks', ['executed' => $executed, 'day' => $day, 'next' => $next]);
    }

    public function personal()
    {
        return view('personal');
    }

    public function commerce()
    {
        return view('commerce');
    }

    public function analytics()
    {
        return view('analytics');
    }

    public function files()
    {
        return view('files');
    }

    public function chat()
    {
        return view('chat');
    }

    public function camera()
    {
        return view('camera');
    }

    public function settings()
    {
        return view('settings');
    }

    public function maps()
    {
        $projects = Project::all();
        return view('mapss', ['projects' => $projects]);
    }

    public function getMap(int $id)
    {
        $project = Project::find($id);
        return view('cart-project', [
            'project' => $project,
            'date' => Carbon::parse($project->date)->format('d.m.Y'),
            'time' =>Carbon::parse($project->date)->format('H:m')
        ]);
    }


    public function mapsCreate()
    {
        $company = Company::all();
        return view('mapsCreate', ['company' => $company]);
    }

    public function createMap(Request $request)
    {
        $project = Project::create([
            'title' => $request->title,
            'company_id' => $request->company,
            'date' => Carbon::parse($request->date),
            'status' => $request->status,
        ]);
        if ($request->file != null) {
            $path = Storage::putFileAs(
                'maps', $request->file, Str::random(20) . '.' . explode('.', $request->file('file')->getClientOriginalName())[1]
            );

            Files::create([
                'project_id' => $project->id,
                'url' => $path,
                'filename' => $request->file
            ]);
        }
        return redirect('/maps');
    }

    public function tasksUpdate(Request $request)
    {
        switch ($request->type){
            case 'day':
                $task = Task::find($request->id);
                $task->deadline = Carbon::now()->format('Y-m-d');
                $task->save();
                break;
            case 'next':
                $task = Task::find($request->id);
                $task->deadline = Carbon::now()->addWeek()->format('Y-m-d');
                $task->save();
                break;
            case 'executed':
                $task = Task::find($request->id);
                $task->deadline = Carbon::now()->subDays(2)->format('Y-m-d');
                $task->save();
        }

        return true;
    }

    public function popup()
    {
        return view('popup');
    }
}
