<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL-JC.net | My Guestbook</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="fl col">

    <header class="fl a-center">
        <p>
            <i><b>AL-JC.net</b></i>
        </p>
            <nav>
                <a href=".." class="unpressed m-r-15">Главная страница</a>
                <a href="#" class="pressed">Гостевая книжка</a>
            </nav>
    </header>

    <main class="fl">
        <div class="main fl col a-center">

            <div class="title fl col a-center b-r">
                <h1>~ Гостевая книга ~</h1>
                <p>Сюда можно написать что угодно :)</p>
            </div>

            <div class="guestbook fl col b-r">
                <div class="inserter fl b-r">
                    <form action="./php/write.php" method="POST" class="fl col">
                        <input name="gname" class="input b-r" placeholder="Имя" type="text">
                        <textarea name="gmessage" placeholder="Введите сообщение..." class="input m-t-15 b-r" id="message" cols="30" rows="5"></textarea>
                        <input name="write" class="input m-t-15 b-r" type="submit">
                    </form>
                </div>
                <?php
                    require_once '../db/connection.php';
                    $stmt = $conn->query('SELECT * FROM guestbook ORDER BY id DESC');
                    foreach ($stmt as $row) {
                        echo '<div class="messages b-r"><div><h3>- '.$row['name'].'</h3><p>'.$row['content'].'</p></div></div>';
                    }
                ?>
            </div>

        </div>
    </main>

    <footer class="fl col a-center">
        <p>Developed by SashaKochetto</p>
        <p>- 2024</p>
    </footer>

</body>
</html>