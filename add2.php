<?php

$con=mysqli_connect("localhost","root","","phpprac");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$city=$_POST['city'];

    mysqli_query($con,"insert into students(name,city) values('$name','$city')");
    header('location:index.php');
    die();
}


?>

<form method="post">
<h1>add2 file form name</h1>
<tr>
    <td>name</td>
    <td><input type="text" name="name"/></td>
</tr>
<tr>
    <td>city</td>
    <td><input type="text" name="city"/></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="submit"/></td>
</tr>

</form>