<?php
	$id_pay = $_POST['id_pay'];
	$id_payer = $_POST['id_payer'];
	$pay_month = $_POST['pay_month'];
	$pay_sum = $_POST['pay_sum'];
	
		$db=mysqli_connect("localhost", "root", "", "cores");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `pay_history` SET id_payer='$id_payer', pay_month='$pay_month', pay_sum='$pay_sum' WHERE id_pay=$id_pay");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
		header('Location: admin_panel.php');
?>