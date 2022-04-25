<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><font class="text-muted fs-1 fw-bold" style="text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4)"
>This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>
<p>In order to make a vote you have to register first and then login.</font></center>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
