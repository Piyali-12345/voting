<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>

<style>
.container {
    width:1024px;
    background:#767676;
    padding:40px;
    margin:0 auto;
    font-family:"Arial";
}
</style>
<div class="container">
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>

<form action="submit_vote.php" name="vote" method="post" id="myform" >
<font size='6'> What is your favorite political party? <BR>
<input type="radio" name="lan" value="BJP">BJP<BR>
<input type="radio" name="lan" value="CONGRESS">CONGRESS<BR>
<input type="radio" name="lan" value="AAP">AAP<BR>
<input type="radio" name="lan" value="NOTA">NOTA<BR>
<input type="radio" name="lan" value="NIRDLIY">NIRDLIY<BR>
</font><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
</div>

