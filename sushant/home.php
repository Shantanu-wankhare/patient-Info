<?php
$servername="localhost";
$username="root";
$password=" ";
$dbname="pbl3";
$link=mysqli_connect($servername,$username,$password,$dbname);
$conn=mysqli_select_db($link,$dbname);
if($conn)
{
    echo("Connection ok");
}
else{
    die("connectio failed becuse ".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .s1
        {
            background-color: darkcyan;
            margin-top:25px;
            box-sizing: border-box;
            border-radius: 10px;
            width:200px;
            height:50px;
            border:none;
            color:white;
            padding:15px 32px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            text-decoration: none;
            
        }
        .s1:hover
        {
            background-color: red;
        }
        .s2
        {
            background-color:rgb(189, 166, 191);
        }
    </style>
</head>
<body  class="s2">
    <section  style="margin-top:250px" >
        <div class="center" style="text-align:center">
        <button class="s1" name="submit1">
        <a href="index.html" style="text-decoration: none"> <font style="color:aliceblue">Insert Data</font></a>
                </button>
                <br/>
                <button class="s1"  name="submit2">
                    <a href="#" style="text-decoration: none"> <font style="color:aliceblue">Delate Data</font></a>
                   </button>
                   <br/>
                   <button class="s1" name="submit3">
                    <a href="#" style="text-decoration: none" ><font style="color:aliceblue">Display Data</font></a>
                   </button>
                   <br/>
                   <button class="s1" name="submit4">
                    <a href="#"   style="text-decoration: none"><font style="color:aliceblue">Insert Data</font></a>
                   </button>
            
        </div>
    </section>
</body>
</html>
<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"INSERT INTO `user`  values ('$_POST[username]','$_POST[dob]','$_POST[gender]','$_POST[address]',));
}
?>