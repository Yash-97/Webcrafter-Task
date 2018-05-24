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
	<div id="main">
			<div id="d2"><h1 style="color: #ff3232;">
			LOGIN</h1></div>
	</div>
	<div id="d3">
		<form action="" method="POST">
			<label for="user"><h2>USERNAME</h2></label> <input type="text" name="user"><br>
			<label for="pass"><h2>PASSWORD</h2></label> <input type="Password" name="pass"><br>
			<input type="submit" name="submit">
		</form>
	</div>
    <?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass']; 
    $_SESSION['user'] = $user; 
  
    $con=mysqli_connect('localhost','root','','Users') or die(mysqli_error());  
    //mysqli_select_db($con,'Users') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM Info WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: Homepage.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>
</html>