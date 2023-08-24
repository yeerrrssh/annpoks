<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="Rus Sofia" name="author">
    <title>Прайс</title>
    <link rel="icon" href="pics/AP.svg" type="image/svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="./css/price.css">

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
                                    <li><a class="dropdown-item head-button user-select-none" href="schedule.php">Записаться</a></li>
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
    <img id="triangle" class="user-select-none"
         src="pics/price/Polygon-1.svg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-4">
                <p class="main-text-max user-select-none">Price</p>
                <div class="rhombus user-select-none"></div>
            </div>
            <div class="col-sm-12 col-lg-8">
                <p class="main-text-mini user-select-none">find out about courses & choose</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="white-box col-auto">
                <p id="translate" class="cost-lower-text user-select-none">индивидуальные</p>
                <svg class="bc-box user-select-none" xmlns="http://www.w3.org/2000/svg" width="230" height="74" viewBox="0 0 277 72" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V62C277 67.5229 272.523 72 267 72H10C4.47716 72 0 67.5229 0 62V10Z" fill="#0358E4"/>
                </svg>
                <p class="white-text-name user-select-none">personal<br>lessons</p>
                <p class="information-text-mini"><br>онлайн занятия<br>(zoom, google meet)<br><br>60 минут/ 90 минут<br><br>English file<br>starlight<br>spotlight<br>forward<br><br>устные и<br>письменные<br>контрольные точки<br><br>домашнее задание</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">1000 руб</p>
                <p class="cost-lower-text user-select-none">урок</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">1500 руб</p>
                <p class="cost-lower-text user-select-none">пара</p>
            </div>
            <div class="white-box col-auto">
                <p id="translate" class="cost-lower-text user-select-none">групповые</p>
                <svg class="bc-box user-select-none" xmlns="http://www.w3.org/2000/svg" width="230" height="74" viewBox="0 0 277 72" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V62C277 67.5229 272.523 72 267 72H10C4.47716 72 0 67.5229 0 62V10Z" fill="#0358E4"/>
                </svg>
                <p class="white-text-name user-select-none">group<br>lessons</p>
                <p class="information-text-mini"><br>онлайн занятия в<br>группе 2-4 человека<br><br>60 минут/ 90 минут<br><br>English file<br>starlight<br>spotlight<br>forward<br><br>устные и<br>письменные<br>контрольные точки<br><br>домашнее задание</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">750 руб</p>
                <p class="cost-lower-text user-select-none">урок</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">1200 руб</p>
                <p class="cost-lower-text user-select-none">пара</p>
            </div>
            <div class="white-box col-auto">
                <p id="translate" class="cost-lower-text user-select-none">экзамены</p>
                <svg class="bc-box user-select-none" xmlns="http://www.w3.org/2000/svg" width="230" height="74" viewBox="0 0 277 72" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V62C277 67.5229 272.523 72 267 72H10C4.47716 72 0 67.5229 0 62V10Z" fill="#0358E4"/>
                </svg>
                <p class="white-text-name user-select-none">exam<br>course</p>
                <p class="information-text-mini"><br>онлайн занятия<br>(индивидуально)<br><br>60 минут/ 90 минут<br><br>разбор пробников<br>(1+2 часть)<br><br>устные и<br>письменные<br>контрольные точки<br><br>д/з+индивидуальная<br>проверка<br><br></p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">1000 руб</p>
                <p class="cost-lower-text user-select-none">урок</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">1500 руб</p>
                <p class="cost-lower-text user-select-none">пара</p>
            </div>
            <div class="white-box col-auto">
                <p id="translate" class="cost-lower-text user-select-none">дополнительные</p>
                <svg class="bc-box user-select-none" xmlns="http://www.w3.org/2000/svg" width="230" height="74" viewBox="0 0 277 72" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V62C277 67.5229 272.523 72 267 72H10C4.47716 72 0 67.5229 0 62V10Z" fill="#0358E4"/>
                </svg>
                <p class="white-text-name user-select-none">extra<br>course</p>
                <p class="information-text-mini"><br>онлайн занятия<br>(в группе/<br>индивидуально)<br><br>60 минут<br><br>знакомство с<br>английскими<br>сериалами и<br>анимациями<br><br>сленг<br><br>развлекательный<br>формат</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">750 руб</p>
                <p class="cost-lower-text user-select-none">в группе</p>
                <svg class="bc-box user-select-none mb-2" xmlns="http://www.w3.org/2000/svg" width="230" height="66" viewBox="0 0 277 74" fill="none">
                    <path d="M0 10C0 4.47715 4.47715 0 10 0H267C272.523 0 277 4.47715 277 10V64C277 69.5229 272.523 74 267 74H10C4.47716 74 0 69.5229 0 64V10Z" fill="#D9D9D9"/>
                </svg>
                <p class="cost-text user-select-none">1200 руб</p>
                <p class="cost-lower-text user-select-none">индивидуально</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>