<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="Rus Sofia" name="author">
  <meta content="репетитор по английскому, английский кемерово, репетитор кемерово, анна покасова, "
        name="keywords">
  <meta content="Подготовка к экзаменам по английскому" name="description">
  <title>Подготовка к экзаменам</title>
    <link rel="icon" href="pics/AP.svg" type="image/svg">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <script src="bootstrap/dist/js/bootstrap.js"></script>
  <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

  <link rel="stylesheet" href="./css/course-exam-lessons.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
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
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="course.php">КУРСЫ</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="price.php">ЦЕНА</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="manual.php">КАК ЗАПИСАТЬСЯ</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="about.php">ОБО МНЕ</a>
                        </li>
                        <li class="nav-item me-xxl-5 ms-xxl-2 me-lg-1 ms-xl-1">
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
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="index.php">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="course.php">КУРСЫ</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="price.php">ЦЕНА</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="manual.php">КАК ЗАПИСАТЬСЯ</a>
                        </li>
                        <li class="nav-item me-xxl-2 ms-xxl-2 me-lg-1 ms-xl-1">
                            <a class="nav-link head-button user-select-none" href="about.php">ОБО МНЕ</a>
                        </li>
                        <li class="nav-item dropdown ms-xxl-2 ms-lg-1">
                            <a id="hamburger-menu" class="nav-link dropdown-toggle head-button user-select-none" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                БОЛЬШЕ
                            </a>
                            <?php if ($_COOKIE['role'] == 'student'): ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item head-button-black user-select-none" href="contacts.php">Контакты</a></li>
                                    <li><a class="dropdown-item head-button-black user-select-none" href="schedule.php">Записаться</a></li>
                                    <li><a class="dropdown-item head-button-black user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                </ul>
                            <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
        <div class="row justify-content-center">
            <div class="white-box col-auto">
                <p class="big-main-text user-select-none">Exam</p>
                <p class="mini-main-text user-select-none">course</p>
                <p class="blue-text user-select-none">огэ, егэ, впр,<br>вступительные<br>экзамены,<br>олимпиады<br><br>разбор<br>актуальных<br>кимов и<br>критериев<br><br>много практики и<br>пробников<br><br>готовимся без<br>стресса и<br>выгорания</p>
            </div>
            <div class="right-area col-auto">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <img id="icons-up" class="user-select-none"
                             src="pics/course-exam-course/icons-up.svg">
                    </div>
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
                             src="pics/course-group-lessons/icon-center.svg"><br>
                        <img id="icon-down" class="user-select-none"
                             src="pics/course-group-lessons/icon-down.svg">
                    </div>
                    <div class="col-auto">
                        <p id="center-right-text" class="white-text user-select-none">+ Youtube, quizizz, wordwall,<br>british council, etc.</p>
                        <p id="down-right-text" class="white-text user-select-none">+ устные и письменные<br>контрольные точки</p>
                        <p id="center-right-text-sm" class="white-text user-select-none">+ Youtube, quizizz,<br>wordwall, british<br>council, etc.</p>
                        <p id="down-right-text-sm" class="white-text user-select-none">+ устные и<br>письменные<br>контрольные<br>точки</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <form action="contacts.php">
                            <button class="white-button user-select-none" href="contacts.php">записаться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>