<html>
<head>
    <? $this->load->view('intro/header'); ?>
    <title>Home</title>
</head>

<body>
        <div width="1024" height="350" align="middle"><iframe src="http://files.bannersnack.com/iframe/embed.html?hash=bt9s4mpp&bgcolor=%233D3D3D&wmode=opaque&t=1383461794" width="950" height="300" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
    <? $this->load->view('intro/menu'); ?>
    
    <!-- Categories -->
    <!-- <? $data['categories'] = $categories; ?> -->
    <? $this->load->view('intro/categories'); ?>

    
    <div class="span8">
        <!-- Promotion -->
        <ul class="thumbnails">
          <li class="span4">
            PROMOTION1
            <img src="<? echo base_url(); ?>/assets/img/promotion/pro1.jpg" width="330px" class="img-rounded">
          </li>
          <li class="span4">
            PROMOTION2
            <img src="<? echo base_url(); ?>/assets/img/promotion/pro2.jpg" width="330px" class="img-rounded">
          </li>
        </ul>

        <!-- New Arrivals -->
        <ul class="thumbnails" style="border: 1px solid #ddd;" >
            <p>&nbsp;&nbsp;<b>NEW ARRIVALS</b></p>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new1.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-BE01-1</h3>
                    <p>เป้ก็ได้ สะพายข้างก็ได้ เทรนใหม่ ดีไซน์กิ๊บเก๋
                        น้ำหนักเบา ไม่หนักบ่า ด้านในเป็นซับในยีนส์ไม่ขาดง่าย แข็งแรงทนทาน
                        สายสะพายเป็นเนื้อผ้าอย่างดี ไม่ลุ่ยแน่นอนค่ะ <br>
                        Price : 1,250 THB
                    </p><br><br>
                    <!-- <input type="image" src="<? echo base_url(); ?>/assets/img/tocart.jpg" > -->
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new2.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-jean01</h3>
                    <p>-กระเป๋าเข็มขัดกระดุมแม่เหล้ก ใส่ tablet ได้ ด้านในเป็นซับในผ้ากระสอบญี่ปุ่นหลายช่องให้เก็บของได้ กิ๊บเก๋ ไม่เหมือนใครคะ
                        -ขนาด 11 นิ้ว* 10 นิ้ว
                        -พีวีซีเกรดเอ อะไหล่เป็นงานซิงค์ไม่ขึ้นสนิม<br>
                        Price : 790 บาทคะ
                    </p><br>
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new3.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-BE02</h3>
                    <p>เป้ก็ได้ สะพายข้างก็ได้ ใช้ได้หลากหลายสไตล์ น้ำหนักเบา ไม่หนักบ่า                           เป็นกระเป๋าใบเก่ง สุดชิค ตัวกระเป๋าเป็นผ้าแคนวาสลายตุ๊กตา
                        ซับในลายสกอต สายสะพายเป็นเนื้อผ้าอย่างดี 
                        ไม่ลุ่ยแน่นอนค่ะ ไม่ว่าจะวันเบาๆ หรือวันที่เร่งรีบ ใบด้วยเอาอยู่คะ<br>
                        Price : 1250 THB
                    </p>
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
             </li>
        </ul>

        <!-- Recommend -->
        <ul class="thumbnails" style="border: 1px solid #ddd;">
            <p>&nbsp;&nbsp;<b>RECOMMEND</b></p>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/recommend/re1.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-BE04</h3>
                    <p>กระเป๋า A4 เข็มขัดแม่เหล็กผ้ากระสอบญี่ปุ่น<br>
                        price : 1,250 THB
                    </p><br><br>
                    <!-- <input type="image" src="<? echo base_url(); ?>/assets/img/tocart.jpg" > -->
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new2.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-jean01</h3>
                    <p>-กระเป๋าเข็มขัดกระดุมแม่เหล้ก ใส่ tablet ได้ ด้านในเป็นซับในผ้ากระสอบญี่ปุ่นหลายช่องให้เก็บของได้ กิ๊บเก๋ ไม่เหมือนใครคะ
                        -ขนาด 11 นิ้ว* 10 นิ้ว
                        -พีวีซีเกรดเอ อะไหล่เป็นงานซิงค์ไม่ขึ้นสนิม<br>
                        price : 790 บาทคะ
                    </p><br>
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new3.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-BE02</h3>
                    <p>เป้ก็ได้ สะพายข้างก็ได้ ใช้ได้หลากหลายสไตล์ น้ำหนักเบา ไม่หนักบ่า                           เป็นกระเป๋าใบเก่ง สุดชิค ตัวกระเป๋าเป็นผ้าแคนวาสลายตุ๊กตา
                        ซับในลายสกอต สายสะพายเป็นเนื้อผ้าอย่างดี 
                        ไม่ลุ่ยแน่นอนค่ะ ไม่ว่าจะวันเบาๆ หรือวันที่เร่งรีบ ใบด้วยเอาอยู่คะ<br>
                        price : 1250 THB
                    </p>
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
             </li>

             <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/recommend/re1.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-BE04</h3>
                    <p>กระเป๋า A4 เข็มขัดแม่เหล็กผ้ากระสอบญี่ปุ่น<br>
                        price : 1,250 THB
                    </p><br><br>
                    <!-- <input type="image" src="<? echo base_url(); ?>/assets/img/tocart.jpg" > -->
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new2.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-jean01</h3>
                    <p>-กระเป๋าเข็มขัดกระดุมแม่เหล้ก ใส่ tablet ได้ ด้านในเป็นซับในผ้ากระสอบญี่ปุ่นหลายช่องให้เก็บของได้ กิ๊บเก๋ ไม่เหมือนใครคะ
                        -ขนาด 11 นิ้ว* 10 นิ้ว
                        -พีวีซีเกรดเอ อะไหล่เป็นงานซิงค์ไม่ขึ้นสนิม<br>
                        price : 790 บาทคะ
                    </p><br>
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
            </li>
            <li class="span3">
                <div class="thumbnail">
                <img src="<? echo base_url(); ?>/assets/img/new/new3.jpg" class="img-rounded">
                <div class="caption">
                    <h3>MZK-BE02</h3>
                    <p>เป้ก็ได้ สะพายข้างก็ได้ ใช้ได้หลากหลายสไตล์ น้ำหนักเบา ไม่หนักบ่า                           เป็นกระเป๋าใบเก่ง สุดชิค ตัวกระเป๋าเป็นผ้าแคนวาสลายตุ๊กตา
                        ซับในลายสกอต สายสะพายเป็นเนื้อผ้าอย่างดี 
                        ไม่ลุ่ยแน่นอนค่ะ ไม่ว่าจะวันเบาๆ หรือวันที่เร่งรีบ ใบด้วยเอาอยู่คะ<br>
                        price : 1250 THB
                    </p>
                    <button class="btn btn-primary" >Add to Cart</button>
                </div>
                </div>
             </li>
        </ul>
    </div>

  





    <? $this->load->view('intro/footer'); ?>
</body>
</html>