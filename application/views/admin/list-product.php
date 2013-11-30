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
    	<div>
    		<legend><b>Product><? echo $cat_name; ?></b></legend>
    	</div>
    	<div width="600px">
        <table class="table table-striped">
	        <tr class="info">
	        	<td>#</td>
	        	<td>Product Name</td>
	        	<td>Description</td>
	        	<td>Picture</td>
	        	<td>Category</td>
	        	<td>Quantity</td>
	        	<td>Price</td>
	        	<td>Modify</td>
	        	<td>Delete</td>
	        </tr>
	        <?
	        	$i = 1;
	        	foreach ($products as $product) {
	        		echo "<tr><td>".$i++."</td>";
	        		echo "<td>".$product['pd_name']."</td>";
	        		echo "<td>".$product['pd_description']."</td>";
	        		// echo "<td>".$product['pd_image1']."</td>";
	        		echo "<td>null</td>";
	        		echo "<td>".$cat_name."</td>";
	        		echo "<td>".$product['pd_qty']."</td>";
	        		echo "<td>".$product['pd_price']."</td>";
	        		echo "<td> <a href='".site_url('admin/edit-product/'.$product['pd_id'])."' class='btn btn-primary btn-small'>Modify</a> </td>
	        			  <td> <a href='".site_url('admin/delete-product/'.$product['pd_id'])."' class='btn btn-danger btn-small'>Delete</a> </td></tr>";
	        	}
	        ?>
		</table>
		</div>
		<div align="right">
			<? echo "<a href='".site_url('admin/add-product/'.$cat_id)."' class='btn btn-primary'>Add Product</a>"; ?>
		</div>
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
