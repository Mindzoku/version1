

<!-- Categories -->
    <div class="span3 bs-docs-sidebar" >
        <ul  class="nav nav-list bs-docs-sidenav">
            <li class="nav-header">Categories</li>
 
            <? 
            if(!isset($catid)) $catid = "";
            foreach ($categories as $cat) { ?>
            	 <!-- echo '<li class="'.=($cat['cat_name'] == $cate) ? "active" : "nonactive" ;.'" ><a href="'.site_url('categories/'.$cat['cat_name']).'"><i class="icon-chevron-right"></i>'.$cat['cat_name'].'</a></li>'; -->
            	<li class="<?=($cat['cat_id'] == $catid) ? "active" : "nonactive" ;?>" ><a href="<? echo site_url('categories/'.$cat['cat_id']) ?>"><i class="icon-chevron-right"></i><? echo $cat['cat_name']?></a></li>
            <?}?>
            
        </ul>
    </div>

