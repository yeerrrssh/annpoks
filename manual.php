<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="Анна Сергеевна Покасова" name="author">
    <title>Инструкция</title>
    <link rel="icon" href="pics/AP.svg" type="image/svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="./css/manual.css">
    <script src="js/manual.js"></script>

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
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #F1F1F1">
                                    <li><a class="dropdown-item head-button user-select-none" href="contacts.php">Контакты</a></li>
                                    <li><a class="dropdown-item head-button user-select-none" href="schedule.php">Записаться</a></li>
                                    <li><a class="dropdown-item head-button user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                </ul>
                            <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #F1F1F1">
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
        <img id="triangle" class="user-select-none"
             src="pics/manual/Polygon-3.svg">
        <div class="row justify-content-center">
            <div class="col-sm-auto col-lg-6">
                <div class="ms-3">
                    <p class="big-text user-select-none">How</p>
                    <div id="rhombus-sm" class="rhombus-right user-select-none"></div>
                    <p class="black-text user-select-none">to get started learning</p>
                    <div id="rhombus" class="rhombus-right user-select-none"></div>

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div id="first-step" class="carousel-item active">
                                <p class="white-main-text user-select-none">Шаг 1</p>
                                <div class="white-not-button user-select-none">знакомство</div>
                                <div class="row justify-content-end">
                                    <p class="white-info-text user-select-none">выберите подходящий курс и свяжитесь со мной</p>
                                </div>
                                <div class="white-box-1">
                                    <img class="window user-select-none" srcset="pics/manual/window-1-1.PNG 52w, pics/manual/window-1-1.PNG 40w, pics/manual/window-1-1.PNG 30w"
                                         src="pics/manual/window-1-1.PNG">
                                </div>
                                <div id="second-box" class="white-box-1">
                                    <img class="window user-select-none" srcset="pics/manual/window-1-2.PNG 52w, pics/manual/window-1-2.PNG 40w, pics/manual/window-1-2.PNG 30w"
                                         src="pics/manual/window-1-2.PNG">
                                </div>
                            </div>
                            <div id="second-step" class="carousel-item">
                                <p class="white-main-text user-select-none">Шаг 2</p>
                                <div class="white-not-button user-select-none">доступ</div>
                                <div class="row justify-content-end">
                                    <p class="white-info-text user-select-none">получите логин и пароль,<br>бронируйте дату и время<br>занятий в личном кабинете</p>
                                </div>
                                <div class="white-box-23">
                                    <img class="window-2 user-select-none" srcset="pics/manual/window-2.PNG 52w, pics/manual/window-2.PNG 40w, pics/manual/window-2.PNG 30w"
                                         src="pics/manual/window-2.PNG">
                                </div>
                            </div>
                            <div id="third-step" class="carousel-item">
                                <p class="white-main-text user-select-none">Шаг 3</p>
                                <div class="white-not-button user-select-none">уроки</div>
                                <div class="row justify-content-end">
                                    <p class="white-info-text user-select-none">подготовьтесь к занятию<br>я отправлю вам ссылку на zoom<br>конференцию</p>
                                </div>
                                <div class="white-box-23">
                                    <img class="window-3 user-select-none" srcset="pics/manual/window-3.PNG 52w, pics/manual/window-3.PNG 40w, pics/manual/window-3.PNG 30w"
                                         src="pics/manual/window-3.PNG">
                                </div>
                            </div>
                        </div>
                        <button id="prevBtn" class="carousel-control-prev user-select-none d-none" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                            <svg id="down-arrow" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 82 82" fill="none">
                                <path d="M41 82C18.3563 82 0 63.6437 0 41C0 18.3563 18.3563 0 41 0C63.6437 0 82 18.3563 82 41C82 63.6437 63.6437 82 41 82ZM41 76.2791C60.4841 76.2791 76.2791 60.4841 76.2791 41C76.2791 21.5159 60.4841 5.72093 41 5.72093C21.5159 5.72093 5.72093 21.5159 5.72093 41C5.72093 60.4841 21.5159 76.2791 41 76.2791ZM46.1308 58.8523L30.2632 42.5691C29.198 41.476 29.2065 39.7305 30.2823 38.6478L46.1499 22.6784C47.2381 21.5832 49.008 21.5775 50.1032 22.6657C51.1984 23.7539 51.2041 25.5239 50.1159 26.6191L36.1871 40.6372L50.1349 54.9504C51.2124 56.0561 51.1895 57.826 50.0838 58.9034C48.9781 59.9809 47.2083 59.9581 46.1308 58.8523Z" fill="white"/>
                            </svg>
                        </button>
                        <button id="nextBtn" class="carousel-control-next user-select-none" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                            <svg id="up-arrow" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 82 82" fill="none">
                                <path d="M41 0C63.6437 0 82 18.3563 82 41C82 63.6437 63.6437 82 41 82C18.3563 82 0 63.6437 0 41C0 18.3563 18.3563 0 41 0ZM41 5.72093C21.5159 5.72093 5.72093 21.5159 5.72093 41C5.72093 60.4841 21.5159 76.2791 41 76.2791C60.4841 76.2791 76.2791 60.4841 76.2791 41C76.2791 21.5159 60.4841 5.72093 41 5.72093ZM35.8692 23.1477L51.7368 39.4309C52.802 40.524 52.7935 42.2695 51.7177 43.3522L35.8501 59.3216C34.7619 60.4168 32.992 60.4225 31.8968 59.3343C30.8016 58.2461 30.7959 56.4761 31.8841 55.3809L45.8129 41.3628L31.8651 27.0496C30.7876 25.9439 30.8105 24.174 31.9162 23.0966C33.0219 22.0191 34.7917 22.0419 35.8692 23.1477Z" fill="#F1F1F1"/>
                            </svg>
                        </button>
                    </div>

                    <div class="row justify-content-center small-screen">
                        <div class="small-col col-auto">
                            <p class="white-main-text user-select-none">Шаг 1</p>
                            <div class="white-not-button user-select-none">знакомство</div>
                            <div class="row justify-content-end">
                                <p class="white-info-text user-select-none">выберите подходящий курс и свяжитесь со мной</p>
                            </div>
                            <div class="white-box-1">
                                <img class="window user-select-none" srcset="pics/manual/window-1-1.PNG 52w, pics/manual/window-1-1.PNG 40w, pics/manual/window-1-1.PNG 30w"
                                     src="pics/manual/window-1-1.PNG">
                            </div>
                            <div id="second-box" class="white-box-1">
                                <img class="window user-select-none" srcset="pics/manual/window-1-2.PNG 52w, pics/manual/window-1-2.PNG 40w, pics/manual/window-1-2.PNG 30w"
                                     src="pics/manual/window-1-2.PNG">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center small-screen">
                        <div class="small-col col-auto">
                            <p class="white-main-text user-select-none">Шаг 2</p>
                            <div class="white-not-button user-select-none">доступ</div>
                            <div class="row justify-content-end">
                                <p class="white-info-text user-select-none">получите логин и пароль, бронируйте дату и время занятий в личном кабинете</p>
                            </div>
                            <div class="white-box-23">
                                <img class="window-2 user-select-none" srcset="pics/manual/window-2.PNG 52w, pics/manual/window-2.PNG 40w, pics/manual/window-2.PNG 30w"
                                     src="pics/manual/window-2.PNG">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center small-screen">
                        <div class="small-col col-auto">
                            <p class="white-main-text user-select-none">Шаг 3</p>
                            <div class="white-not-button user-select-none">уроки</div>
                            <div class="row justify-content-end">
                                <p class="white-info-text user-select-none">подготовьтесь к занятию я отправлю вам ссылку на zoom конференцию</p>
                            </div>
                            <div class="white-box-23">
                                <img class="window-3 user-select-none" srcset="pics/manual/window-3.PNG 52w, pics/manual/window-3.PNG 40w, pics/manual/window-3.PNG 30w"
                                     src="pics/manual/window-3.PNG">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-auto col-lg-6">
                <img class="photo user-select-none"
                     src="pics/manual/photo-manual.png">
            </div>
        </div>
    </div>
</main>
</body>
</html>