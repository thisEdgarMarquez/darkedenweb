<?
require_once("config.php");

	session_start(); 
	session_destroy();

		echo "
				<script language='javascript'>
				location.replace('index.php')
			</script>
		";
?>
