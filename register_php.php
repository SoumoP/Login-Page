<?php
$usr_nam=$_POST["usr_nam"];
$usr_pas=$_POST["usr_pas"];
$usr_re_pas=$_POST['usr_re_pas'];
echo "Your name is: ", $usr_nam, ". <br/>Your pass is: ", $usr_pas, ". <br/>Your repass is: ", $usr_re_pas;

$connection=mysqli_connect('localhost','id12989742_root','123456789','id12989742_soumo');
$select="SELECT * from table01 where name='$usr_nam' and pass='$usr_pas'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);

if($row>0)
    echo "<br/>User ID already exists.";
else
{
    $connection=mysqli_connect('localhost','id12989742_root','123456789','id12989742_soumo');
    $insert="INSERT INTO table01 set name='$usr_nam', pass='$usr_pas'";
    if($usr_pas==$usr_re_pas)
    {
        $connection->query($insert);
        echo "<br/><br/>Your account has been created.";
    }
    else
    {
        echo "<br/><br/>Your account has not been created.";
    }
}
?>