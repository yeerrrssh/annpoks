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

    <script src="js/about.js"></script>

    <link rel="stylesheet" href="./css/about.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body style="background-color: #F1F1F1">
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
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#F1F1F1">
                                    <li><a class="dropdown-item head-button user-select-none" href="contacts.php">Контакты</a></li>
                                    <li><a class="dropdown-item head-button user-select-none" href="schedule.php">Расписание</a></li>
                                    <li><a class="dropdown-item head-button user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                </ul>
                            <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#F1F1F1">
                                    <li><a class="dropdown-item head-button user-select-none" href="contacts.php">Контакты</a></li>
                                    <li><a class="dropdown-item head-button user-select-none" href="sign-up.php">Регистрация</a></li>
                                    <li><a class="dropdown-item head-button user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
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
        <img id="triangle-up" class="user-select-none"
             srcset="pics/about/Polygon-2.svg 52w, pics/about/Polygon-2.svg 40w, pics/about/Polygon-2.svg 30w"
             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 46px, (max-width: 1034px) 30px"
             src="pics/about/Polygon-2.svg">
        <img id="about-main-photo" class="user-select-none"
             srcset="pics/about/about-photo-human.png 52w, pics/about/about-photo-human.png 40w, pics/about/about-photo-human.png 30w"
             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
             src="pics/about/about-photo-human.png">
        <div class="row justify-content-end">
            <div class="col-5">
                <p class="about-page-big-text user-select-none">About</p>
                <p class="about-page-name-text user-select-none">Ann Pokasova</p>
                <div class="rhombus-right user-select-none"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <p class="white-text-about-1 user-select-none">Здравствуйте!<br>я репетитор английского языка<br><br>с 2019 года мне посчастливилось поработать с более чем 200 учениками<br><br></p>
            <p class="white-text-about-2 user-select-none">Вместе мы подготовились к впр, огэ, егэ, олимпиадам, вступительным экзаменам и школьным контрольным точкам<br><br>моя гордость - ваши высокие результаты</p>
            <button id="goDownButton" class="white-button user-select-none" href="#">view all</button>
        </div>
        <img id="triangle-down" class="user-select-none"
             srcset="pics/about/Polygon-1.svg 52w, pics/about/Polygon-1.svg 40w, pics/about/Polygon-1.svg 30w"
             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 46px, (max-width: 1034px) 30px"
             src="pics/about/Polygon-1.svg">
        <div class="row justify-content-center down-block">
            <div class="col-4">
                <div class="row justify-content-end">
                    <img id="gimnazia-photo" class="user-select-none" src="pics/about/gimnazia.png">
                    <p id="date-left" class="date user-select-none">2008 - 2015</p>
                </div>
            </div>
            <div class="col-4">
                <div class="row justify-content-center">
                    <img id="gkl-photo" class="user-select-none" src="pics/about/gkl.png">
                    <p class="date user-select-none">2015 - 2019</p>
                </div>
            </div>
            <div class="col-4">
                <div class="row justify-content-start">
                    <img id="kemgu-photo" class="user-select-none" src="pics/about/kemgu.png">
                    <p id="date-right" class="date user-select-none">2019 - 2023</p>
                </div>
            </div>
            <div id="table-up" class="row justify-content-center">
                <div id="table-up-left" class="col-auto" style="width: 392px">
                    <div id="rhombus-up-left" class="rhombus-table user-select-none"></div>
                    <p class="text-about-max">мбоу гимназия №21</p>
                    <p class="text-about-min">имени а.м.терехова<br>г.кемерово</p>
                </div>
                <div id="table-up-center" class="col-auto" style="width: 400px; height: 110px">
                    <div class="rhombus-table"></div>
                    <p class="text-about-max">мбноу гкл</p>
                    <p class="text-about-min">английская филология<br>г.кемерово</p>
                </div>
                <div id="table-up-right" class="col-auto" style="width: 326px">
                    <div id="rhombus-up-right" class="rhombus-table"></div>
                    <p class="text-about-max">кемгу</p>
                    <p class="text-about-min">лингвистика<br>г.кемерово</p>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col">
                    <p id="between-left-text" class="text-about-min user-select-none">егэ (eng) 91 балл</p>
                </div>
                <div class="col">
                    <p id="between-right-text" class="text-about-min user-select-none">красный диплом</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="row justify-content-end">
                        <img id="shahterskaya-photo" class="user-select-none" src="pics/about/shahterskaya-slava.png">
                    </div>
                </div>
                <div class="col">
                    <div class="row justify-content-start">
                        <img id="asia-photo" class="user-select-none" src="pics/about/children-asia.png">
                    </div>
                </div>
            </div>
            <div id="lower-line" class="row justify-content-center">
                <div class="col-auto">
                    <div id="rhombus-down-left" class="rhombus-long-line user-select-none"></div>
                </div>
                <div class="col-auto">
                    <div id="black-line-center" class="black-line user-select-none"></div>
                </div>
                <div class="col-auto">
                    <div id="rhombus-down-center" class="rhombus-long-line user-select-none"></div>
                </div>
                <div class="col-auto">
                    <div id="rhombus-down-right" class="black-line user-select-none"></div>
                </div>
                <div class="col-auto">
                    <button id="go-back-button" class="blue-button user-select-none">go back</button>
                </div>
            </div>
            <div class="row justify-content-center">
                <p id="translator" class="text-about-min user-select-none">переводчик</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>