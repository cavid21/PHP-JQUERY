<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION["success"])){
                $file = fopen("list.txt" , "r");
                $list = fread($file , filesize('list.txt'));
                fclose($file);
                $list = explode("|", $list);
                echo "your pass: " . $list[0] . "<br>";
        ?>
            <a href="<?= $list[1]?>">your image link</a>
        <?php        unset($_SESSION["success"]);
            }  else {
                header('Location:index.php');
            }
        ?>
    </body>
</html>
