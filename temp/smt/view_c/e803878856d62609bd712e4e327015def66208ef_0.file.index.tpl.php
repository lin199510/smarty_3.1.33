<?php
/* Smarty version 3.1.33, created on 2019-07-11 09:38:36
  from 'C:\xampp\htdocs\heaven\w\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d26e77cdf7ca7_64726980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e803878856d62609bd712e4e327015def66208ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\heaven\\w\\view\\index.tpl',
      1 => 1562830714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d26e77cdf7ca7_64726980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="logo" class="container">
        <h1><a href="#" class="icon icon-tasks"><span><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span></a></h1>
</div>
<div id="page" class="container">
    <div id="content">
        <div class="title">
            <h2>天堂精品服飾</h2>
            <span class="byline">HEAVEN TIMELESS</span>
        </div>
        <p> 我們是<a href="https://www.facebook.com/marco19801229" rel="nofollow"><strong> 天堂精品服飾 Heaven Timeless </strong></a>, 香港街頭品排、時裝、輕龐克、搖滾等多款服飾, 與專業的服裝搭配與服務, 希望提供給最好的商品給獨一無二的你.  </p>
        <p>地址：台中市北區精武路320-7號</p>
        <p>電話：0955 588 629</p>
    </div>
    <div id="sidebar"><a href="#" class="image image-full"><img src="../sty/img/heaven.jpg" alt="" /></a></div>
</div>
    

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
