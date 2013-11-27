<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Add Product</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Catagories -->
    <? $this->load->view('/admin/sidebar-category'); ?>

    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Add Product</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Product Name: </div>
		  	<div class="span4"> <input type="text" id="product-name" name="productName"> </div>
		</div>

		<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Description: </div>
		  	<div class="span4"> <textarea rows="3" id="description" name="description"></textarea> </div>
		</div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Price: </div>
            <div class="span4"> <input type="text" id="price" name="price"> </div>
        </div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Quantity: </div>
            <div class="span4"> <input type="number" id="quantity" name="quantity"> </div>
        </div>

		<div align="right"> 
			<button class="btn btn-primary">submit</button>
			<button class="btn">cancle</button>
		</div>

        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
