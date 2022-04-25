<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<legend> <h3 class="text-center fw-bold mt-3"> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<div class="card mx-auto p-3" style="width: 24rem;" >
	<form action= "reg_action.php" method= "post" id="myform" >

		<div class="mb-2">
			<label for="firstname" class="form-label">Firstname</label>
			<input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstname">
		</div>
		<div class="mb-2">
			<label for="lastname" class="form-label">Lastname</label>
			<input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastname">
		</div>
		<div class="mb-2">
			<label for="username" class="form-label">Username</label>
			<input type="text" name="username" class="form-control" id="username" aria-describedby="username">
		</div>
		<div class="mb-2">
			<label for="password" class="form-label">Password</label>
			<input type="text" name="password" class="form-control" id="password" aria-describedby="password">
		</div>
		<div class="mb-2">
			<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>
		</div>
		<button type="submit" name="login" class="btn btn-primary">Sign Up</button>
	</form>
</div>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>
