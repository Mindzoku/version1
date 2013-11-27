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
    	<div><legend><b>Order</b></legend></div>
        <table class="table table-striped">
            <tr>
                <td>Order no.</td>
                <td>Customer Name</td>
                <td>Amount</td>
                <td>Order Time</td>
                <td>Status</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Nutja KanongTeen</td>
                <td>1990 Baht</td>
                <td> 12/11/56 </td>
                <td> New </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sompong Enterprise</td>
                <td>3500</td>
                <td> 11/10/56 </td>
                <td> Completed </td>
            </tr>
        </table>
    	

        
    </div>




    <? $this->load->view('intro/footer'); ?>
</body>
</html>
