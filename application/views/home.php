<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Home</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
    
    <!-- Categories -->
    <div class="span3 bs-docs-sidebar" >
        <ul class="nav nav-list bs-docs-sidenav">
            <li class="nav-header">Categories</li>
            <li><a href="#"><i class="icon-chevron-right" ></i>Backpack</a></li>
            <li><a href="#"><i class="icon-chevron-right"></i>Briefcase</a></li>
            <li><a href="#"><i class="icon-chevron-right"></i>Ipad Bags</a></li>
            <li><a href="#"><i class="icon-chevron-right"></i>Hand Bags</a></li>
        </ul>
    </div>
    <div class="span8">
        <ul class="thumbnails">
          <li class="span4">
            PROMOTION1
            <img src="<? echo base_url(); ?>/assets/img/promotion/pro1.jpg" class="img-rounded">
          </li>
          <li class="span4">
            PROMOTION2
            <img src="<? echo base_url(); ?>/assets/img/promotion/pro2.jpg" class="img-rounded">
          </li>
        </ul>
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>