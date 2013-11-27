<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Home</title>
</head>

<body>
    <? $this->load->view('intro/menu'); ?>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
    
    <!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    
    <a href="#" onclick='form2()'><img id="imageid" src="<? echo base_url(); ?>/assets/img/promotion/pro1.jpg" class="img-rounded" onclick="form2"></a>

    <img src="<? echo base_url(); ?>/assets/img/promotion/pro2.jpg" class="img-rounded">

  





    <? $this->load->view('intro/footer'); ?>

    <script type="text/javascript">
        function form2(){
            document.getElementById("imageid").src="<? echo base_url(); ?>/assets/img/promotion/pro2.jpg";
        }
    </script>

</body>
</html>