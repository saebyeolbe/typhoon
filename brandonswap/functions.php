<?php
 
function show_userbox()
{
    // retrieve the session information
    $u = $_SESSION['iusername'];
    $uid = $_SESSION['userid'];
    echo "<div id='userbox'>
	 Welcome $u
		<ul>
		   <li><a href='./logout.php'>Logout</a></li>
		</ul>
             </div>";
 
}
?>