<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Home</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

    <!-- Catagories -->
	<? $this->load->view('/admin/sidebar-category'); ?>

    <div class="span8"  style="margin-top: 2%;">
    	<div><legend><b>Product>Backpack</b></legend></div>
        <table class="table table-striped">
	        <tr class="info">
	        	<td>#</td>
	        	<td>Product Name</td>
	        	<td>Description</td>
	        	<td>Picture</td>
	        	<td>Category</td>
	        	<td>Quantity</td>
	        	<td>Modify</td>
	        	<td>Delete</td>
	        </tr>
	        <tr>
	        	<td>1</td>
	        	<td>MZK-BE01-1</td>
	        	<td>Backpack Jean</td>
	        	<td>
	        		<div class="thumbnail">
                		<img src="<? echo base_url(); ?>/assets/img/new/new1.jpg" class="img-rounded">
	        		</div>
	        	</td>
	        	<td>Backpack</td>
	        	<td>5</td>
	        	<td> <button class="btn btn-primary btn-small">Modify</button> </td>
	        	<td> <button class="btn btn-danger btn-small">Delete</button> </td>
	        </tr>
		</table>
		<div align="right">
			<button class="btn btn-primary">Add Product</button>
		</div>
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
