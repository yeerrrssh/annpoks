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

    <link rel="stylesheet" href="./css/main.css">

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
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#F1F1F1">
                                        <li><a class="dropdown-item head-button user-select-none" href="contacts.php">Контакты</a></li>
                                        <li><a class="dropdown-item head-button user-select-none" href="schedule.php">Расписание</a></li>
                                        <li><a class="dropdown-item head-button user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                    </ul>
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
                <div class="col-lg-6">
                    <div class="ms-3">
                        <p id="home-page-text" class="user-select-none">English</p>
                        <p id="home-page-text-brand" class="justify-content-end user-select-none">annpoks</p>
                        <p id="home-page-text-slogan" class="user-select-none">from zero to hero</p>
                        <div class="rhombus user-select-none"></div>
                        <p id="home-page-text-mini-1" class="home-page-text-mini user-select-none">выберите из более 6 направлений обучения,</p>
                        <p id="home-page-text-mini-2" class="home-page-text-mini user-select-none">ориентированных на ваши цели и интересы</p>
                        <form action="course.php">
                            <button class="blue-button user-select-none mt-3" href="course.php">выбрать & начать</button>
                        </form>
                        <div class="mt-5">
                            <a href="https://instagram.com/annpoks?igshid=MzRlODBiNWFlZA==" target="_blank">
                                <img class="icons user-select-none"
                                 srcset="pics/index/icon_logo_instagram.png 52w, pics/index/icon_logo_instagram.png 40w, pics/index/icon_logo_instagram.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                                 src="pics/index/icon_logo_instagram.png">
                            </a>
                            <a href="https://vk.com/annapokasova" target="_blank">
                                <img class="icons user-select-none"
                                 srcset="pics/index/icon_logo_vk.png 52w, pics/index/icon_logo_vk.png 40w, pics/index/icon_logo_vk.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                                 src="pics/index/icon_logo_vk.png">
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=79512254921" target="_blank">
                                <img class="icons user-select-none"
                                 srcset="pics/index/icon_logo_whatsapp.png 52w, pics/index/icon_logo_whatsapp.png 40w, pics/index/icon_logo_whatsapp.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                                 src="pics/index/icon_logo_whatsapp.png">
                            </a>
                            <a href="https://t.me/annpoks" target="_blank">
                                <img class="icons user-select-none"
                                 srcset="pics/index/icon_logo_telegram.png 52w, pics/index/icon_logo_telegram.png 40w, pics/index/icon_logo_telegram.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                                 src="pics/index/icon_logo_telegram.png">
                            </a>
                            <p id="snoska" class="snoska-text user-select-none"><span style="font-size: 20px;">↑</span> признана экстремистской организацией на территории РФ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-3">
                        <div id="home-photo-block">
                            <img class="photos user-select-none"
                                 srcset="pics/index/home-page-background-photo.png 52w, pics/index/home-page-background-photo.png 40w, pics/index/home-page-background-photo.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                                 src="pics/index/home-page-background-photo.png">
                            <div class="circle user-select-none"></div>
                            <?php
                            if ($_COOKIE['user'] == ''):
                            ?>
                            <form action="log-in.php">
                                <button class="orientated-button blue-button user-select-none" href="log-in.php">log in</button>
                            </form>
                            <?php else: ?>
                                <form action="schedule.php">
                                    <button class="orientated-button blue-button user-select-none" href="schedule.php">записаться</button>
                                </form>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>