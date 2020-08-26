<?php

session_start();


if (isset($_POST["btnOK1"]))
{
  //連線資料庫
  $link = @mysqli_connect("localhost", "root", "root", "bank", 8889) or die(mysqli_connect_error());
  $result = mysqli_query($link, "set names utf8");  

  //執行SQL敘述

  $name = $_POST["qqq"];
  $account = $_POST["txtUserName1"];
  $password =$_POST["txtPassword1"];

  $Text1 =<<<SqlQuery
  INSERT INTO member (name, account ,password) VALUES ('$name','$account','$password');
  SqlQuery;

  $result = mysqli_query ($link, $Text1);

  header("Location: index.php");   //跳轉到首頁
}

 //重設
  if (isset($_POST["btnHome"]))
  {
    header("Location: index.php");//跳轉到首頁
    exit();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form id="form1" name="form1" method="post" action="signup.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">


    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#000">會  員  註  冊</font></td>
    </tr>

    <tr>
      <td width="80" align="center" valign="baseline">姓名：</td>
      <td valign="baseline"><input type="text" name="qqq" id="qqq" /></td>
    </tr>

    <tr>
      <td width="80" align="center" valign="baseline">帳號：</td>
      <td valign="baseline"><input type="text" name="txtUserName1" id="txtUserName1" /></td>
    </tr>


    <tr>
      <td width="80" align="center" valign="baseline">密碼：</td>
      <td valign="baseline"><input type="password" name="txtPassword1" id="txtPassword1" /></td>
    </tr>



    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><input type="submit" name="btnOK1" id="btnOK1" value="註冊" />
      <input type="reset" name="btnReset" id="btnReset" value="重填" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>

</form>


</body>
</html>