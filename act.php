<?php 
//memulai seesion
session_start();

if ($_GET['code'] == "login") {
	//melakukan data variable terhadap page sebelum nya
	$id=$_POST['id'];
	$password=$_POST['password'];

	if ($id == "username" && $password == "password") {
		// $_SESSION['status'] = "success";
		$_SESSION['id'] = $id;
		unset($_SESSION['password']);
		header("location: user_settings.php");
	}else{
		$_SESSION['status'] = "failed";
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $password;
		header("location: login.php");
	}
}

if ($_GET['code'] == "user_settings") {
	//melakukan data variable terhadap page sebelum nya
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$first_name_kana=$_POST['first_name_kana'];
	$last_name_kana=$_POST['last_name_kana'];
	$login_id=$_POST['login_id'];
	$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$re_new_password=$_POST['re_new_password'];
	$email=$_POST['email'];
	$job_category=$_POST['job_category'];
	$role=$_POST['role'];
	$doctor_code=$_POST['doctor_code'];
	$timestamp = date('Y-m-d H:i:s');

	if ($first_name == "xxx") {
		$_SESSION['check'] = 1;
		$_SESSION['status'] = 1;
		$_SESSION['message'] = "Penyimpanan Gagal";
		$_SESSION['timestamp'] = $timestamp;
		header("location: user_settings.php");
	}else{
		$_SESSION['check'] = 1;
		$_SESSION['status'] = 0;
		$_SESSION['message'] = "Penyimpanan Berhasil";
		$_SESSION['timestamp'] = $timestamp;
		header("location: user_settings.php");
	}
}

if ($_GET['code'] == "search_film") {
	//melakukan data variable terhadap page sebelum nya
	$searchkey = $_POST['searchkey'];
	$check_total = count($_POST['labelid']);
	$labelid = ($check_total > 0) ? implode(',', $_POST['labelid']) : "";

	$_SESSION['check'] = 1;
	$_SESSION['searchkey'] = $searchkey;
	$_SESSION['check_total'] = $check_total;
	$_SESSION['labelid'] = $labelid;

	header("location: search_film.php");
}


