<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Cart</title>
</head>

<body>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
	<? $this->load->view('intro/menu'); ?>

	<!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    <div class="span8">
    	<ul class="thumbnail" style="height:500px">
    		<h1>Please fill in below</h1>
        <div class="thumbnail span4" style="height:410px">
          
          <p>First Name: <input name="first_name" type="text"></p>
          <p>Last Name: <input name="last_name" type="text"></p>
          <p>Address:&nbsp;&nbsp;&nbsp;&nbsp;
           <textarea rows="5" name="address"></textarea></p>
          <p>Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input name="phone" type="text"></p>
          <p>City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input name="city" type="text"></p>
          <p>State: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="state" type="text"></p>
          <p>Postal Code: <input name="postcode" type="text"></p>
          <div class="offset2">
           <button style="width:100px" class="btn btn-primary" onclick=location.href=''type="button">Continue</button> 
            </div>
        </div>


    	</ul>
    </div>
    <? $this->load->view('intro/footer'); ?>

   <script type="text/javascript">
        function form2(img){
            document.getElementById("mainImg").src="<? echo base_url(); ?>/assets/img/new/"+img;
        }
    </script>
</body>