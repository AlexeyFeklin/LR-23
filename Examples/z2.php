<html>
<head>
    <title>FileSystemObject</title>
</head>
<body>
    <?php
        $floder = opendir("../../tutorials/php/");

        while(($entry = readdir($floder)) != ""){
            echo $entry."<br/>";
        }

        $floder = closedir($floder);
    ?>
</body>
</html>