<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="Rus Sofia" name="author">
  <meta content="репетитор по английскому, английский кемерово, репетитор кемерово, анна покасова"
        name="keywords">
  <meta content="Высококвалифицированный репетитор по английскому языку в городе Кемерово -
          Анна Сергеевна Покасова" name="description">
  <title>Ann_poks</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <script src="bootstrap/dist/js/bootstrap.js"></script>
  <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

  <link rel="stylesheet" href="./css/course-exam-lessons.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body style="background-color: #F1F1F1; overflow: hidden">
<header>
    <?php
    if ($_COOKIE['user'] == ''):
        ?>
        <nav class="navbar navbar-expand-lg mt-2">
            <div class="container-fluid ms-5">
                <a class="nav-link brand user-select-none" href="index.php">annpoks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-5">
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="course.php">КУРСЫ</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="price.php">ЦЕНА</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="manual.php">КАК ЗАПИСАТЬСЯ</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="about.php">ОБО МНЕ</a>
                        </li>
                        <li class="nav-item me-5 ms-2">
                            <a class="nav-link head-button user-select-none" href="contacts.php">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php else: ?>
        <nav class="navbar navbar-expand-lg mt-2">
            <div class="container-fluid ms-5">
                <a class="nav-link brand user-select-none" href="index.php">annpoks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-5">
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="course.php">КУРСЫ</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="price.php">ЦЕНА</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="manual.php">КАК ЗАПИСАТЬСЯ</a>
                        </li>
                        <li class="nav-item me-2 ms-2">
                            <a class="nav-link head-button user-select-none" href="about.php">ОБО МНЕ</a>
                        </li>
                        <li class="nav-item dropdown ms-2">
                            <a id="hamburger-menu" class="nav-link dropdown-toggle head-button user-select-none" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                БОЛЬШЕ
                            </a>
                            <?php if ($_COOKIE['role'] == 'student'): ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:white">
                                    <li><a class="dropdown-item head-button-black user-select-none" href="contacts.php">Контакты</a></li>
                                    <li><a class="dropdown-item head-button-black user-select-none" href="schedule.php">Расписание</a></li>
                                    <li><a class="dropdown-item head-button-black user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                </ul>
                            <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:white">
                                    <li><a class="dropdown-item head-button-black user-select-none" href="contacts.php">Контакты</a></li>
                                    <li><a class="dropdown-item head-button-black user-select-none" href="sign-up.php">Регистрация</a></li>
                                    <li><a class="dropdown-item head-button-black user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                </ul>
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif;?>
</header>
<main>
    <div class="container">
        <img id="background-photo" class="user-select-none"
             srcset="pics/course-group-lessons/background-blue.png 52w, pics/course-group-lessons/background-blue.png 40w, pics/course-group-lessons/background-blue.png 30w"
             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 46px, (max-width: 1034px) 30px"
             src="pics/course-group-lessons/background-blue.png">
        <div class="row justify-content-center">
            <div class="white-box col-auto">
                <p class="big-main-text user-select-none">Exam</p>
                <p class="mini-main-text user-select-none">course</p>
                <p class="blue-text user-select-none">огэ, егэ, впр,<br>вступительные<br>экзамены,<br>олимпиады<br><br>разбор<br>актуальных<br>кимов и<br>критериев<br><br>много практики и<br>пробников<br><br>готовимся без<br>стресса и<br>выгорания</p>
            </div>
            <div class="right-area col-auto">
                <div class="row justify-content-center">
                    <img id="icons-up" class="user-select-none"
                         src="pics/course-exam-course/icons-up.svg">
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <p id="up-left-text" class="white-text-align-center user-select-none">разбор<br>кимов и<br>пробников</p>
                    </div>
                    <div class="col-4">
                        <p id="up-center-text" class="white-text-align-center user-select-none">домашнее<br>задание</p>
                    </div>
                    <div class="col-4">
                        <p id="up-right-text" class="white-text-align-center user-select-none">разбор<br>ошибок</p>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-auto">
                        <img id="icon-center" class="user-select-none"
                             srcset="pics/course-group-lessons/icon-center.svg 52w, pics/course-group-lessons/icon-center.svg 40w, pics/course-group-lessons/icon-center.svg 30w"
                             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                             src="pics/course-group-lessons/icon-center.svg"><br>
                        <img id="icon-down" class="user-select-none"
                             srcset="pics/course-group-lessons/icon-down.svg 52w, pics/course-group-lessons/icon-down.svg 40w, pics/course-group-lessons/icon-down.svg 30w"
                             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                             src="pics/course-group-lessons/icon-down.svg">
                    </div>
                    <div class="col-auto">
                        <p id="center-right-text" class="white-text user-select-none">+ Youtube, quizizz, wordwall,<br>british council, etc.</p>
                        <p id="down-right-text" class="white-text user-select-none">+ устные и письменные<br>контрольные точки</p>
                    </div>
                </div>
                <form action="contacts.php">
                    <button class="white-button user-select-none" href="contacts.php">записаться</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>