<?php	
error_reporting(E_ALL);
ini_set('display_errors', true);
 
 ob_start();
 session_start();
 require_once '/var/www/static.codefreak.co.uk/structure/session/session_check.php';
 
 $username = $_SESSION['user'];
 $username = hash('sha256',$username);
 
 $unlink = "/var/www/static.codefreak.co.uk/userdata/" .$username ."/" .$username ."_steamSummary.json";

if (!unlink($unlink))
  {
  echo ("Update error, please contact developer. (Unlink)");
  }
else
  {
  echo ("Update successful!");
  header("Location: https://www.codefreak.co.uk/dashboard/");
  }
?>
