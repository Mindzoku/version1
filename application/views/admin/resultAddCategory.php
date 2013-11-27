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
            if($message){
                echo "Your category name has already added.<br>";
                echo "Name: ".$name;
                echo "<br>Description: ".$description;
            }
            else {
                echo "Your category name: <b>$name</b> is exist. ";
            }

            // foreach ($message as $row) {
            //     echo $row->cat_id."<br>";
            // }
         ?>
    </div>



    <? $this->load->view('intro/footer'); ?>
</body>
</html>
