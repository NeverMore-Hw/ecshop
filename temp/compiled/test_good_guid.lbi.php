<link href="./themes/tm/css/base.css" rel="stylesheet" type="text/css" />
<link href="./themes/tm/css/test_good_guid.css" rel="stylesheet" type="text/css" />
<link href="./themes/tm/css/jquery.jqzoom.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'./themes/tm/js/jquery.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'./themes/tm/js/goods.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'./themes/tm/js/jquery.jqzoom-core.js')); ?>

<style type="text/css">
    ul#thumblist{display:block;}
    ul#thumblist li{float:left;margin-right:2px;list-style:none;}
    ul#thumblist li a{display:block;border:1px solid #CCC;}
    ul#thumblist li a.zoomThumbActive{
        border:1px solid red;
    }
    .jqzoom{
            text-decoration:none;
            float:left;
    }
</style>

<script type="text/javascript">
$(document).ready(function() {
           $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false,
            zoomWidth: 460,
            zoomHeight: 460,
            xOffset:20,
            yOffset:0,
            position:'left' 
        });
	//$('.jqzoom').jqzoom();
});
</script>



<div class='tgg'>
    <div>
        <h2>
            <a href=""></a>
        </h2>
        <ul>
            <li>
                <a href="#">天猫</a>
            </li>
            <li>&gt;</li>
            <li>
                <a>品牌女装</a>
            </li>
        </ul>
        <div class="shop_logo">
            <div class="main_info"></div>
        </div>

    </div>
</div>
<img src="./themes/tm/img/shop_top.jpg" alt="" />
<div class="">
    <img src="./themes/tm/img/2013-01-05_135309.jpg" alt="" />
</div>
<div class="good_simple">
    <div class="good_simple_mid">
        <div class="gsm_show">
            <div class="gsm_left">
                <div class="clearfix">   
                     <a href="<?php echo $this->_var['cat']['img_url']; ?>" class="jqzoom" rel='gal1'  title="triumph" >
                            <img src="<?php echo $this->_var['cat']['middle_url']; ?>" style="height:460px;width:460px;"  />
                    </a>	
                </div>
                <ul id="thumblist" class="clearfix">
                    
                    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['cat']):
