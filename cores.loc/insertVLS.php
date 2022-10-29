<?php
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$lk_num = $_POST['lk_num'];
	$adress = $_POST['adress'];
	
	
		$db=mysqli_connect("localhost", "root", "", "cores");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `payer`(name, surname, lk_num ,adress) VALUES ('$name', '$surname', '$lk_num', '$adress')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
		header('Location: admin_panel.php');
?>