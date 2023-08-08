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

    <link rel="stylesheet" href="./css/course.css">

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
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#F1F1F1">
                                        <li><a class="dropdown-item head-button user-select-none" href="contacts.php">Контакты</a></li>
                                        <li><a class="dropdown-item head-button user-select-none" href="schedule.php">Расписание</a></li>
                                        <li><a class="dropdown-item head-button user-select-none" href="php/exit.php">Выйти из<br><?=$_COOKIE['user']?></a></li>
                                    </ul>
                                <?php elseif ($_COOKIE['role'] == 'admin'): ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:#F1F1F1">
                                        <li><a class="dropdown-item head-button user-select-none" href="contacts.php">Контакты</a></li>
                                        <li><a class="dropdown-item head-button user-select-none" href="schedule-admin.php">Расписание</a></li>
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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-7" id="first-col-course">
                    <div class="row justify-content-center">
                        <p class="courses-page-text user-select-none ms-5">Courses</p>
                        <div class="col-5">
                            <a href="course-group-lessons.php">
                                <img class="blue-photo user-select-none"
                                     srcset="pics/course/group-lessons-logo.png 200w, pics/course/group-lessons-logo.png 150w, pics/course/group-lessons-logo.png 100w"
                                     sizes="(min-width: 1600px) 200px, (max-width: 1600px) 150px, (max-width: 1034px) 100px"
                                     src="pics/course/group-lessons-logo.png">
                                <div id="blue-filter-mini" class="user-select-none"></div>
                                <div class="blue-frame-mini user-select-none">
                                    <p class="blue-photo-text user-select-none">group lessons</p>
                                    <p class="blue-photo-mini-text up user-select-none">групповые</p>
                                    <p class="blue-photo-mini-text down user-select-none">занятия</p>
                                </div>
                            </a>
                            <a href="course-extra-lessons.php">
                                <img id="mini-photo-2" class="user-select-none"
                                     srcset="pics/course/extra-lessons-logo.png 200w, pics/course/extra-lessons-logo.png 150w, pics/course/extra-lessons-logo.png 100w"
                                     sizes="(min-width: 1600px) 200px, (max-width: 1600px) 150px, (max-width: 1034px) 100px"
                                     src="pics/course/extra-lessons-logo.png">
                                <div class="blue-frame-mini user-select-none">
                                    <p class="blue-photo-text user-select-none">extra course</p>
                                    <p class="blue-photo-mini-text up user-select-none">дополнительный</p>
                                    <p class="blue-photo-mini-text down user-select-none">курс</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-7">
                            <div class="rhombus-blue user-select-none"></div>
                            <a href="course-personal-lessons.php">
                                <img id="square-photo" class="user-select-none"
                                     srcset="pics/course/personal-lessons-logo.png 200w, pics/course/personal-lessons-logo.png 150w, pics/course/personal-lessons-logo.png 100w"
                                     sizes="(min-width: 1600px) 200px, (max-width: 1600px) 150px, (max-width: 1034px) 100px"
                                     src="pics/course/personal-lessons-logo.png">
                                <div class="blue-frame-medium user-select-none">
                                    <p id="square-photo-text" class="user-select-none">personal lessons</p>
                                    <p class="blue-photo-mini-text up user-select-none">индивидуальные</p>
                                    <p class="blue-photo-mini-text down user-select-none">занятия</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-3" id="last-col-course">
                    <a href="course-exam-lessons.php">
                        <img id="big-photo" class="user-select-none"
                             srcset="pics/course/exam-lessons-logo.png 200w, pics/course/exam-lessons-logo.png 150w, pics/course/exam-lessons-logo.png 100w"
                             sizes="(min-width: 1600px) 200px, (max-width: 1600px) 150px, (max-width: 1034px) 100px"
                             src="pics/course/exam-lessons-logo.png">
                        <div id="blue-filter-big" class="user-select-none"></div>
                        <div class="blue-frame-big user-select-none">
                            <p id="big-photo-text" class="user-select-none">exam course</p>
                            <p class="blue-photo-mini-text up user-select-none">подготовка</p>
                            <p class="blue-photo-mini-text down user-select-none">к экзаменам</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>