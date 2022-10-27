<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Практика по PHP </title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="flex_container">
        <?php include 'header.inc.php' ?>
        <div class="about_me">
            <div class="myAve">
                 <h1> <?php echo $ave ?> </h1>
            </div>
            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/ava.png">'; ?>
                </div>
                <div class="full_info">
                    <?php include 'fullinfo.inc.php'; ?>
                    <p><?php
                            echo <<<EOD
                                    Меня зовут $name $surname.<br>
                                    Мне $age лет. <br>
                                    Я живу в городе $city.<br>
                                    В рамках изучения модуля "Основы РНР" курса по пентесту <br>
                                    мы научились поднимать локальный вэб-сервер, изучили синтаксис языка,<br>
                                    научились создавать переменные и производить некоторые операции над ними.
                                EOD;
                        ?></p>
                </div>
            </div>
        </div>
        <div class="knowledge">
            <p><?php include 'knowledge.inc.php'; ?><p></p>
        </div>
    <div class="hist">
        <?php echo '<img src="/img/another_history.jpg">'; ?>
    </div>
    <div class="footer">
        <?php include 'footer.inc.php' ?>
    </div>
    </div>
</body>
</html>