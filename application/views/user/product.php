<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Product</title>
</head>

<body>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
	<? $this->load->view('intro/menu'); ?>

	<!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    <div class="span8">
    	<ul class="thumbnail" style="height:360px">
    		<li class="span4">
    			<p><h3>MZK-BE01-1</h3></p>
             	<img id="mainImg" src="<? echo base_url(); ?>/assets/img/new/new1.jpg" class="img-rounded">

              <div style="margin-top:10px">
                <a onclick='form2("new1.jpg")' style="padding:7px;">
                  <img src="<? echo base_url(); ?>/assets/img/new/new1.jpg" height="80px" width="80px" class="img-polaroid" onclick="form2">
                </a>
                <a onclick='form2("new2.jpg")' style="padding:7px">
                  <img src="<? echo base_url(); ?>/assets/img/new/new2.jpg" height="80px" width="80px" class="img-polaroid" onclick="form2">
                </a>
                <a onclick='form2("new3.jpg")' style="padding:7px">
                  <img src="<? echo base_url(); ?>/assets/img/new/new3.jpg" height="80px" width="80px" class="img-polaroid" onclick="form2">
                </a>
              </div>
          	</li>
          	<li class="span3">
          		<br><br><br>
          		<p>เป้ก็ได้ สะพายข้างก็ได้ เทรนใหม่ ดีไซน์กิ๊บเก๋
                        น้ำหนักเบา ไม่หนักบ่า ด้านในเป็นซับในยีนส์ไม่ขาดง่าย แข็งแรงทนทาน
                        สายสะพายเป็นเนื้อผ้าอย่างดี ไม่ลุ่ยแน่นอนค่ะ</p>
                <p><b>Price : 1,250 THB</b></p>
            
            	<? echo form_open("product/add");  ?>

            		Quantity: <input type="number" name="quantity" style="width:50px; padding:0px 6px; margin-bottom:0px;" min="1" max="10" value="1">
  					    <br><br> <button class="btn btn-primary" type="submit">Add to Cart</button>
            	<? echo form_close(); ?>
                
          	</li>
    	</ul>
    </div>
    <? $this->load->view('intro/footer'); ?>

   <script type="text/javascript">
        function form2(img){
            document.getElementById("mainImg").src="<? echo base_url(); ?>/assets/img/new/"+img;
        }
    </script>
</body>