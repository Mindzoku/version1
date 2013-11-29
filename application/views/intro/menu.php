
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="<? echo site_url("Main"); ?>"  style="width:100px" 	><b>MindZoKu</b></a>

					<ul class="nav">
						<? if(!isset($menu)) $menu=""; ?>
						<li class="<?= ($menu == "home") ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("Main"); ?>">Home</a></li>
						<? if(!$this->ion_auth->logged_in()){ ?>
						<li class="<?= ($menu == "cart") ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("login"); ?>">Cart</a></li>
						
						<li class="<?= ($menu == "login") ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("login"); ?>">Login</a></li>
						<?} else {?>
						<li class="<?= ($menu == "cart") ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("cart"); ?>">Cart</a></li>
						
						<li class="<?= ($menu == "login") ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("logout"); ?>">Logout</a></li>
						<?}?>
						<!-- <li><a href="#">Link</a></li> -->
					</ul>
				</div>
			</div>

