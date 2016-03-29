<?
session_start();
require_once("config.php");

$link = @mysql_connect($db_host, $db_user, $db_pass) or exit("MYSQL: Lo sentimos pero a ocurrido un error:".mysql_error());
$db = @mysql_select_db($db_name) or exit(mysql_error());
$lang = @mysql_query("SET NAMES latin1");

//----------- �α��� üũ
	$user_id = $_SESSION['user_id'];
	if(!isset($_SESSION['user_id']))
	{
		echo "
				<script language='javascript'>
				alert('You must login first before using the market.')
				history.back(1)
			</script>
		";
		exit();
	}
//---------------------------------------

$ID = $_POST['ID'];
$Security = $_POST['Security'];
$IP = $_SERVER["REMOTE_ADDR"];

	if(!$Security) {
		
									echo "
			<script language='javascript'>
				alert('Error: Sorry, but an error ocurred.')
				location.replace('market.php')
			</script>";
	} 

	$result = mysql_query("SELECT * FROM `web_market` WHERE `id` = '$ID'");
	$query = mysql_fetch_assoc($result);
	$Price = $query['Price'];
	$Value = $query['Value'];
	$Name = $query['Name'];
	
	if($query['Type'] == 2)
	{
							echo "
			<script language='javascript'>
				alert('Error: Sorry, but you can not buy this item.')
				location.replace('market.php')
			</script>";
	}

$tmp = explode("|" , $_POST['charname']);
$char = $tmp[0];
$Race = $tmp[1];

	if(!$char) 
	{ 
						echo "
			<script language='javascript'>
				alert('Error:Sorry, but an error ocurred.')
				location.replace('market.php')
			</script>";
	
	} 
	
	if($Race == 'SLAYER')
	{
		$CRace= 'Slayer';
	}	
	else if($Race == 'VAMPIRE')
	{
		$CRace= 'Vampire';
	}
	else if($Race == 'OUSTERS')
	{
		$CRace= 'Ousters';
	}

$charcheck = mysql_query("SELECT * FROM `$CRace` WHERE `Name` = '$char' AND `PlayerID` = '$user_id'");
if (mysql_num_rows($charcheck) <= 0)
{
			echo "
			<script language='javascript'>
				alert('Error: The character does not exist.')
				location.replace('market.php')
			</script>";
}

list($logged) = mysql_fetch_row(mysql_query("SELECT `LogOn` FROM `Player` WHERE `PlayerID` = '$user_id'"));


	if ($logged != 'LOGOFF')
	{
		echo "
			<script language='javascript'>
				alert('Error: Sorry, but the account must be disconnected for purchase.')
				location.replace('market.php')
			</script>";
	}
	else
	{
		if($query['Race'] == "COMMON") { }
		else if($query['Race'] != $Race)
		{
					echo "
			<script language='javascript'>
				alert('Error: The item you are trying to buy it for a race different from his character.')
				location.replace('market.php')
			</script>";
		}
		$query1 = mysql_query("SELECT * FROM `Player` WHERE `PlayerID` = '$user_id' ");
		while ($row = mysql_fetch_assoc($query1))
		{
			if($query['Type'] == 0)
			{
				if($row['point'] < $Price)
				{
							echo "
			<script language='javascript'>
				alert('Error: You do not have enough point to buy this item.')
				location.replace('market.php')
			</script>";
				}
				else
				{
				$Security = 0;
				$success = mysql_query("UPDATE `Player` SET `point` = `point`-'$Price' WHERE `PlayerID` = '$user_id'") or exit("Lo sentimos a ocurrido un error. <br><br>".mysql_error());
				}
			}
			else
			{
							echo "
			<script language='javascript'>
				alert('Error: Sorry, an error occurred')
				location.replace('market.php')
			</script>";
			}
		}	
		if($success)
		{
			mysql_query("INSERT GoodsListObject VALUES ('DEFAULT', 'DEFAULT', '1', '$user_id', '$char', '$Value', '1', 'NOT', now())") or exit("Error: Sorry, an error occurred".mysql_error());
			mysql_query("INSERT web_marketlog VALUES ('DEFAULT', now(), '$IP', '$user_id', '$Name' )") or exit("Sorry, an error occurred. <br><br>".mysql_error());
		
			echo "
			<script language='javascript'>
				alert('Item Purchase complete\\nCharacter Name: ($char)')
				location.replace('my_account.php')
			</script>
			";
		}
	}
	
	?>
