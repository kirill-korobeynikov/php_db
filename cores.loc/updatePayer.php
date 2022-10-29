<?php
	$id_payer = $_POST['id_payer'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$lk_num = $_POST['lk_num'];
	$adress = $_POST['adress'];
	
		$db=mysqli_connect("localhost", "root", "", "cores");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `payer` SET name='$name', surname='$surname', lk_num='$lk_num', adress='$adress' WHERE id_payer=$id_payer");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
		header('Location: admin_panel.php');
?>