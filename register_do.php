<?
require_once("config.php");
require_once("funciones.php");
$link = @mysql_connect($db_host, $db_user, $db_pass) or exit(mysql_error());
$db = @mysql_select_db($db_name) or exit(mysql_error());
$lang = @mysql_query("SET NAMES latin1");

$IP = $_SERVER["REMOTE_ADDR"];
$Security = $_POST['Security'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$vpass = $_POST['vpass'];
$correo = $_POST['correo'];
$pin1 = $_POST['pin1'];
$pin2 = $_POST['pin2'];
$SET = $_POST['SET'];

	 	if(!$Security) 
		{
			echo"	 		<script language='javascript'> 
		alert('Error: Failed.!') 
		location.replace('register.php') 
		</script>";
		} 
	
		if($SET == 0)
		{
			$move = 'index.php';
		}
		else if($SET == 1)
		{
			$move = 'index.php';
		}

		if (!(strlen($username) >= 4  or strlen($username) <= 16)) echo"	 		<script language='javascript'> 
		alert('Error: Username of 4 - 16 characters max!.') 
		location.replace('register.php') 
		</script>";
   		if (!isEmail($correo)) echo"	 		<script language='javascript'> 
		alert('Error: The email is incorrect!.') 
		location.replace('register.php') 
		</script>";
		if (!isNum($pin1) or !isNum($pin2)) echo"	 		<script language='javascript'> 
		alert('Error: The secret code is invalid!.') 
		location.replace('register.php') 
		</script>";
		if ($pin1 != $pin2) echo"	 		<script language='javascript'> 
		alert('Error: Secret codes do not match!.') 
		location.replace('register.php') 
		</script>";
		if (strlen($pin1) < 7 or strlen($pin1) > 7) echo"	 		<script language='javascript'> 
		alert('Error:The secret code must be 7 characters!.') 
		location.replace('register.php') 
		</script>";
	$ssn = "000000-$pin1";
		if (!(strlen($pass) >= 5 && strlen($pass) <=10)) echo"	 		<script language='javascript'> 
		alert('Error: Only allow passwords from 5 - 10 characters!.') 
		location.replace('register.php') 
		</script>";
		if ($pass != $vpass)  echo"	 		<script language='javascript'> 
		alert('Error: Error: Password do not match!.') 
		location.replace('register.php') 
		</script>";

		if ( !ctype_alnum($username) ) 
		{ 
				 echo"	 		<script language='javascript'> 
		alert('Error: The username must contain number and letters!.') 
		location.replace('register.php') 
		</script>";
		}	 

		if ( !ctype_alnum($pass) ) 
		{ 
   			echo"	 		<script language='javascript'> 
		alert('Error: The password should contain numbers and letters!.') 
		location.replace('register.php') 
		</script>";
		} 

		$checkid = mysql_fetch_row(mysql_query('SELECT COUNT(*) FROM Player WHERE PlayerID="'.addslashes($username).'"'));
		if ($checkid[0] > 0) exit("Error: The username already exist. <a href='register.php'>Return</a>");
		$checkcorreo = mysql_fetch_row(mysql_query('SELECT COUNT(*) FROM Player WHERE Email="'.addslashes($correo).'"'));
		if($checkcorreo[0] >= 1) exit("Error: Email is in use <a href='register.php'>Return</a>");	
$query2 = mysql_query("INSERT INTO Player (PlayerID, Password, PayType, Email, SSN) VALUES ('".addslashes($username)."',password('".addslashes($pass)."'), '0', '".addslashes($correo)."','".addslashes($ssn)."')") or exit("MYSQL: Lo sentimos ha ocurrido un error. <br><br>".mysql_error());

		if($query2) 
		echo "
		<script language='javascript'> 
		alert('$username. Congratulations you have been registered successfully!.') 
		location.replace('$move') 
		</script>";

?>
