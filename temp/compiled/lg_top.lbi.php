<link href="./themes/tm/css/lg.css" rel="stylesheet" type="text/css" />
<link href="./themes/tm/css/base.css" rel="stylesheet" type="text/css" />
<div class="lg_guid">
    <div class="lg_guid_center">
        <span class="lg_left">
            <a href="#">首页</a>
            >
            <a href="#">品牌女装</a>
            >
            <form action="">
                <input type="text">
                <input type="submit" value='搜索'></form>
            <span>共  446720 件相关商品</span>
        </span>
        <span class="go_tm">
            <a href="#">去天猫首页</a>
        </span>
    </div>
</div>
<div class="ppl">
    <div class='ppl_cen'>
        <div class="pc_top">
            <div class='pc_top1'>
                <div class='cp_left'>
                    <span><?php echo $this->_var['lang']['brand']; ?></span>
                </div>
                <div class="cp_right">
                    <ul>
                 <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['brand']):
?>
                     
                         <li>					
				<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>					
                         </li>
                     
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                    </ul>
                </div>
            </div>
            
            
             <?php $_from = $this->_var['cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                 <div class='pc_boy'>
                <div class='pc_boy1'>
                    <span class='pc_boy1_tu'></span>
                    <span class='pc_boy1_font'>
                        <?php echo $this->_var['cat']['name']; ?>
                    </span>
                </div>
                <div class='pc_boy_con'>
                    <ul>
                        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'type');if (count($_from)):
    foreach ($_from AS $this->_var['type']):
?>                       
                        <li>
                            <a href="<?php echo $this->_var['type']['url']; ?>">
                               <?php echo $this->_var['type']['name']; ?>                            
                                <span>(5432)</span>
                            </a>
                        </li>
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                       
                    </ul>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
     

             <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?>
                      <div class="pc_boy">
                <div  class="pc_boy1">
                    <span class='pc_boy1_font'><?php echo $this->_var['value']['filter_attr_name']; ?></span>
                </div>
                <div class="pc_boy_con">
                    <ul>
                         <?php $_from = $this->_var['value']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('keys', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['keys'] => $this->_var['val']):
?>                       
                              <li>
                            <a  href="<?php echo $this->_var['val']['url']; ?>"><?php echo $this->_var['val']['attr_value']; ?></a>
                              </li>                    
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   </ul>
                </div>
            </div>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            <div class='pc_bottom'></div>
        </div>
        <div class='ppl_bottom'>
            <div>更多选项</div>
        </div>
        <div class="ppl_mid">
            <div class="ppl1">
                <span>发货地</span>
                <span></span>
            </div>
            <div class="ppl2">
                <span>默认排序</span>
                <span></span>
                <span>销售</span>
                <span></span>
                <span>价格</span>
                <span></span>
                <span>价格</span>
                <span></span>
            </div>
            <div class="ppl3">
                <span>¥</span>
                <span>-</span>
                <span>¥</span>
            </div>
            <div class="ppl4">
                <label>
                    <input type="checkbox" >
                    <span>包邮</span>
                </label>
                <label>
                    <input type="checkbox" >
                    <span>折扣</span>
                </label>
                <label>
                    <input type="checkbox" >
                    <span>细节实拍</span>
                </label>
                <label>
                    <input type="checkbox" >
                    <span>旺旺在线</span>
                </label>
                <label>
                    <input type="checkbox" >
                    <span>搭配减价</span>
                </label>
                <label>
                    <input type="checkbox" >
                    <span>满就减</span>
                </label>
                <label>
                    <input type="checkbox" >
                    <span>货到付款</span>
                </label>
            </div>
            <div class="ppl5">
                <span>店铺</span>
                <span></span>
                <span>大图</span>
                <span></span>
                <span>列表</span>
                <span></span>
            </div>
            <div class="ppl6">
                <div>
                    <span>&lt;</span>
                </div>
                <div>
                    <span>&gt;</span>
                </div>
            </div>
            <div class="ppl7">1/100</div>
        </div>
         
        
        <div class='lg_goods'>
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  
            <div class="lg_good">
                <a>
                    <img src="<?php echo $this->_var['value']['img_list']['1']['middle_url']; ?>" style="height:220px;width:220px;"  />
                </a>
                <div class="lg_small_goods">
                    <div class="lg_sg">
                        <p > 
                            <?php $_from = $this->_var['value']['img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                            <b ><img  src="<?php echo $this->_var['cat']['thumb_url']; ?>" style="height:36px;width:30px;margin-top: -1px;"/> <i></i></b> 
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                           
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <p class="price goods_con"> <em title="637.94"><?php echo $this->_var['value']['shop_price']; ?></em> <del><?php echo $this->_var['value']['market_price']; ?></del>
                    </p>
                    <p class="goods_con">
                        <a href="<?php echo $this->_var['value']['url']; ?>" class="good_color"><?php echo $this->_var['value']['name']; ?></a>
                    </p>
                    <p class="goods_con good_num">
                        月销量: <em>1.3万</em>
                        |
                        <a href='#'>累计评价:1.2万</a>
                    </p>
                    <div class="goods_con shop">
                        <a href="#" class="" >Feizheti/费姿堤</a>
                        <span class="wang" >
                            <a href="" >
                                <span></span>
                            </a>
                        </span>
                    </div>
                </div>
            
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            </div>
           <div style="clear:both"></div>
           <div class="page_good">
               page
           </div>
           <div class="good_hot">
               <h3>商家热卖: </h3>
               <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'gd');if (count($_from)):
    foreach ($_from AS $this->_var['gd']):
?>
                  <div>
                   <div>
                       <a href="<?php echo $this->_var['gd']['url']; ?>">
                           <img src="<?php echo $this->_var['gd']['img_list']['0']['middle_url']; ?>" alt="" style="height:160px;width:160px;" />
                       </a>
                       <p class="good_hot_price"><?php echo $this->_var['gd']['shop_price']; ?></p>
                       <p>
                           <a href="">
                               <?php echo $this->_var['gd']['name']; ?>
                           </a>
                       </p>
                   </div>
               </div>
               <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             

           </div>
           <div class="search_good">
               <div>
                   <div></div>
                   <span>搜索</span>
               </div>
           </div>
        </div>

    </div>

