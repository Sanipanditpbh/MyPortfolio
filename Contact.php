<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$massage=$_POST["massage"];

$con=mysqli_connect("localhost","root","","personaldb");
$cmd="insert into contact (name,email,subject,massage) values ('$name','$email','$subject','$massage')";
$query=mysqli_query($con,$cmd);
if($query>0){
    echo "<script>alert('Record submitted successfully');window.location.href='index.php#contact'</script>";
}
?>