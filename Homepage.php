<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<title>BookBuy</title>
<body>
	<div id="particle-container">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</div>
	<div id="main1">
			<div id="d4"><h1 style="color: #ff3232;">
			Welcome To BookBuy</h1></div>
	</div>
	<div id="d3">
		<form action="" method="POST">
			<label for="bookname"><h2>Enter Book Name Here</h2></label> <input type="text" name="bookname"><br>
			<input type="submit" name="submit">
		</form>
	</div>
    <?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['bookname'])) {  
    session_start();
    $bookname=$_POST['bookname']; 
    $user = $_SESSION['sess_user']; 
  
    $con=mysqli_connect('localhost','root','','Users') or die(mysqli_error()); 
    //mysqli_select_db($con,'Users') or die("cannot select DB");  
  
    $query=mysqli_query($con,"UPDATE Info SET book='".$bookname."' WHERE username='".$user."'");  
    //$numrows=mysqli_num_rows($query);  
    echo $bookname;  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>
</html>