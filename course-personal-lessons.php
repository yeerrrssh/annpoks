<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="Анна Сергеевна Покасова" name="author">
  <meta content="репетитор по английскому, английский кемерово, репетитор кемерово, анна покасова"
        name="keywords">
  <meta content="Высококвалифицированный репетитор по английскому языку в городе Кемерово -
          Анна Сергеевна Покасова" name="description">
  <title>Индивидуальные занятия</title>
    <link rel="icon" href="pics/AP.svg" type="image/svg">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
  <script src="bootstrap/dist/js/bootstrap.js"></script>
  <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

  <link rel="stylesheet" href="./css/course-personal-lessons.css">
    <script src="js/sandwich-menu.js"></script>

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
            <div class="blue-box col-sm-auto col-lg-5">
                <p class="big-main-text user-select-none">Personal<span id="lsns"> lessons</span></p>
                <p class="white-text user-select-none">помогают<br>достигнуть<br>индивидуальных<br>целей<br><br>материалы,<br>ориентированные<br>на ваши интересы<br><br>предполагают<br>интенсивное<br>прохождение<br>материала<br><br>быстрая обратная<br>связь</p>
            </div>
            <div class="col-sm-auto col-lg-7" style="position: relative">
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <img id="icons-up" class="user-select-none"
                             src="pics/course-personal-lessons/icons-up.svg">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <p id="up-left-text" class="white-text white-text-align-center user-select-none">zoom<br>google meet</p>
                    </div>
                    <div class="col-auto">
                        <p id="up-center-text" class="white-text white-text-align-center user-select-none">English file<br>starlight<br>spotlight<br>forward</p>
                    </div>
                    <div class="col-auto">
                        <p id="up-right-text" class="white-text white-text-align-center user-select-none">miro<br>jamboard</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <img id="icon-down" class="user-select-none"
                            src="pics/course-personal-lessons/down-icon.svg">
                    </div>
                    <div class="col-auto">
                        <p id="down-text" class="white-text user-select-none">+ Youtube, quizizz, wordwall,<br>british council, etc.</p>
                        <p id="down-text-sm" class="white-text user-select-none">+ Youtube, quizizz,<br>wordwall, british<br>council, etc.</p>
                    </div>
                </div>
                <div class="btn-normal">
                    <form action="contacts.php">
                        <button class="white-button user-select-none" href="contacts.php">записаться</button>
                    </form>
                </div>
            </div>
            <div class="btn-center">
                <form action="contacts.php">
                    <button class="white-button user-select-none" href="contacts.php">записаться</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
