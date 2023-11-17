<?php
	$conn = mysqli_connect('localhost','root', '', 'product');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$message = $_POST['message'];

		$sql = "INSERT INTO feedback(`id`, `name`, `mobile`, `message`) VALUES ('', '{$name}', '{$mobile}', '{$message}')";
		$res = mysqli_query($conn, $sql);
		if($res)
		{
			echo "
			<script>
				alert('message send successfully');
				window.location.href= 'index.php';
			</script>";
		}
		else
		{
			echo "not inserted";
		}
	}
	else
	{
		echo "Not clicked";
	}


?>