?>
                        <?php if ($this->_var['key'] >= 1): ?>
                        <li class="gsm_ul_1">
                            <a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '<?php echo $this->_var['cat']['middle_url']; ?>',largeimage: '<?php echo $this->_var['cat']['img_url']; ?>'}">
                            <img class="st" src="<?php echo $this->_var['cat']['thumb_url']; ?>" alt="" />
                            </a>
                        </li>
                        <?php else: ?>
                            <li class="gsm_ul_1">
                                <a  href='javascript:void(0);' class="zoomThumbActive"  rel="{gallery: 'gal1', smallimage: '<?php echo $this->_var['pictures']['0']['middle_url']; ?>',largeimage: '<?php echo $this->_var['pictures']['0']['img_url']; ?>'}">
                                <img class="st" src="<?php echo $this->_var['pictures']['0']['thumb_url']; ?>" alt="" />
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <div class="gsm_right">
                <h3>
                    <a href="">玥影 2012冬装新款 韩版时尚奢华貉子毛领中长款 羽绒服</a>
                </h3>
                <p>
                    <span class="gsm_type">价格</span> <del><?php echo $this->_var['goods']['shop_price']; ?></del>
                    <span>
                        元
                        <span></p>
                            <p>
                                <span class="gsm_type">促销</span>
                                <span class="limit_time">限时促销</span>
                                <span class="gsm_p"><?php echo $this->_var['goods']['promote_price']; ?></span>
                                <!--<span class="yuan">元</span>
                                -->
                                <span class="yuan more">更多促销</span>
                            </p>
                            <div style="clear: left"></div>
                            <p>
                                <span class="gsm_type">配送</span>
                                <span class="place">至北京</span>
                                <span class="send_price">快递: 0.00 EMS: 20.00</span>
                            </p>
                            <p>
                                <span class="gsm_type">月销量</span>
                                <span class="small_price">13698</span>
                                <span class="yuan">&nbsp;件</span>
                            </p>
                            <div style="clear: left"></div>
                            <p>
                                <span class="gsm_type">评价</span>
                                <span class="gsm_grand"></span>
                                <span class="total_grand">4.7分</span>
                                <span class="total_grand">
                                    (
                                    <a href="">累计评价</a>
                                    )
                                </span>
                            </p>
                            <div style="clear: left"></div>
                            <div class="gsm_info">
                                <div>
                                    <span><?php echo $this->_var['specification']['211']['name']; ?></span>
                                    <ul style="height:60px;">
                                        <li>高端定制 限时优惠</li>
                                        <li>高品质 商城正品保证</li>
                                        <?php $_from = $this->_var['typel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                                        <li class="size" style="cursor:pointer">
                                             <?php echo $this->_var['val']['label']; ?>
                                             <input type="hidden"  value="<?php echo $this->_var['val']['id']; ?>"/>                                         
                                        </li>                                       
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                        <li>原料价格疯涨,价格不定时上调</li>
                                    </ul>
                                </div>
                                <div style="clear: left"></div>
                                <div>
                                    <span><?php echo $this->_var['specification']['212']['name']; ?></span>
                                    <ul>
                                        <li class="s_p">
                                            <img src="./themes/tm/img/T2sfpvXoRNXXXXXXXX_!!915353266.jpg_30x30.jpg" alt="" />
                                            <input type="hidden" value="<?php echo $this->_var['specification']['212']['values']['0']['id']; ?>" />
                                        </li>
                                        <li class="s_p">
                                            <img src="./themes/tm/img/T2guaGXolbXXXXXXXX_!!915353266.jpg_30x30.jpg" alt="" />
                                            <input type="hidden" value="<?php echo $this->_var['specification']['212']['values']['1']['id']; ?>" />
                                        </li>
                                        <li class="s_p">
                                            <img src="./themes/tm/img/T2gnKWXdVXXXXXXXXX_!!915353266.jpg_30x30.jpg" alt="" />
                                            <input type="hidden" value="<?php echo $this->_var['specification']['212']['values']['2']['id']; ?>" />
                                        </li>
                                        <li class="s_p">
                                            <img src="./themes/tm/img/T2RuWQXoxaXXXXXXXX_!!915353266.jpg_30x30.jpg" alt="" />
                                            <input type="hidden" value="<?php echo $this->_var['specification']['212']['values']['3']['id']; ?>" />
                                        </li>
                                    </ul>
                                </div>

                                <div style="clear: left"></div>
                                <div>
                                    <span>数量</span>
                                    <dl class="num_good">
                                        <input type="" value='1' id="num"/>
                                        <input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" id="goodid" />
                                        <div class="num_buttom">
                                            <div class="up" id="up"></div>
                                            <div class="down" id="down"></div>
                                        </div>
                                    </dl>
                                    <span class="kc">件(库存1349件)</span>                           
                                </div>
                                <div style="clear: both"></div>
                                <div>
                                    <span>商品总价</span>
                                    <span id="total_price" class="total_price"></span>
                                </div>
                                <div style="clear: left"></div>
                                <div class="gm_good" id="putb">
                                    <a href="" class="pay"></a>
                                    <a href="" class="go_car"></a>
                                </div>
                                <div style="clear:both"></div>
                                <img class="pay_other" src="./themes/tm/img/2013-01-05_170340.jpg" alt="" />
                            </div>
                            </div>
                            </div>



                            <div class="good_last">
                                <div class="gleft">

                                </div>
                                <div class="gright">
                                    <ul class="glist">
                                        <li>商品详情</li>
                                        <li>累计评价（num）</li>
                                        <li>月成交记录</li>
                                        <li>服务质量</li>
                                        <li>看了又看</li>    
                                        <li class="li_last">售后服务</li>
                                    </ul>
                                    <div style="clear: both"></div>
                                    <div id="box1">
                                        <div class="cl">
                                            <div class="c1_con">
                                                天猫商家承诺：您付款之后，如果商家延迟发货，可以获得商品价格30%（不大于500元）的赔付金，详见
                                            </div>
                                        </div>
                                        <div class="attr">
                                            <ul>

                                                <?php $_from = $this->_var['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
                                                <li>
                                                    <?php echo $this->_var['val']['name']; ?>:<?php echo $this->_var['val']['value']; ?>
                                                </li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                                            </ul>
                                        </div>
                                        <div>
                                            <?php echo $this->_var['goods']['goods_desc']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


















                            </div>
                            </div>