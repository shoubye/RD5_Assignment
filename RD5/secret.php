<?php 

session_start();

//假如沒登入帳號，跳回登入畫面
if (!isset($_SESSION["account"]))
{  
	$_SESSION ["lastPage"]= "secret.php";
  header("Location: login.php");
  exit();
	
}

//回首頁
if (isset($_POST["okbutton"]))
  {
    header("Location: index.php");
  }



//確認
if (isset($_POST["haha"]))
{
    //連線資料庫
    $link = @mysqli_connect("localhost", "root", "root", "bank", 8889) or die(mysqli_connect_error());
    $result = mysqli_query($link, "set names utf8");  

    // $account = $_SESSION["account"] ;
    //執行SQL敘述       
    $Text3 =<<<SqlQuery
    SELECT balance FROM member where account = '$account';
    SqlQuery;        
    $result = mysqli_query ($link, $Text3);
    // var_dump($result);
    

    $row["balance"] = mysqli_fetch_assoc($result);
    $haha = implode("",$row["balance"]);
    echo  $haha;
     
      
    


    // $balance123 = $_POST["text"];

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
</head>
<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method = "post" action = "secret.php">

      <div class="form-group row">
          
          <label for="text" class ="custom-control" >請輸入金額：</label> 
          <div >
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-card"></i>
                </div>
              </div> 
              <input id="text" name="text" type="text"  class="form-control">
            </div>
          </div>
      </div> 

      <font face="link" color="#000" size="3"><?php echo "目前餘額為：$balance123" ?></font><br>

      <br>

      <div class="form-group row">
        <div class="col-12">
            <input name="haha" type="submit" class="btn btn-outline-success" value ="確認"/>
            <input name="okbutton" type="submit" class="btn btn-outline-info" value ="回首頁"/>
        </div>
      </div>


</form>
</body>
</html>