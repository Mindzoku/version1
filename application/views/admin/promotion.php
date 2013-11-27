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

    <div class="span8" style="margin-top: 2%;">
    	<div><legend><b>Promotion</b></legend></div>

    	<div class="span8">
            <ul class="thumbnails">
              <li class="span4">
                PROMOTION1
                <img src="<? echo base_url(); ?>/assets/img/promotion/pro1.jpg" class="img-rounded">
                <div align="center"><button class="btn btn-primary" type="submit">edit</button></div>
              </li>
              <li class="span4">
                PROMOTION2
                <img src="<? echo base_url(); ?>/assets/img/promotion/pro2.jpg" class="img-rounded">
                <div align="center"><button class="btn btn-primary" type="submit">edit</button></div>
              </li>
            </ul>
        </div>

        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
