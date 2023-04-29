<?php
include "db.php";
$uname=$_POST['uname'];
$pword=$_POST['psw'];
$sql = "SELECT * FROM `users` WHERE username='$uname' AND password='$pword'"; 
$result = $con->query($sql);



?>
<?php
if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

<h1>Login Successful with username <?php echo $row['name'] ?> </h1>

<?php 

                }
            }
else{

?>
<h1>Login Un Successful with username <?php echo $uname ?> </h1>
<?php
}
?>