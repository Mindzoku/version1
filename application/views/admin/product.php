<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <!-- Import Form Helper -->
    <?
        $this->load->helper('form');
    ?>
    <title>Product</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Catagories -->
    <? $this->load->view('/admin/sidebar-category'); ?>

    <? echo form_open('admin/list-product'); ?>
    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Product</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span4">Choose your product catagory: </div>
		  	<div class="span3"> 
              
                <select name="cat-id">
                    <?
                        foreach ($categories as $category) {
                            echo "<option value=".$category['cat_id'].">".$category['cat_name']."</option>";
                        }
                    ?>
                </select>
            </div>
		</div>

		<div align="right"> 
			<button type="submit" class="btn btn-primary">submit</button>
		</div>
        <? echo form_close(); ?>
        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
