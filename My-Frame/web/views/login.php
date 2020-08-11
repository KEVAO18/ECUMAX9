<?php 

function login(){
	?>
    <header>
      <div class='view intro-2 paralax'>
        <div class='full-bg-img'>
          <div class='mask rgba-black-strong flex-center'>
            <div class='container'>
              <div class='white-text text-center mx-auto'>
                <h1>Log In</h1>
                <hr class="w-80-p mx-auto bg-3">
                <?php 
	                if (isset($_GET['e']) && $_GET['e'] == 'pass') {
	                	?>
			              <div class="alert bg-1 w-70-p mx-auto" role="alert">
			                <p class="color-2">Incorrect password</p>
			              </div>
	                	<?php
	                }
                ?>
				<div class="w-80-p mx-auto">
					<form action="web/controllers/usvalid.php" method="post" accept-charset="utf-8">
						<div class="md-form">
					  		<input type="text" id="user" name="user" class="form-control">
					  		<label for="user">User Name</label>
						</div>
						<div class="md-form">
					  		<input type="password" id="pass" name="pass" class="form-control">
					  		<label for="pass">Password</label>
						</div>
						<small><a href="?p=forgot" title="" class="color-1">I forgot my password</a></small>
						<br>
						<small>Do not you have an account yet? <a href="?p=signup" title="" class="color-1">Sign Up</a></small>
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