<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <? $this->load->helper('form'); ?>
    <title>Home</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Categories -->
    <? $this->load->view('/admin/sidebar-category'); ?>

    <!-- Add category -->
    <? echo form_open('admin/result-add-category'); ?>
    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Add Category</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Category Name: </div>
		  	<div class="span4"> <input type="text" id="category-name" name="categoryName"> </div>
		</div>

		<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Description: </div>
		  	<div class="span4"> <textarea rows="3" id="description" name="description"></textarea> </div>
		</div>

		<div align="right"> 
			<button class="btn btn-primary" type="submit">submit</button>
			<button class="btn" type="reset">clear</button>
		</div>
        <? echo form_close(); ?>
        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
