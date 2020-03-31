<?php
$usr_nam=$_POST['usr_nam'];
$usr_pas=$_POST['usr_pas'];
echo "Your name is: ", $usr_nam, ". <br/>Your pass is: ", $usr_pas;

$connection=mysqli_connect('localhost','id12989742_root','123456789','id12989742_soumo');
$select="SELECT * from table01 where name='$usr_nam' and pass='$usr_pas'";
$check=($connection->query($select));
$row=Mysqli_num_rows($check);

if($row>0)
{
    echo "<br/><br/>Login Successful";
}
else
{
        echo "<br/><br/>Wrong Credentials";
}

?>