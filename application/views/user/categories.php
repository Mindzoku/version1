<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Categories</title>
</head>

<body>
<? echo getcwd(); ?>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
	<? $this->load->view('intro/menu'); ?>

	<!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    <div class="span8">
    	<ul class="thumbnail" style="margin-right: -20px; height:<?echo $height;?>;" >
    		<?
    			foreach ($products as $product) {
    		?>
            
        		<li class="span3" style="margin-left: 15px; margin-top: 15px;">
                    <div class="thumbnail" style="height:250px">
                    <a href="<? echo site_url('product/'.$catid.'/'.$product['pd_id']); ?>" style="color:black">
                    <img src="<? echo base_url($product['pd_image1']); ?>" class="img-rounded">
                    <!-- /assets/img/new/new3.jpg --> 
                    <div class="caption">
                    	<p><?echo $product['pd_name'];?><br></a>
                    	Price : <? echo $product['pd_price'] ?> THB</p>
                        <? echo form_open("product/add/".$product['pd_id']);  ?>
                            <input type="hidden" name="qty" value="1">
                    	   <p><button class="btn btn-primary" >Add to Cart</button></p>
                        <? echo form_close(); ?>
                    </div>
                    </div>
        		</li>
            
    		<?}?>
    	</ul>
    </div>

    <? $this->load->view('intro/footer'); ?>
</body>