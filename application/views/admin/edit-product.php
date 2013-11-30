<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Edit Product</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Catagories -->
    <? $this->load->view('/admin/sidebar-category'); ?>
    <? echo form_open_multipart('admin/result-edit-product'); ?>
    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Edit Product</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Product Name: </div>
		  	<div class="span4"> <p><? echo $product['pd_name']; ?></p></div>
            <input type="hidden" name="pd-id" value="<? echo $product['pd_id']; ?>">
        </div>

		<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Description: </div>
		  	<div class="span4"> <textarea rows="3" id="description" name="description" value="<? echo $product['pd_description']; ?>"></textarea> </div>
		</div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Price: </div>
            <div class="span4"> <input type="text" id="price" name="price" value="<? echo $product['pd_price']; ?>"> </div>
        </div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Quantity: </div>
            <div class="span4"> <input type="number" id="quantity" name="quantity" value="<? echo $product['pd_qty']; ?>"> </div>
        </div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Image1: </div>
            <div class="span4">
                <img src="<? echo base_url($product['pd_image1']); ?>" width="80" height="80">
                <input type="file" name="image1" id="image1">
            </div>
        </div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Image2: </div>
            <div class="span4">
                <img src="<? echo base_url($product['pd_image2']); ?>" width="80" height="80">
                <input type="file" name="image2" id="image2">
            </div>
        </div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Image3: </div>
            <div class="span4">
                <img src="<? echo base_url($product['pd_image3']); ?>" width="80" height="80">
                <input type="file" name="image3" id="image3">
            </div>
        </div>

		<div align="right"> 
			<button type="submit" class="btn btn-primary">submit</button>
			<button class="btn">cancle</button>
		</div>
        <? echo form_close(); ?>
        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
