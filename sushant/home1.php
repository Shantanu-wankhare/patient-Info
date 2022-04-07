<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aa";
$link=mysqli_connect($servername,$username,$password,$dbname);
$con=mysqli_select_db($link,$dbname);
if($con)
{
    echo "The connection is the ok";
}
else{
    die("connection failed beacuse".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Informatio system</title>
    <style type="text/css">
        .s1{
             margin-left:400px;
        }

    </style>
</head>
<body class="s1">
    <form name="form1" action="" method="post">
        <section>
            <div  >
        <table>
        <tr>
                <td> 
                    Patient Id
                    <td><input type="text" id="city" name="patientid"></td>
                </td>
            </tr>
            
            <tr>
                <td>
                    patient name 
                    <td><input type="text"  id="username" name="username"></td>
                </td>
            </tr>
            <tr>
                <td> 
                    Enter city
                    <td><input type="text" id="city" name="city"></td>
                </td>
            </tr>
            <tr>
                <td>
                Email
                    <td><input type="email" id="email" name="email"></td>
                </td>
            </tr>
            <tr>
                <td>
                   password
                    <td><input type="password" id="password" name="password"></td>
                </td>
            </tr>
            <tr>
                <td>
                    Phone no
                    <td><input type="text"  id="phoneno" name="phoneno"></td>
                </td>
            </tr>
            <tr>
                <td>
                    Blood Group
                    <td><input type="text"  id="bloodgroup" name="bloodgroup"></td>
                </td>
            </tr>
            <tr>
                <td>
                    Address 
                    <td><input type="text"  id="address" name="address"></td>
                </td>
            </tr>
            <tr>
                <td>
                    Details 
                    <td><input type="text"  id="details" name="details"></td>
                </td>
            </tr>
            <td colspan="2" align="center" >
            <input type="submit" name="submit1" value="insert">
            <input type="submit" name="submit2" value="Delate ">
            <input type="submit" name="submit3" value="update">
            <input type="submit" name="submit4" value="display">
            <input type="submit" name="submit5" value="search">
            
            

            </td>
        </table>
</div>
        </section>
    </form>
    
</body>
</html>
<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into aat values('$_POST[patientid]','$_POST[username]','$_POST[city]','$_POST[email]','$_POST[password]','$_POST[phoneno]','$_POST[bloodgroup]','$_POST[address]','$_POST[details]')");
    echo 'Record inserted succesfully';

}
if(isset($_POST["submit2"]))
{
    mysqli_query($link ,"delate form the aat where username='$_POST[username]'");
    echo "your data is delated succefully delated is succefully";

}
if(isset($_POST["submit3"]))
{
    mysqli_query($link,"update aat set username ='$_POST[city]' where username ='&_POST[username]'");
    echo "The data is succefully updated";
}
if(isset($_POST["submit4"]))
{
    $res=mysqli_query($link,"select * from aat ");
    echo "<table border=1>";
       echo'<tr>';
       echo"<th>"; echo"patientid"; echo"</th>";
       echo"<th>"; echo"name"; echo"</th>";
       echo"<th>"; echo"city"; echo"</th>";
       echo"<th>"; echo"email"; echo"</th>";
       echo"<th>"; echo"password"; echo"</th>";
       echo"<th>"; echo"phoneno"; echo"</th>";
       echo"<th>"; echo"bloodgroup"; echo"</th>";
       echo"<th>"; echo"address"; echo"</th>";
       echo"<th>"; echo"details"; echo"</th>";
    while($row=mysqli_fetch_array($res))
    {
       echo'<tr>';
       echo"<td>"; echo $row["patientid"]; echo"</td>";
       echo"<td>"; echo $row["username"]; echo"</td>";
       echo"<td>"; echo $row ["city"]; echo"</td>";
       echo"<td>"; echo $row["email"]; echo"</td>";
       echo"<td>"; echo $row["password"]; echo"</td>";
       echo"<td>"; echo $row["phoneno"]; echo"</td>";
       echo"<td>"; echo $row ["bloodgroup"]; echo"</td>";
       echo"<td>"; echo $row["address"]; echo"</td>";
       echo"<td>"; echo $row["details"]; echo"</td>";
       echo"<td>";
    }   
    echo"</table>";
}
if (isset ($_POST["submit5"]))
{
    $res=mysqli_query($link,"select * from aat where username='$_POST[username]' or patientid='$_POST[patientid]'");
    echo"<table border=1>";
    echo"<tr>";
    echo"<th>"; echo"name"; echo"</th>";
    echo"<th>"; echo"city"; echo"</th>";
    echo"<th>"; echo"email"; echo"</th>";
    echo"<th>"; echo"password"; echo"</th>";
    echo"<th>"; echo"phoneno"; echo"</th>";
    echo"<th>"; echo"bloodgroup"; echo"</th>";
    echo"<th>"; echo"address"; echo"</th>";
    echo"<th>"; echo"details"; echo"</th>";
    echo"</tr>";
    while($row = mysqli_fetch_array($res))
    {
        echo'<tr>';
        echo"<td>"; echo $row["username"]; echo"</td>";
        echo"<td>"; echo $row ["city"]; echo"</td>";
        echo"<td>"; echo $row["email"]; echo"</td>";
        echo"<td>"; echo $row["password"]; echo"</td>";
        echo"<td>"; echo $row["phoneno"]; echo"</td>";
       echo"<td>"; echo $row ["bloodgroup"]; echo"</td>";
       echo"<td>"; echo $row["address"]; echo"</td>";
       echo"<td>"; echo $row["details"]; echo"</td>";
        echo"</tr>";
    }

}
?>