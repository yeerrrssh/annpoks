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

    <link rel="stylesheet" href="./css/contacts.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body style="overflow: hidden">
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
                                    <li><a class="dropdown-item head-button-black user-select-none" href="schedule-admin.php">Расписание</a></li>
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
             srcset="pics/contacts/background-blue.png 52w, pics/contacts/background-blue.png 40w, pics/contacts/background-blue.png 30w"
             sizes="(min-width: 1600px) 50px, (max-width: 1600px) 46px, (max-width: 1034px) 30px"
             src="pics/contacts/background-blue.png">
        <div class="row justify-content-center">
            <div class="white-box col-auto">
                <p class="big-text user-select-none">Contact me</p>
                <p class="blue-text user-select-none">& start learning</p>
                <p class="info-text user-select-none">свяжитесь со мной!<br>вместе мы подберём подходящий<br>курс, количество занятий<br>+ вы получите доступ к личному<br>кабинету</p>
                <div class="row justify-content-start">
                    <div class="col-auto">
                        <a href="https://vk.com/annapokasova" target="_blank">
                            <img class="icons user-select-none"
                                 srcset="pics/contacts/icon_logo_vk.png 52w, pics/contacts/icon_logo_vk.png 40w, pics/contacts/icon_logo_vk.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 35px, (max-width: 1034px) 30px"
                                 src="pics/contacts/icon_logo_vk.png">
                        </a><br>
                        <a href="https://api.whatsapp.com/send?phone=79512254921" target="_blank">
                            <img id="icon-2" class="icons user-select-none"
                                 srcset="pics/contacts/icon_logo_whatsapp.png 52w, pics/contacts/icon_logo_whatsapp.png 40w, pics/contacts/icon_logo_whatsapp.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 40px, (max-width: 1034px) 30px"
                                 src="pics/contacts/icon_logo_whatsapp.png">
                        </a><br>
                        <a href="https://t.me/annpoks" target="_blank">
                            <img id="icon-3" class="icons user-select-none"
                                 srcset="pics/contacts/icon_logo_telegram.png 52w, pics/contacts/icon_logo_telegram.png 40w, pics/contacts/icon_logo_telegram.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 40px, (max-width: 1034px) 30px"
                                 src="pics/contacts/icon_logo_telegram.png">
                        </a><br>
                        <a href="https://instagram.com/annpoks?igshid=MzRlODBiNWFlZA==" target="_blank">
                            <img id="icon-4" class="icons user-select-none"
                                 srcset="pics/contacts/icon_logo_instagram.png 52w, pics/contacts/icon_logo_instagram.png 40w, pics/contacts/icon_logo_instagram.png 30w"
                                 sizes="(min-width: 1600px) 50px, (max-width: 1600px) 42px, (max-width: 1034px) 30px"
                                 src="pics/contacts/icon_logo_instagram.png">
                        </a>
                    </div>
                    <div class="col-auto column-text">
                        <p id="contact-1" class="contact-text">Вконтакте: Анна покасова</p>
                        <p id="contact-2" class="contact-text">whatsapp</p>
                        <p id="contact-3" class="contact-text">telegram: @annpoks</p>
                        <p id="contact-4" class="contact-text">insta*: @annpoks</p>
                        <p class="snoska-text user-select-none">* признана экстремистской организацией на территории РФ</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>