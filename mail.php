<?php
if(@$_POST["name"]!="") {
$name = $_POST['name'];
$email = $_POST['email'];
$sub = "Comments from Official Website";
$message = $_POST['message'];

mb_internal_encoding("utf-8");
$to="ntubmeatball6@gmail.com";
$subject=mb_encode_mimeheader("$sub", "utf-8");
$message="name:$name \r\nemail:$email \r\nmessage:$message";
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=utf-8\r\n";
$headers.="From:".mb_encode_mimeheader("$nickname","utf-8")."<$email>\r\n";
mail($to,$subject,$message,$headers);
setcookie("email","sent",time()+60*3);
}else if(@$_POST['name']!='' && @$_COOKIE['email']=='sent'){
echo "<span class='alert alert-warning'>三分鐘只能寄一次信件</span>";
}
echo '<script language="JavaScript">;alert("Thanks for your message, it has been sent!!!");location.href="index.html";</script>;';
?>