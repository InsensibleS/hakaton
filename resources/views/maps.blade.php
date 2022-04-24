<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart City</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/media/media.css">
</head>

<body>
    <header class="header"> <!--Хедер-->
        <div class="container header-container">
            <ul class="header-list">
                <li class="header-item">
                    <a href="/">
                        <img src="/img/png/logo.png" class="logo-img">
                    </a>
                    </a>
                </li>
                <li class="header-item">
                    <input class="search-box" type="search" placeholder="Поиск">
                </li>
                <li class="header-item">
                    <a href="https://script.google.com/macros/s/AKfycbxTNyJLJkQjxqefFvopYCxI6QdPpG8dmd0IYcLpva8EPn_9as4TbZYMNMgdtphSmzch/exec" class="user-btn"></a>
                    <!-- <button class="login-in">ПРОФИЛЬ</button> -->
                </li>
            </ul>
{{--            <div class="header-form">--}}
                <!-- <div class="header-content">
                    <div class="dry"></div>
                    <form class="form">
                        <div class="form-content">
                            <input checked="" id="signin" name="action" type="radio" value="signin">
                            <label for="signin">Sign in</label>
                            <input id="signup" name="action" type="radio" value="signup">
                            <label for="signup">Sign up</label>
                            <input id="reset" name="action" type="radio" value="reset">
                            <label for="reset">Reset</label>
                            <div id="wrapper">
                                <div id="arrow"></div>
                                <input id="email" placeholder="Email" type="text">
                                <input id="pass" placeholder="Password" type="password">
                                <input id="repass" placeholder="Repeat password" type="password">
                            </div>
                            <button type="submit" class="form-btn">
                                <span>Забыли пароль?
                                <br>Вход
                                <br>Регистрация
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <style>
                    @import url(http://fonts.googleapis.com/css?family=Raleway:700,800);

                    :focus { outline: none; }
                    ::-webkit-input-placeholder { color: #DEDFDF; }
                    ::-moz-placeholder { color: #DEDFDF; }
                    :-moz-placeholder { color: #DEDFDF; }
                    ::-ms-input-placeholder { color: #DEDFDF; }

                    #wrapper, label, #arrow, button span { transition: all .5s cubic-bezier(.6,0,.4,1); }

                    #wrapper { overflow: hidden; }

                    #signin:checked ~ #wrapper { height: 172px; }
                    #signin:checked ~ #wrapper #arrow { left: 32px; }
                    #signin:checked ~ button span { transform: translate3d(0,-52px,0); }

                    #signup:checked ~ #wrapper { height: 262px; }
                    #signup:checked ~ #wrapper #arrow { left: 137px; }
                    #signup:checked ~ button span { transform: translate3d(0,-124px,0); }

                    #reset:checked ~ #wrapper { height: 92px; }
                    #reset:checked ~ #wrapper #arrow { left: 424px; }
                    #reset:checked ~ button span { transform: translate3d(0,-52px,0); }

                    input[type=radio] { display: none; }
                    label {
                    cursor: pointer;
                    display: inline-block;
                    font-size: 22px;
                    font-weight: 800;
                    opacity: .5;
                    margin-bottom: 30px;
                    text-transform: uppercase;
                    }
                    label:hover {
                    transition: all .3s cubic-bezier(.6,0,.4,1);
                    opacity: 1;
                    }
                    label[for="signin"] { margin-right: 20px; }
                    label[for="reset"] { float: right; }
                    input[type=radio]:checked + label { opacity: 1; }

                    input[type=text],
                    input[type=password] {
                    background: #fff;
                    border: none;
                    border-radius: 8px;
                    font-size: 27px;
                    font-family: 'Raleway', sans-serif;
                    height: 72px;
                    width: 99.5%;
                    margin-bottom: 10px;
                    opacity: 1;
                    text-indent: 20px;
                    transition: all .2s ease-in-out;
                    }
                    .form-btn {
                    background: #6fbb94;
                    border: none;
                    border-radius: 8px;
                    color: #fff;
                    cursor: pointer;
                    font-family: 'Raleway', sans-serif;
                    font-size: 27px;
                    height: 72px;
                    width: 100%;
                    overflow: hidden;
                    transition: all .3s cubic-bezier(.6,0,.4,1);
                    }
                    .form-btn span {
                    display: block;
                    line-height: 72px;
                    position: relative;
                    top: -20px;
                    transform: translate3d(0,0,0);
                    }
                    .form-btn:hover {
                        /* background: #82cca6; */
                    }

                    #arrow {
                    height: 0;
                    width: 0;
                    border-bottom: 10px solid #fff;
                    border-left: 10px solid transparent;
                    border-right: 10px solid transparent;
                    position: relative;
                    left: 32px;
                    }


                    #hint {
                    width: 100%;
                    text-align: center;
                    position: absolute;
                    bottom: 20px;
                    }
                </style>
            </div> -->
        </div>
    </header>

    <div class="mainPage">

        <main style="width: 20%; padding-left: 53px; margin-right: 89px"> <!--Левое меню -->
            <div class="container hero-container">
                <ul class="hero-list">
                    <li class="hero-item__maps">
                        <a class="maps-btn btn" href="/maps"><img src="/img/svg/maps.svg" class="maps-img hero-img" alt="">ДОРОЖНАЯ КАРТА(ДК)</a>
                    </li>
                    <li class="hero-item__iq">
                        <a class="iq-btn btn" href="/iq"><img src="/img/svg/iq.svg" class="iq-img hero-img" alt="">KPI-ПОКАЗАТЕЛИ IQ</a>
                    </li>
                    <li class="hero-item__tasks">
                        <a class="tasks-btn btn" href="/tasks"><img src="/img/svg/tasks.svg" class="tasks-img hero-img" alt="">ЗАДАЧИ</a>
                    </li>
                    <li class="hero-item__personal">
                        <a class="personal-btn btn" href="/personal"><img src="/img/svg/personal.svg" class="personal-img hero-img" alt="">СОТРУДНИКИ</a>
                    </li>
                    <li class="hero-item__commerce">
                        <a class="commerce-btn btn" href="/commerce"><img src="/img/svg/commerce.svg" class="commerce-img hero-img" alt="">КОММЕРЧЕСКИЕ<br>ПРЕДЛОЖЕНИЯ</a>
                    </li>
                    <li class="hero-item__analytics">
                        <a class="analytics-btn btn" href="/analytics"><img src="/img/svg/analytics.svg" class="analytics-img hero-img" alt="">АНАЛИТИКА/ОТЧЁТЫ</a>
                    </li>
                    <li class="hero-item__files">
                        <a class="files-btn btn" href="/files"><img src="/img/svg/files.svg" class="files-img hero-img" alt="">ДОКУМЕНТЫ</a>
                    </li>
                    <li class="hero-item__chat">
                        <a class="chat-btn btn" href="/chat"><img src="/img/svg/chat.svg" class="chat-img hero-img" alt="">ЧАТ</a>
                    </li>
                    <li class="hero-item__camera">
                        <a class="camera-btn btn" href="/camera"><img src="/img/svg/camera.svg" class="camera-img hero-img" alt="">ВКС</a>
                    </li>
                    <li class="hero-item__settings">
                        <a class="settings-btn btn" href="/settings"><img src="/img/svg/settings.svg" class="settings-img hero-img" alt="">НАСТРОЙКИ</a>
                    </li>
                </ul>
            </div>

        </main>

        <section style="width: 72%">
            <div class="title">Дорожная карта  <img src="img/svg/1.svg"> Проекты</div>
            <div class="mains">
                @if($projects->count() != 0)
                <table class="tableDK">
                    <thead style="font-weight: bold">
                    <tr style="width: 100%; height: 108px; text-align: center">
                        <td width="388px">Проект</td>
                        <td width="176px">Дата / Время</td>
                        <td width="262px">Ответственный</td>
                        <td width="157px">Статус</td>
                        <td width="160px">iQ</td>
                        <td width="152px">Фото <br> видео</td>
                        <td width="133px">Отчёт</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                    <tr style="height: 73px; text-align: center">
                        <td>{{$project->title}}</td>
                        <td>{{$project->created_at}}</td>
                        <td>{{$project->company->title}}</td>
                        <td>
                            @if($project->status == 'executed')
                            К выполнению
                            @endif
                                @if($project->status == 'progress')
                                    Выполняется
                                @endif
                                @if($project->status == 'done')
                                    Выполнено
                                @endif
                                @if($project->status == 'overdue')
                                    Просрочено
                                @endif
                        </td>
                        <td>..</td>
                        <td>...</td>
                        <td>...</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <table style="width: 100%; height: 100%; border: none">
                        <tr style="border: none">
                           <td style="text-align: center; border: none"><h1>Отсутствуют проекты</h1></td>
                        </tr>
                    </table>
                @endif
            </div>
        </section>
        <div style="position: fixed; right: 50px; bottom: 50px">
            <a href="/"><img src="img/svg/2.svg" alt=""></a>
        </div>
    </div>
</body>

</html>
