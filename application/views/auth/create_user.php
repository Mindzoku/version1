<html>
<header>
<? $this->load->view('intro/header'); ?>
<title>Login</title>
</header>

<body>
	<!-- <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div> -->
	
<? $this->load->view('intro/menu'); ?>

<div class="thumbnail"  style="width:800px; height:400px">
	
	<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>


<div class="span5">
<?php echo form_open("auth/create_user");?>

      <p>
            First Name:&nbsp;&nbsp; <input name="first_name" type="text">
      </p>

      <p>
            Last Name:&nbsp;&nbsp; <input name="last_name" type="text">
      </p>

      <p>
            Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="email" type="text">    
      </p>

      <p>
            Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="phone" type="text">  

      </p>

      <p>
            Password: &nbsp;&nbsp;&nbsp;&nbsp;<input name="password" type="password">  
      </p>

      <p>
            Confirm Password: <input name="password_confirm" type="password">  
      </p>

      <p><button class="btn btn-primary" type="submit">Register</button></p>

<?php echo form_close();?>
</div>


<div class="span4" id="infoMessage" style="color:red"><?php echo $message;?></div>


                
</div>

<? $this->load->view('intro/footer'); ?>
</body>


</html>