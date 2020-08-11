<?php 

	function dashboard($name){
		?>
			<div class="container-fluid">
				<p class="display-4">Welcome <?=$_SESSION['user']?></p>
				<p class="display-4 text-capitalize py-4-r" style="font-size: 3em;">Updates</p>
			</div>
		<?php
	}

?>