<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Cart</title>
</head>

<body>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
	<? $this->load->view('intro/menu'); ?>

	<!-- Categories -->
    <? $this->load->view('intro/categories'); ?>

    <div class="span8">
    	<ul >
    		<li class="span7">
    			<p><h3>My Cart</h3></p>

           

           <table class="table" style="width:630px">
            <thead> 
            <td width="20%"><h4>#</h4></td>
            <td><h4>Name</h4></td> 
            <td><h4>Quantity</h4></td>
            <td><h4>Photo</h4></td>
            <td><h4>Price</h4></td>
            </thead>

            <?  $int = 1; $total = 0;
            foreach ($carts as $cart) { ?>

              <tbody >
                  <td width="10%">
                    <? echo $int++; ?>
                  </td>
                  <td>
                    <? echo $cart['pd_name']; ?>
                  </td>
                  <td>
                    <? echo $cart['ct_qty']; ?>
                  </td>
                  <td >
                    <img height="60" width="60" src="<? echo base_url(); ?>/assets/img/new/new1.jpg" class="img-rounded">

                    <!-- <img height="65" width="65" src="<? $cart['pd_image1']; ?>" class="img-rounded">
                    <img height="65" width="65" src="<? $cart['pd_image2']; ?>" class="img-rounded">
                    <img height="65" width="65" src="<? $cart['pd_image3']; ?>" class="img-rounded"> -->
                  </td>
                  <td>
                    <? echo number_format((int)$cart['ct_qty']*$cart['pd_price']); 
                        $total = (int)$cart['ct_qty']*$cart['pd_price']+$total;?>
                  </td>
                  <td>
                    <button class="btn btn-mini btn-danger" style="width:50px;" type="button">DEL</button>
                  </td>
                 
              </tbody>
           
              <?}?>
          </table>


          <div align="right">
            <p><h4>Total: <? echo number_format($total); ?> Baht</h4></p>
            <button class="btn btn-primary" onclick=location.href='<? echo site_url('cart2'); ?>' type="button">Continue</button> 
          </div>

    	</ul>
    </div>
    <? $this->load->view('intro/footer'); ?>

   <script type="text/javascript">
        function form2(img){
            document.getElementById("mainImg").src="<? echo base_url(); ?>/assets/img/new/"+img;
        }
    </script>
</body>