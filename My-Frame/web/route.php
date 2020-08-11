<?php
function routes($name){
	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}else{
		if (isset($_GET['search'])) {
			$p = "search";
		}else{
			$p = "home";
		}
	}

	if ($p == "home") {
		include "web/views/".$p.".php";
		home($name);
	}elseif ($p == "search") {
		include "web/views/".$p.".php";
		search();
	}elseif ($p == "login") {
		include "web/views/".$p.".php";
		login();
	}elseif ($p == "signup") {
		include "web/views/".$p.".php";
		signup();
	}elseif ($p == "tyc") {
		include "web/views/".$p.".php";
		tyc();
	}else{
    ?>
      <div class="container">
        <div class="row py-4 text-center">
          <div class="col-12 display-1 pt-3">404</div>
          <div class="col-12 display-4 pb-5">Página no encontrada</div>
        </div>
      </div>
    <?php
  }
}


function logRoutes($name){
	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	}else{
		if (isset($_GET['search'])) {
			$p = "search";
		}else{
			$p = "dashboard";
		}
	}

	if ($p == "dashboard") {
		include "../web/views/logged/".$p.".php";
		dashboard($name);
	}elseif ($p == "tyc") {
		include "../web/views/logged/".$p.".php";
		tyc();
	}else{
    ?>
      <div class="container">
        <div class="row py-4 text-center">
          <div class="col-12 display-1 pt-3">404</div>
          <div class="col-12 display-4 pb-5">Page Not Found</div>
        </div>
      </div>
    <?php
  }
}