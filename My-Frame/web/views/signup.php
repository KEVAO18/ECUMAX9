<?php 

function signup(){
	?>
	<style>
		html,body,header,.alto {
		  height: 50rem;
		}
	</style>
    <header>
      <div class='view alto intro-2 paralax'>
        <div class='full-bg-img'>
          <div class='mask rgba-black-strong flex-center'>
            <div class='container'>
              <div class='white-text text-center mx-auto'>
                <h1>Sign Up</h1>
                <hr class="w-80-p mx-auto">
                <?php 
	                if (isset($_GET['al']) && $_GET['al'] == 1) {
	                	?>
			              <div class="alert bg-1 w-70-p mx-auto" role="alert">
			                <p class="color-2">different passwords or username in use</p>
			              </div>
	                	<?php
	                }
                ?>
				<div class="w-80-p mx-auto">
					<form action="web/controllers/newus.php" method="post" accept-charset="utf-8">
						<div class="md-form">
					  		<input type="email" id="email" name="email" class="form-control">
					  		<label for="email">E-mail</label>
						</div>
						<div class="md-form">
					  		<input type="text" id="user" name="user" class="form-control">
					  		<label for="user">User Name</label>
						</div>
						<div class="md-form">
					  		<input type="password" id="pass" name="pass" class="form-control">
					  		<label for="pass">Password</label>
						</div>
						<div class="md-form">
					  		<input type="password" id="repass" name="repass" class="form-control">
					  		<label for="repass">Re-Password</label>
						</div>
						<div class="custom-control custom-switch">
						  <input type="checkbox" class="custom-control-input" name="tyc" id="tyc">
						  <label class="custom-control-label" for="tyc">I agree to terms and conditions</label>
						</div>
						<hr class="w-80-p mx-auto">
						<small>Do you have an account yet? <a href="?p=login" title="" class="color-1">Log In</a></small>
						<br>
                		<button type="submit" class="btn bg-4 w-60-p mx-auto my-4">Ok</button>
					</form>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

	<?php
}

?>