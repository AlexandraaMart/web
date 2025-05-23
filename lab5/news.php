<?php
require_once "NewsDB.class.php";

$news = new NewsDB();

// Переменная для хранения сообщений об ошибках
$errMsg = "";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "save_news.inc.php";
}

// Проверяем запрос на удаление новости
if (isset($_GET['del'])) {
    require "delete_news.inc.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8">
	<style>
    body {
        font-family: sans-serif;
        background-color: #f4f4f4;
        margin: 5px;
    }
    .container {
        font-family: sans-serif;
        background-color: #f4f4f4;
        padding: 30px;
        border-radius: 10px;
        line-height: 1.2;
    }
    h1 {
        color: #333;
    }
 </style>
</head>
<?php
require_once "NewsDB.class.php";

$news = new NewsDB();

// Переменная для хранения сообщений об ошибках
$errMsg = "";

// Проверяем, была ли отправлена форма
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "save_news.inc.php";
}

// Проверяем запрос на удаление новости
if (isset($_GET['del'])) {
    require "delete_news.inc.php";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8">
	<style>
    body {
        font-family: sans-serif;
        background-color: #f4f4f4;
        margin: 5;
    }
    .container {
        font-family: sans-serif;
        background-color: #f4f4f4;
        padding: 30px;
        border-radius: 10px;
        line-height: 1.2;
    }
    h1 {
        color: #333;
    }
 </style>
</head>
<body>
<div class='container'>
    <div class="news-section">
        <h1>Последние новости</h1>
        <?php
        require "get_news.inc.php";
        ?>
    </div>
  
    <div class="form-selection">
        <hr style="border: 1px solid #000; margin: 20px 0;">
        <h1>Создание новости</h1>
          
        <?php
        // Выводим сообщение об ошибке, если оно есть
        if (!empty($errMsg)) {
            echo "<div class='error-message'>{$errMsg}</div>";
        }
        ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            Заголовок новости:<br>
            <input type="text" name="title" required><br>
            Выберите категорию:<br>
            <select name="category" required>
                <option value="">Выберите категорию</option>
                <option value="1">Политика</option>
                <option value="2">Культура</option>
                <option value="3">Спорт</option>
            </select>
            <br />
            Текст новости:<br>
            <textarea name="description" cols="50" rows="5" required></textarea><br>
            Источник:<br>
            <input type="text" name="source" required><br>
            <br>
            <input type="submit" value="Добавить!">
        </form>
    </div>
</div>
</body>

</html>
</html>
