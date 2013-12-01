<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Edit Category</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Catagories -->
    <? $this->load->view('/admin/sidebar-category'); ?>
    <? echo form_open_multipart('admin/result-edit-category'); ?>
    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Edit Category</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Category Name: </div>
		  	<div class="span4"> <input type="text" name="categoryName" value="<? echo $category['cat_name']; ?>"></div>
            <input type="hidden" name="cat-id" value="<? echo $category['cat_id']; ?>">
        </div>

		<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Description: </div>
		  	<div class="span4"> <textarea rows="3" id="description" name="description"><? echo $category['cat_description']; ?></textarea> </div>
		</div>

		<div align="right"> 
			<button type="submit" class="btn btn-primary">submit</button>
			<a href="<? echo site_url('admin'); ?>" class="btn">cancle</a>
		</div>
        <? echo form_close(); ?>
        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
