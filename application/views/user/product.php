<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Product</title>
</head>

<body>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
	<? $this->load->view('intro/menu'); ?>

	<!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    <div class="span8">
    	<ul class="thumbnail" style="height:400px">
    		<li class="span4">
    			<!-- <p><h3>MZK-BE01-1</h3></p> -->
          <p><h3><? echo $product['pd_name']; ?></h3></p>
             	<img class="img-rounded" id="mainImg" src="<? echo base_url($product['pd_image1']); ?>" height="250px" width="330px" >

              <div style="margin-top:10px">
                <a onclick='form2("<? echo base_url($product['pd_image1'])?>")' style="padding:7px;">
                  <img src="<? echo base_url($product['pd_image1']); ?>" height="60px" width="80px" class="img-polaroid" onclick="form2">
                </a>
                <a onclick='form2("<? echo base_url($product['pd_image2']); ?>")' style="padding:7px">
                  <img src="<? echo base_url($product['pd_image2']); ?>" height="60px" width="80px" class="img-polaroid" onclick="form2">
                </a>
                <a onclick='form2("<? echo base_url($product['pd_image3']); ?>")' style="padding:7px">
                  <img src="<? echo base_url($product['pd_image3']); ?>" height="60px" width="80px" class="img-polaroid" onclick="form2">
                </a>
              </div>
          	</li>
          	<li class="span3">
          		<br><br><br>
          		<p><? echo $product['pd_description']; ?></p>
                <p><b>Price : <? echo $product['pd_price'] ?> THB</b></p>
            
            	<? echo form_open("product/add/".$product['pd_id']);  ?>
                <? if($product['pd_qty'] == 0) { echo '<p style="color:red">Out of Stock</p>'; } else {?>
            		Quantity: <input type="number" name="qty" style="width:50px; padding:0px 6px; margin-bottom:0px;" min="1" max="<? echo $product['pd_qty']; ?>" value="1">
  					    <br><br> <button class="btn btn-primary" type="submit">Add to Cart</button>
                <?}?>
            	<? echo form_close(); ?>
                
          	</li>
    	</ul>
    </div>
    <? $this->load->view('intro/footer'); ?>

   <script type="text/javascript">


        function form2(img){
            document.getElementById("mainImg").src=img;
        }
    </script>
</body>