<?php
	$id_vls = $_POST['id_vls'];
	$id_payer = $_POST['id_payer'];
	$mnth = $_POST['mnth'];
	$kvth = $_POST['kvth'];
	
		$db=mysqli_connect("localhost", "root", "", "cores");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `vls` SET id_payer='$id_payer', mnth='$mnth', kvth='$kvth' WHERE id_vls=$id_vls");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
		header('Location: admin_panel.php');
?>