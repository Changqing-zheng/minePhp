<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $flag = true;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['username'];
            $p = $_POST['pwd'];
            if($name == "123" && $p == "456"){
                $flag = false;
            }else{
                $flag = true;
            }
        }
    ?>
    <?php
        if($flag) {
    ?>
        <form action="login.php" method="post">
            <input type="text" name="username"><br/>
            <input type="password" name="pwd"><br/>
            <input type="submit" value="登录">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo "登录失败";
            }
        ?>
    <?php
        }else{
            echo "恭喜登录成功";
        }
    ?>
</body>
</html>