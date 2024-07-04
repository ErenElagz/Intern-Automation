<?php
session_start();
include "./dbcon.php";

if (isset($_POST['admin']) && isset($_POST['password'])) {
	$admin = ($_POST['admin']);
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admins WHERE admin='$admin' AND password='$password'";
	$result = mysqli_query($dbcon, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['admin'] === $admin && $row['password'] === $password) {
			$_SESSION['admin'] = $row['admin'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['loggedin'] = true;
			header('Location: ../home.php');
			exit;
		} else {
			header("Location: ../index.php?error=Username or Password is Wrong!");
			exit();
		}
	} else {
		print_r($admin." ".$password);
		header("Location: ../index.php?error=Username or Password is Wrong!");
		exit();
	}
} else {
	header("Location: ../index.php");
	exit();
}
