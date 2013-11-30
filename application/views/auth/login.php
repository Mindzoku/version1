<html>
<header>
<? $this->load->view('intro/header'); ?>
<title>Login</title>
</header>

<body>
	<!-- <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div> -->
	
<? $this->load->view('intro/menu'); ?>
<?php echo form_open("auth/login");?>

	<? if($message == "") {$height="250px";} else {$height="300px";} ?>
<div class="thumbnail offset3" align="center" style="width:300px; height:<?echo $height;?>">
	<p><h3>Please Login</h3></p>
	<div id="infoMessage" style="color:red"><?php echo $message;?></div>
	<p><input type="text" class="input-sm" placeholder="Email/Username" name="identity"></p>
	<p><input type="password" class="input-sm" placeholder="Password" name="password"></p>
	<p><button class="btn btn-primary" type="submit" style="height:30px; width:95px"> Login </button>
<?php echo form_close();?>
<?php echo form_open("regis");?>
	<button class="btn"  type="submit" style="height:30px; width:95px"> Register </button></p>
<?php echo form_close();?>

                
</div>

<? $this->load->view('intro/footer'); ?>
</body>


</html>