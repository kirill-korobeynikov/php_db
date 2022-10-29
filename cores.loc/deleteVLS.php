<?php
		$id_payer = $_POST['id_payer'];

		$db=mysqli_connect("localhost", "root", "", "cores");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "DELETE FROM `payer` WHERE id_payer=$id_payer");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
		header('Location: admin_panel.php');
?>