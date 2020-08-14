<?php  
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
 $error_login = array();

if(isset($_POST['login'])) {
	if($_POST['log_email'] == 'Admin@admin.com' || $_POST['log_email'] == 'admin@admin.com')
	{
		$admin_email = 'Admin@admin.com';
		$_SESSION['nom'] = $admin_email;
		header("Location: Panel.php");
		exit();
		
	}
	else
	{
	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //sanitize email
	$password = md5($_POST['log_password']); //Get password

	$check_database_query = mysqli_query($con, "SELECT * FROM client WHERE mail='$email' AND password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$nom = $row['nom'];
		$prenom = $row['prenom'];

		

		$_SESSION['nom'] = $nom;
		$_SESSION['prenom']=$prenom;
		header("Location: home.php");
		exit();
	}
	}}
else {
	array_push($error_login, "");
}	




?>