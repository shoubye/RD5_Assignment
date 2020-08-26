<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<form>
        <h3 >中央天氣預測<br></h3>
        <div class="form-group row">
            
            <label for="select" >請選擇縣/市：</label> 
            <div class="custom-control-inline">
            
            <select id="select" name="select" >
                <option></option>
                <option value="1">基隆市</option>
                <option value="2">台北市</option>
                <option value="3">新北市</option>
                <option value="4">桃園市</option>
                <option value="5">新竹市</option>
                <option value="6">新竹縣</option>
                <option value="7">苗栗縣</option>
                <option value="8">台中市</option>
                <option value="9">彰化縣</option>
                <option value="10">南投縣</option>
                <option value="11">雲林縣</option>
                <option value="12">嘉義市</option>
                <option value="13">嘉義縣</option>
                <option value="14">台南市</option>
                <option value="15">高雄市</option>
                <option value="16">屏東縣</option>
                <option value="17">宜蘭縣</option>
                <option value="18">花蓮縣</option>
                <option value="19">台東縣</option>
                <option value="20">澎湖縣</option>
                <option value="21">金門縣</option>
                <option value="22">連江縣</option>
            </select>
            </div>


            <label for="select1" >天氣預報：</label> 
            <div class="custom-control-inline">
                <select id="select1" name="select1" >
                    <option></option>
                    <option value="">明天</option>
                    <option value="">後天</option>
                    <option value="">一週後</option>
                </select>
            </div>


            <label for="select2" >積雨量：</label>
            <div class="custom-control-inline">           
                <select id="select2" name="select2" >
                    <option></option>
                    <option value="">過去１小時</option>
                    <option value="">過去２４小時</option>
                </select>
            </div>


            <div class="custom-control-inline">
                   <button name="submit" type="submit" class="btn btn-success"><a href ="ok.php" style="color:white;">查詢</a></button>
            </div>

        </div>

</form>

</body>
</html>