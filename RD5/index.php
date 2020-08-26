<?php 

session_start();

  if (isset($_SESSION["account"]))
  $account = $_SESSION["account"];
  else 
  $account = " ";


  //確認
  if (isset($_GET["okbutton"]))
  {
    if($_GET["radiobox"])
    {
        switch($_GET["radiobox"])
        {
            case '2':  //存款       
                header("Location: secret.php");
            break;

            case '4':  //提款
                header("Location: secret.php");
            break;
             
            case '6':  //餘額查詢
              
            break;

            case '8':  //明細查詢
                header("Location: detail.php");
            break;            
        }
    }
  }

  //登入
  if (isset($_GET["okbutton1"]))
  {
    header("Location: login.php");
  }

  //登出
  if (isset($_GET["okbutton2"]))
  {
    unset($_SESSION["account"]);
    header("Location: index.php");
  }

  //註冊
  if (isset($_GET["okbutton3"]))
  {
    header("Location: signup.php");
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
/* A:link {color: FFFF00; font-family: 標楷體}
A:visited {color: 000000; font-family: 細明體}
A:active {text-decoration: none; font-family: 新細明體}
A:hover {text-decoration: none; color: FF7700} */
</style>


</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <form  action = "index.php?radiobox=">
   
        <div class="form-group row">
   
          <label class="col-4"></label> 

              <div class="col-8">
                <br>
                <font face="link" color="#415FD9" size="7"><u><i>線上網銀系統</i></u></font><br>        
                <font face="link" color="#685AA3" size="4"><?php echo "歡迎光臨：" . $account ?></font><br>
                <font face="link" color="#685AA3" size="4"><?php echo "目前餘額： " ?></font><br>
                <font face="link" color="#D14571" size="4">請選擇服務項目：</font>
                

                <div class="custom-control custom-radio custom-control-inline">
                    <input name="radiobox" id="radio_0" type="radio" class="custom-control-input" value="2"> 
                    <label for="radio_0" class="custom-control-label">存款</label>
                </div>


                <div class="custom-control custom-radio custom-control-inline">
                    <input name="radiobox" id="radio_1" type="radio" class="custom-control-input" value="4"> 
                    <label for="radio_1" class="custom-control-label">提款</label>
                </div>


                <div class="custom-control custom-radio custom-control-inline">
                    <input name="radiobox" id="radio_2" type="radio" class="custom-control-input" value="6"> 
                    <label for="radio_2" class="custom-control-label">餘額查詢</label>
                </div>


                <div class="custom-control custom-radio custom-control-inline">
                    <input name="radiobox" id="radio_3" type="radio" class="custom-control-input" value="8"> 
                    <label for="radio_3" class="custom-control-label">明細查詢</label>
                </div>



                <div class="modal-footer">
                    <div class="col-12 ">
                       

                    <input name="okbutton" type="submit" class="btn btn-outline-success" value ="確認"/> 
                    <input name="okbutton1" type="submit" class="btn btn-outline-info" value ="登入"/> 
                    <input name="okbutton2" type="submit" class="btn btn-outline-info" value ="登出"/> 
                    <input name="okbutton3" type="submit" class="btn btn-outline-danger" value ="註冊"/>         

                    </div>
                </div>

          </div>
      </div> 

    </form>




</body>
</html>