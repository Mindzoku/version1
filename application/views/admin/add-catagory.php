<html>
<head>
    <? $this->load->view('header'); ?>
    <title>Home</title>
</head>

<body>
    <? $this->load->view('menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Categories -->
    <? $this->load->view('/admin/sidebar-catagory'); ?>

    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Add Catagory</b></legend></div>

    	<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Catagory Name: </div>
		  	<div class="span4"> <input type="text" id="catagory-name" name="catagoryName"> </div>
		</div>

		<div class="row-fluid">
    		<div class="span1"></div>
		  	<div class="span3">Description: </div>
		  	<div class="span4"> <textarea rows="3" id="description" name="description"></textarea> </div>
		</div>

		<div align="right"> 
			<button class="btn btn-primary">submit</button>
			<button class="btn">cancle</button>
		</div>

        
    </div>




    <? $this->load->view('footer'); ?>
</body>
</html>
