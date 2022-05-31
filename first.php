<?php
$username="root";
$password="";
$server="localhost";
$database="aadhar";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn)
{
//echo "connection sucessfull";
}
else{
    die("no connection".mysqli_connect_error());
}
if(isset($_POST['register'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $DOB=$_POST['DOB'];
    $gender=$_POST['gender']; 
    $address=$_POST['address'];

   $insertquery="INSERT INTO `datasaving`(`firstname`, `lastname`, `fathername`, `mothername`, `DOB`, `gender`, `address`) VALUES ('$firstname','$lastname','$fathername','$mothername','$DOB','$gender','$address')";
  $res =mysqli_query($conn,$insertquery);
     
  if($res){
     ?> 
     <script>
         alert("data saved successfully");
     </script>
     <?php
  }else{
      ?>
      <script>
          alert("data not inserted");
      </script>
      <?php
  }

}
?>

