<?php 
session_start();
if( session_unregister('userid') == true 
		&& session_unregister('iusername')==true ) {
   header('Location: index.php');
   session_destroy();
} else {
   unset($_SESSION['userid']);
   unset($_SESSION['iusername']);
   session_destroy();
   header('Location: index.php');
}
?>