<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <? $this->load->helper('form'); ?>
    <title>Result</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
    <div width="1024" height="300" align="middle">
    	<img src="<?echo base_url();?>/assets/admin-img/header.jpg">
    </div>

	<!-- Categories -->
    <? $this->load->view('/admin/sidebar-category'); ?>

    <!-- Result Catagory -->
    <div class="span8" style="margin-top: 2%;">
    <div><legend><b>Result</b></legend></div>

        <? 
            if($is_ok){
                echo $upload."<br>";
                echo "<p>Your product has added.</p>";
            }
            else {
                echo "<p>Your product name: <b>$name</b> is exist. </p>";
            }
         ?>
         <div align="right">
            <a href="<? echo  site_url('admin/add-product/'.$cat_id); ?>" class="btn" >back</a>
         </div>
    </div>



    <? $this->load->view('intro/footer'); ?>
</body>
</html>
