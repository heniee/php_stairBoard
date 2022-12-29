<?php

include 'index.php';

$userid = $_POST['decideId']; 
$userpw = $_POST['userpw'];
$pwcheck = $_POST['pwcheck'];
$username = $_POST['username'];
$date = date('Y-m-d');  

print($pwcheck);

//비밀번호 암호화(비밀번호 값이 매번 달라짐)
$userpw_hash = password_hash($userpw, PASSWORD_DEFAULT);

//echo $userid;
//echo $userpw_hash;

$URL = '/stairBoard/login.php';

if($pwcheck != $userpw){
    echo "<script> alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
    exit();

}else{
    echo "<script>alert('회원가입이 완료되었습니다.');";
    echo "window.location.replace($URL);</script>";
}

$query = "insert into member(userid,userpw,username,date)
            values('$userid','$userpw_hash','$username','$date')";            
$result = mysqli_query($connect,$query);



?>

a