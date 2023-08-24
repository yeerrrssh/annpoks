<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="Rus Sofia" name="author">
    <meta content="репетитор по английскому, английский кемерово, репетитор кемерово, adventure time, young sheldon"
          name="keywords">
    <meta content="Дополнительный курс по английскому" name="description">
    <title>Дополнительный курс</title>
    <link rel="icon" href="pics/AP.svg" type="image/svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="./css/course-extra-lessons.css">

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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="left-right-part-lg col-sm-auto col-lg-4" style="position: relative">
                <img id="sheldon-photo" class="user-select-none"
                     src="pics/course-extra-lessons/sheldon.png">
                <div class="row justify-content-center">
                    <p id="sheldon-text" class="white-text white-text-align-center user-select-none">young sheldon crash<br>course</p>
                    <div class="col-auto">
                        <form action="contacts.php">
                            <button id="left-button" class="white-button user-select-none" href="contacts.php">записаться</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="blue-box col-sm-auto col-lg-4">
                <p class="big-screen big-main-text user-select-none">Extra<span id="crs"> course</span></p>
                <p class="small-screen big-main-text user-select-none">Extra</p>
                <p id="crs" class="small-screen big-main-text user-select-none">course</p>
                <p class="white-text user-select-none">погружение в<br>английскую<br>культуру и сленг<br>через сериалы и<br>анимации<br><br>развлекательный<br>формат<br><br>упор на<br>разговорную<br>практику<br><br>игры, кейсы и<br>основы<br>retelling’а</p>
            </div>
            <div class="left-right-part-lg col-sm-auto col-lg-4" style="position: relative">
                <img id="adventure-time-photo" class="user-select-none"
                     src="pics/course-extra-lessons/adventure-time.png">
                <div class="row justify-content-center">
                    <p id="adventure-time-text" class="white-text white-text-align-center user-select-none">adventure time crash<br>course</p>
                    <div class="col-auto">
                        <form action="contacts.php">
                            <button id="right-button" class="white-button user-select-none" href="contacts.php">записаться</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="left-right-part-sm col-12">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <img id="sheldon-photo" class="user-select-none"
                             src="pics/course-extra-lessons/sheldon.png">
                        <p id="sheldon-text" class="white-text white-text-align-center user-select-none">young sheldon crash<br>course</p>
                        <form class="form-box" action="contacts.php">
                            <button id="left-button" class="white-button user-select-none" href="contacts.php">записаться</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="left-right-part-sm col-12">
                <div class="row justify-content-center">
                    <div class="col-auto rhombus-place">
                        <img id="adventure-time-photo" class="user-select-none"
                             src="pics/course-extra-lessons/adventure-time.png">
                        <p id="adventure-time-text" class="white-text white-text-align-center user-select-none">adventure time crash<br>course</p>
                        <form class="form-box" action="contacts.php">
                            <button id="right-button" class="white-button user-select-none" href="contacts.php">записаться</button>
                        </form>
                        <svg id="left-rhombus-sm" class="rhombus-sm" xmlns="http://www.w3.org/2000/svg" width="16" height="993" viewBox="0 0 12 767" fill="none">
                            <path d="M6.00003 0.226501L0.226531 6L6.00003 11.7735L11.7735 6L6.00003 0.226501ZM7 788L7.00003 6L5.00003 6L5 788L7 788Z" fill="#F1F1F1"/>
                        </svg>
                        <svg id="right-rhombus-sm" class="rhombus-sm" xmlns="http://www.w3.org/2000/svg" width="16" height="993" viewBox="0 0 12 767" fill="none">
                            <path d="M6.00003 0.226501L0.226531 6L6.00003 11.7735L11.7735 6L6.00003 0.226501ZM7 788L7.00003 6L5.00003 6L5 788L7 788Z" fill="#F1F1F1"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <svg id="left-rhombus" xmlns="http://www.w3.org/2000/svg" width="20" height="500" viewBox="0 0 24 712" fill="none">
            <path d="M12 0.453003L0.453029 12L12 23.547L23.547 12L12 0.453003ZM14 794L14 12L10 12L10 794L14 794Z" fill="#F1F1F1"/>
        </svg>
        <svg id="right-rhombus" xmlns="http://www.w3.org/2000/svg" width="20" height="500" viewBox="0 0 24 712" fill="none">
            <path d="M12 0.453003L0.453029 12L12 23.547L23.547 12L12 0.453003ZM14 794L14 12L10 12L10 794L14 794Z" fill="#F1F1F1"/>
        </svg>
    </div>
</main>
</body>
</html>