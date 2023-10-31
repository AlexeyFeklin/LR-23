<html>
<head>
    <title>Запись в текстовый файл</title>
</head>
<body>
    <form action="z4.php">    
        <input type="text">
        <button type="submit">ОК</button>
    </form>
    Я являюсь участников молодежного движения КотикиСобачки!
    <?php 
        $f = fopen("textfile.txt","w");

        fwrite($f,$_POST["textblock"]);

        fclose($f);

        $f = fopen("textfile.txt","r");
        print(fgets($f));
        fclose($f);
    ?>
</body>
</html>