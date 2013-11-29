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
        <table class="table table-striped">
	        <tr class="info">
	        	<td>#</td>
	        	<td>Category Name</td>
	        	<td>Description</td>
	        	<td>Modify</td>
	        	<td>Delete</td>
	        </tr>
	        <tr>
	        	<td>1</td>
	        	<td>Backpack</td>
	        	<td>Hippy Bag</td>
	        	<td> <button class="btn btn-primary btn-small">Modify</button> </td>
	        	<td> <button class="btn btn-danger btn-small">Delete</button> </td>
	        </tr>
	        <tr>
	        	<td>2</td>
	        	<td>Hand Bag</td>
	        	<td>Hand Sholder</td>
	        	<td> <button class="btn btn-primary btn-small">Modify</button> </td>
	        	<td> <button class="btn btn-danger btn-small">Delete</button> </td>
	        </tr>
		</table>
		<div align="right">
			<a href="admin/add-category" class="btn btn-primary">Add Category</a>
		</div>
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
