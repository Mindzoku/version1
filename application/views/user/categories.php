<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Categories</title>
</head>

<body>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
	<? $this->load->view('intro/menu'); ?>

	<!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    <div class="span8">
    	<ul class="thumbnail" style="margin-right: -20px; height:500px;">
    		<? $array = array('color', 'shape', 'size', 'a', 'b', 'c'); 
    			foreach ($array as $key) {
    		?>
    		<li class="span3">
                <img src="<? echo base_url(); ?>/assets/img/new/new3.jpg" class="img-rounded">
                <div class="caption">
                	<p>MZK-BE01-1<br>
                	Price : 1,250 THB</p>
                	<p><button class="btn btn-primary" >Add to Cart</button></p>
                </div>
    		</li>
    		<?}?>
    	</ul>
    </div>

</body>