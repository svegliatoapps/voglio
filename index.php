<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Voglio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php

    $link = mysqli_connect("voglioapp.mysql.database.azure.com","svegliato@voglioapp","TitAjujdifAkna6");
    if (mysqli_connect_errno()) {
        printf("Не удалось подключиться: %s\n", mysqli_connect_error());
        exit();
    }
    $db = mysqli_select_db($link, "sys");
    mysqli_set_charset($link,"utf8");
    $result = mysqli_query($link, "SELECT * FROM organizations");

    while($row = mysqli_fetch_assoc($result)){?>
    <div class="container">
        <img src="images/<?php echo $row['photo']?>" alt="">
        <h1><?php echo $row['title']?></h1>
        <p><?php echo $row['description']?></p>
    </div>
    <?php }?>

</body>
</html>







