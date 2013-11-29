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

	        <?
	        	$i = 1;
	        	foreach ($categories as $category) {
	        		echo "<tr><td>".$i++."</td>";
	        		echo "<td>".$category['cat_name']."</td>";
	        		echo "<td>".$category['cat_description']."</td>";
	        		echo "<td> <a href='".site_url('admin/edit-category/'.$category['cat_id'])."' class='btn btn-primary btn-small'>Modify</a> </td>";
	        		echo "<td> <a href='".site_url('admin/delete-category/'.$category['cat_id'])."' class='btn btn-danger btn-small'>Delete</a> </td></tr>";
	        	}
	        ?>
		</table>
		<div align="right">
			<a href="admin/add-category" class="btn btn-primary">Add Category</a>
		</div>
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
