<?php
	$conn = mysqli_connect('localhost','root', '', 'product');

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$cpass = $_POST['cpass'];


	
		
		$Dup_username = mysqli_query($conn, "SELECT * FROM `register` WHERE Email='$email'");
		if(mysqli_num_rows($Dup_username))
		{
			echo "
			<script>
				alert('this account is already taken');
				window.location.href= 'register.php';
			</script>";
		}

		if($cpass!=$pass)
		{
			echo "
			<script>
				alert('password is not matched');
				window.location.href= 'register.php';
			</script>";
		}
		else
		{
					$sql = "INSERT INTO `register`(`UserName`, `Email`, `Password`, `ConfirmPassword`) VALUES ('$name','$email','$pass','$cpass')";
		mysqli_query($conn, $sql);
	
			echo "
			<script>
				alert('Registration Successfull');
				window.location.href= 'login.php';
			</script>";
		}
	}

?>