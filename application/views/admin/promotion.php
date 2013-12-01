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
                <img src="<? echo base_url($promotions[0]['prom_image']); ?>" width="330px" height="260px" class="img-rounded">
                <div align="center"><a href="<? echo site_url('admin/edit-promotion/1'); ?>" class="btn btn-primary" type="submit">edit</a></div>
              </li>
              <li class="span4">
                PROMOTION2
                <img src="<? echo base_url($promotions[1]['prom_image']); ?>" width="330px" height="260px" class="img-rounded">
                <div align="center"><a href="<? echo site_url('admin/edit-promotion/2'); ?>" class="btn btn-primary" type="submit">edit</a></div>
              </li>
            </ul>
        </div>

        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
