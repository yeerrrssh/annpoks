<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="Rus Sofia" name="author">
    <meta content="репетитор по английскому, английский кемерово, репетитор кемерово, анна покасова, репетитор"
          name="keywords">
    <meta content="From zero to hero - репетитор по английскому языку" name="description">
    <title>Annpoks</title>
    <link rel="icon" href="pics/AP.svg" type="image/svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="./css/main.css">

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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-auto col-lg-6">
                    <div class="ms-3">
                        <p id="home-page-text" class="user-select-none">English</p>
                        <p id="home-page-text-brand" class="justify-content-end user-select-none">annpoks</p>
                        <p id="home-page-text-slogan" class="user-select-none">from zero to hero</p>
                        <div class="rhombus user-select-none"></div>
                        <p id="home-page-text-mini-1" class="home-page-text-mini user-select-none">выберите из более 6 направлений обучения,</p>
                        <p id="home-page-text-mini-2" class="home-page-text-mini user-select-none">ориентированных на ваши цели и интересы</p>
                        <form id="form-aria" action="course.php">
                            <button id="cntr-btn" class="blue-button user-select-none mt-3" href="course.php">выбрать & начать</button>
                        </form>
                        <div class="mt-5">
                            <a href="https://instagram.com/annpoks?igshid=MzRlODBiNWFlZA==" target="_blank">
                                <img id="icon-1" class="icons user-select-none"
                                 src="pics/index/icon_logo_instagram.png">
                            </a>
                            <a href="https://vk.com/annapokasova" target="_blank">
                                <img id="icon-2" class="icons user-select-none"
                                 src="pics/index/icon_logo_vk.png">
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=79512254921" target="_blank">
                                <img id="icon-3" class="icons user-select-none"
                                 src="pics/index/icon_logo_whatsapp.png">
                            </a>
                            <a href="https://t.me/annpoks" target="_blank">
                                <img id="icon-4" class="icons user-select-none"
                                 src="pics/index/icon_logo_telegram.png">
                            </a>
                            <p id="snoska" class="snoska-text user-select-none"><span style="font-size: 20px;">↑</span> признана экстремистской организацией на территории РФ</p>
                            <div class="down-part">
                                <div class="circle user-select-none"></div>
                                <?php
                                if ($_COOKIE['user'] == ''):
                                    ?>
                                    <form action="log-in.php">
                                        <button class="orientated-button blue-button user-select-none" href="log-in.php">log in</button>
                                    </form>
                                <?php elseif ($_COOKIE['role'] == 'student'): ?>
                                    <form action="schedule.php">
                                        <button class="orientated-button blue-button user-select-none" href="schedule.php">записаться</button>
                                    </form>
                                <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                    <form action="sign-up.php">
                                        <button class="orientated-button blue-button user-select-none" href="sign-up.php">sign up</button>
                                    </form>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto col-lg-6">
                    <div class="ms-3">
                        <div id="home-photo-block">
                            <img id="photo" class="photos user-select-none"
                                 src="pics/index/home-page-background-photo.png">
                            <div class="circle user-select-none"></div>
                            <?php
                            if ($_COOKIE['user'] == ''):
                            ?>
                            <form action="log-in.php">
                                <button class="orientated-button blue-button user-select-none" href="log-in.php">log in</button>
                            </form>
                            <?php elseif ($_COOKIE['role'] == 'student'): ?>
                                <form action="schedule.php">
                                    <button class="orientated-button blue-button user-select-none" href="schedule.php">записаться</button>
                                </form>
                            <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                <form action="sign-up.php">
                                    <button class="orientated-button blue-button user-select-none" href="sign-up.php">sign up</button>
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
