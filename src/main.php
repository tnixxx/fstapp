<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="/src/img/favicon.ico">
    <title>Приложение</title>
</head>
<body>
    <header class="header">
        <div class="container header-container">
            <img src="img/logo.svg" alt="" class="header-logo">
        </div>
    </header>
    <form name="form1" action="loadfile.php" enctype="multipart/form-data" method="post">
    <input type="file" name="path" title="Выберите файл"/> </br>
    </br>
    <input type="submit" name="button" /> </br>
    <footer class="footer">
        <div class="container footer-container">
            <div class="navbar">
                <div class="navbar-addimg">
                    <img src="img/addimg.svg" alt="">
                </div>
                <!-- кнопка посередине начало -->
                <div class="example-1 navbar-makephoto">
                    <div class="form-group">
                      <label class="label">
                        <input type="file">
                      </label>
                    </div>
                </div>
                <!-- кнопка посередине конец -->
                <div class="options-menu-wrap options">
                    <nav class="menu-popup options-menu">
                        <a href="#"><img src="img/settings.svg" alt="Настройки" rel="nofollow" rel="noreferrer" class="popup-img"></a>
                        <a href="#"><img src="img/search.svg" alt="Поиск" rel="nofollow" rel="noreferrer" class="popup-img"></a>
                        <a href="#"><img src="img/save.svg" alt="Сохраненное" rel="nofollow" rel="noreferrer" class="popup-img"></a>
                    </nav>
                    <img class="options-menu-toggler" src="img/menu-toggler.png" alt="Переключатель менюшки">
                </div>
            </div>
        </div>
    </footer>
    <!-- -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!--  -->
</body>
<?php
    include ('src/main.html');
    $file = "upload/".$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'], $file);
    if(isset($_FILES['path']['name']))
    {
        echo "Загруженный файл: ".$_FILES['path']['name']."</br>";
        echo "Размер: ".$_FILES['path']['size']."байт";
    }
?>
</html>