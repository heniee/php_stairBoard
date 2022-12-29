<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/login.css">
    <link href="//fonts.googleapis.com/earlyaccess/nanumgothic.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php
include 'index.php';
    ?>


    <?php
     if(!isset($_SESSION['userid'])) { ?>

<div class = "main"> 

    <h1>Login</h1>
    <form method="post" action="/stairBoard/login_ok.php" name="loginForm">
    <div class="loginForm">
        <table class="loginTab" >
                <tr class="id">
                    <td>ID</td>
                    <td><input type="text" name=userid placeholder="아이디" required></td>
                </tr>
                <tr>
                    <td>PW</td>
                    <td><input type="password" name=userpw placeholder="비밀번호" required></td>
                </tr>
        </table>
      

        <div class="btnset">
                <button id="submit" type="submit" value="로그인">로그인</button>
               
                <button id="submit"onclick="location.href='/stairBoard/join.php'">회원가입</button>
        </div>
    </form>
     </div>
    
</div>   

    <?php } else {
        $userid = $_SESSION['userid'];
        echo "<p>WELCOME $userid($name)"; }
        ?>

</body>
</html>