<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Edit Promotion</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Catagories -->
    <? $this->load->view('/admin/sidebar-category'); ?>
    <? echo form_open_multipart('admin/result-edit-promotion'); ?>
    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Edit Promotion</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Promotion Name: </div>
		  	<div class="span4"> <input type="text" name="promotionName" value="<? echo $promotion['prom_name']; ?>"></div>
            <input type="hidden" name="prom-id" value="<? echo $promotion['prom_id']; ?>">
        </div>

		<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Description: </div>
		  	<div class="span4"> <textarea rows="3" id="description" name="description"><? echo $promotion['prom_description']; ?></textarea> </div>
		</div>

        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3">Image: </div>
            <div class="span4">
                <img src="<? echo base_url($promotion['prom_image']); ?>" width="330" height="260">
                <input type="file" name="image" id="image">
            </div>
        </div>

		<div align="right"> 
			<button type="submit" class="btn btn-primary">submit</button>
			<a href="<? echo  site_url('admin/promotion/'); ?>" class="btn" >back</a>
		</div>
        <? echo form_close(); ?>
        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
