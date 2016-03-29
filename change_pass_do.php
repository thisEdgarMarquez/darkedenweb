<?
session_start();
require_once("config.php");

$link = @mysql_connect($db_host, $db_user, $db_pass) or exit("Error:".mysql_error());
$db = @mysql_select_db($db_name) or exit(mysql_error());
$lang = @mysql_query("SET NAMES latin1");

//----------- �α��� üũ
	$user_id = $_SESSION['user_id'];
	if(!isset($_SESSION['user_id']))
	{
		echo "
				<script language='javascript'>
				alert('Error: Usted debe estar logueado.')
				history.back(1)
			</script>
		";
		exit();
	}
//---------------------------------------

$regIP = $_SERVER["REMOTE_ADDR"];

$pass = $_POST['pass'];
$vpass = $_POST['vpass'];
$vvpass = $_POST['vvpass'];

    $idcheck = mysql_query("SELECT * FROM `Player` WHERE `PlayerID` = '$user_id' AND `Password` = PASSWORD('$pass')");
    list($logged) = mysql_fetch_row(mysql_query("SELECT `LogOn` FROM `Player` WHERE `PlayerID` = '$user_id'"));

/* �⺻ üũ */
	if (!(strlen($vpass) >= 5 && strlen($vpass) <= 10)) exit("Error:Passwords must be 5 - 10 characters. <a href='changepass.php'>Volver</a>");
	if ($vpass != $vvpass) exit("Error: Passwords do not match <a href='changepass.php'>Return</a>");

if ( !ctype_alnum($vpass) ) { 
    exit("Error: The password should contain numbers and letters <a href='changepass'>Return</a>");
} 

if (mysql_num_rows($idcheck) > 0) 
	{
		if ($logged != 'LOGOFF')
		{
			exit("Error: The account must be disconnected to change the password. <a href='changepass.php'>Return</a>");
		}
		else
		{
			$query1= mysql_query("UPDATE `Player` SET `Password` = PASSWORD('".addslashes($vpass)."') WHERE `PlayerID` = '$user_id'") or exit("MYSQL: Lo sentimos ha ocurrido un error: <br><br>".mysql_error());
			if ($query1) echo "
			<script language='javascript'>
				alert('$user_id(La contraseña fue cambiada con exito')
				location.replace('index2.php')
			</script>
			";
		}
	}
	else
	{
		exit("Error: User does not exist.");
	}
?>
