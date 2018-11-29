<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .ipt{
            color: red;
        }
        .pwd1{
            color: red;
        }
        .pwd2{
            color: red;
        }
    </style>
</head>
<body>
    <input type="text" id="username">
    <span class="ipt ipt-error"></span>
    <br/>
    <input type="password" id="pwd1">
    <span class="pwd1 pwd1-error"></span>
    <br/>
    <input type="password" id="pwd2">
    <span class="pwd2 pwd2-error"></span>
    <br/>
    <button id="btn">注册</button>
    <script src="jquery-1.12.4.js"></script>
    <script>
        $(function () {
            $("#btn").on("click",function () {
                var username = $('#username').val();
                var pwd1 = $('#pwd1').val();
                var pwd2 = $('#pwd2').val();
                $.get('server.php',{
                    name:username,
                    p1:pwd1,
                    p2:pwd2
                },function (data) {
                    if(data == "err1"){
                        $('.ipt-error').html('用户名不能为空');
                    }else if(data == 'err2'){
                        $('.pwd1-error').html('密码不能为空');
                    }else if(data == 'err3'){
                        $('.pwd2-error').html('确认密码不能为空');
                    }
                },'text')
            })
        })


    </script>
</body>
</html>