<?php
	include ("config.php");

	if (isset($_POST['kirim'])) {
		$name=$_POST['nama'];
		$email=$_POST['email'];
		$comment=$_POST['komentar'];

		$sql="INSERT INTO comment (nama, email, komentar) VALUE ('$name','$email','$comment')";
		$query=mysqli_query($db,$sql);

		if ($query) {
			header('Location: index.php');
		}else{
			header('Location: index.php?status=gagal');
		}

		}

?>