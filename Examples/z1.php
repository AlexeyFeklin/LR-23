<html>
<head>
   <title>Файловая система</title>
</head>
<body>
    <?php
        echo "<h1>file: lesson14.php</h1>";
        echo "<p>В полсдений раз редактировался: ",date("r",filemtime("lesson14.php"));
        echo "<p>В полсдений раз открывался: ",date("r",fileatime("lesson14.php")),"</p>";
        echo "<p>Размер: ".filesize("lesson14.php")." байт</p>"
    ?>
</body>
</html>