<link href="./themes/tm/css/goods.css" rel="stylesheet" type="text/css" />
<div class="by1">
	<div class="by2">
		<div class="goods">
			<div class="like">Hi，你好！你可能感兴趣的品牌：</div>
             <div class="goods1">
             	<div class="cols">
             		<div class="g1_1">                                                           
	             		<!--<img src="./themes/tm/img/goods1_1.jpg" alt="">-->
                                                             <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	             		<p>[COGI/高姿]</p>
	             		<p>高姿专注美白26年</p>
             		</div>
             		<div class="g1_2">
                                                            <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['0']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['0']['brand_name']; ?></p>
	             		<p>著名卡通童装品牌</p>
             		</div>
             	</div>
             	<div class="cols">
             		<div class="g2_1">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['1']['brand_name']; ?></p>
	             		<p>地球人都知道</p>
             		</div>
             		<div class="g2_2">
	             		
                                                             <?php 
$k = array (
  'name' => 'ads',
  'id' => '2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                                                              
	             		<p>[HARRY POTTER/哈利波特]</p>
	             		<p>中国十大童装品牌</p>
             		</div>             		
             	</div>
             	<div class="cols">
             		<div class="g3_1">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['3']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list30']['brand_name']; ?></p>
	             		<p></p>
             		</div>
             		<div class="g3_2">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['4']['brand_name']; ?></p>
	             		<p>都市时尚优雅男装</p>
             		</div>
             		<div class="g3_3">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['5']['brand_name']; ?></p>
	             		<p>进取不止运动永高</p>
             		</div>
             	</div>
             	<div class="cols">
             		<div class="g4_1">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['6']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['6']['brand_name']; ?></p>
	             		<p>满99元减3元</p>
             		</div>
             		<div class="g4_2">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['7']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['7']['brand_name']; ?></p>
	             		<p>商务休闲品牌男装</p>
             		</div>
             		<div class="g4_3">
	             		 <img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['10']['brand_logo']; ?>" alt="" />
                                                            <p><?php echo $this->_var['brand_list']['10']['brand_name']; ?></p>
	             		<p>满199元减10元</p>
             		</div>
             	</div>
             	<div class="cols">
             		<div class="g5_1">
	             		  <?php 
$k = array (
  'name' => 'ads',
  'id' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	             		<p>[Belle/百丽]</p>
	             		<p>满1元免邮费</p>
             		</div>
             		<div class="g5_2">
	             		 <?php 
$k = array (
  'name' => 'ads',
  'id' => '4',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	             		<p>[Camel/骆驼]</p>
	             		<p>满399元减30元</p>
             		</div>
             	</div>
             	<div class="cols_right"></div>
             </div>
             <div class="adv">
             	<img src="./themes/tm/img/adv1.jpg"  style="display:block;height:90px;width:940px"/>
             </div>

             <div class="f1">
             	 <div class="f1_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
                                <?php $_from = $this->_var['cates']['59']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<img src="./themes/tm/img/f11.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f12.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f13.jpg" alt="">
             	 </div>
             	 <div class="flast">
             	 	
             	 </div>
             </div>




<div class="f1">
             	 <div class="f2_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
                                <?php $_from = $this->_var['cates']['68']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<!--<img src="./themes/tm/img/f21.jpg" alt="">-->
                         <?php 
$k = array (
  'name' => 'ads',
  'id' => '5',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f22.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f23.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f24.jpg" alt="">
             	 </div>
             </div>
             
             
  

       <div class="f1">
             	 <div class="f3_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
                                                <?php $_from = $this->_var['cates']['75']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 
             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<img src="./themes/tm/img/f31.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f32.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f33.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f34.jpg" alt="">
             	 </div>
             </div>
             <div class="adv">
                  <img src="./themes/tm/img/adv2.jpg" alt="">
             </div>
             


        <div class="f1">
             	 <div class="f4_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
                              <?php $_from = $this->_var['cates']['86']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 	
             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<img src="./themes/tm/img/f41.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f42.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f43.jpg" alt="">
             	 </div>
             	 <div class="flast">
             	 	
             	 </div>
             </div>



 
       <div class="f1">
             	 <div class="f5_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
             	 	 	 <?php $_from = $this->_var['cates']['94']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<img src="./themes/tm/img/f51.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f52.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f53.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f54.jpg" alt="">
             	 </div>
             </div>


        <div class="f1">
             	 <div class="f6_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
             	 	 	 <?php $_from = $this->_var['cates']['99']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 	
             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<img src="./themes/tm/img/f11.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f12.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f13.jpg" alt="">
             	 </div>
             	 <div class="flast">
             	 	
             	 </div>
             </div>
             
             
   
           
           <div class="f1">
             	 <div class="f7_head f_head ">
             	 	<span>
             	 		
             	 	</span>
             	 	 <ul>
             	 	 	 <?php $_from = $this->_var['cates']['105']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vacat');if (count($_from)):
    foreach ($_from AS $this->_var['vacat']):
?>
                                                            <li>
             	 	 		<a href="<?php echo $this->_var['vacat']['url']; ?>">
             	 	 			<?php echo $this->_var['vacat']['name']; ?>
             	 	 		</a>
             	 	 	</li>
                                
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

             	 	 </ul>
             	 </div>
             	 <div class="flogo">
             	 	<ul class="ful1">
             	 		<li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['2']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['1']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['4']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['5']['brand_logo']; ?>" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="/ec/data/brandlogo/<?php echo $this->_var['brand_list']['8']['brand_logo']; ?>" alt="">
		             	 	</a>
             	 	    </li>
             	 	    <li>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_1.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_2.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_3.jpg" alt="">
		             	 	</a>
		             	 	<a href="">
		             	 		<img src="./themes/tm/img/f1_3_4.jpg" alt="">
		             	 	</a>
		             	 	<a href="" class="fmore">
		             	 		更多品牌>>
		             	 	</a>
             	 	    </li>
             	 	</ul>
             	 	<ul class="ful2">
             	 		<li>•</li>
             	 		<li>•</li>
             	 		<li>•</li>
             	 	</ul>
             	 </div>
             	 <div class="ffirst">
             	 	<img src="./themes/tm/img/f71.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f72.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f73.jpg" alt="">
             	 </div>
             	 <div class="fother">
             	 	<img src="./themes/tm/img/f74.jpg" alt="">
             	 </div>
             </div>



      <div class="adv">
                  <img src="./themes/tm/img/adv3.jpg" alt="">
             </div>







		</div>
	</div>
</div>