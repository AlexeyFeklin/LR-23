<html>
<head>
    <title>Чтение из текстовых файлов</title>
</head>
<body>
    <?php 
        $f = fopen("1.txt","r");

        while(!feof($f)){
            print(fgets($f)."<br>");
        }
        fclose($f);
    ?>
</body>
</html>