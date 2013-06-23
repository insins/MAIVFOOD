<?php /* Smarty version Smarty-3.1.8, created on 2013-06-23 23:30:19
         compiled from "bulk/templates/pages/partials/detail50s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31958427951c768eb25a292-28943467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0fd51da328da0c8115217f2a9aa142f50496ca' => 
    array (
      0 => 'bulk/templates/pages/partials/detail50s.tpl',
      1 => 1372009603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31958427951c768eb25a292-28943467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'burger' => 0,
    'ingredient' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c768eb2e7106_18716696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c768eb2e7106_18716696')) {function content_51c768eb2e7106_18716696($_smarty_tpl) {?><!-- Header van de 50s -->
    <section id="banner-50s">
        <div id="logo">&nbsp;</div>
        <header>
            <h1>50<span>s</span></h1>
            <h2>Rock a burger</h2>
        </header>
    </section>

<!-- Alle hamburgers -->
<div id="achtergrond50s">

    <!-- top venstertje met samenvatting over burger -->
    <section id="burgerSamenvatting">

        <header><h1>This burger is rocking!</h1></header>

        <div id="hamburgerImage">
            <img src="assets/images/detail-50s-burger.png" />
        </div>

        <section id="list-things">
            <ul id="actios">
                <li><span>by</span> <?php echo $_smarty_tpl->tpl_vars['burger']->value['creator'];?>
</li>
                <li><span id="votes"> <?php echo $_smarty_tpl->tpl_vars['burger']->value['votes'];?>
</span> votes</li>
                <li><a href="1"><img src="assets/images/50s-detail-like.png" />Vote for this burger</a></li>
            </ul>
        </section>

        <div class="dummy">&nbsp;</div>

    </section>

    <section id="bottomInfo">
        <!-- Ingredienten -->
        <section id="ingredienten">
            <header><h1>In this burger</h1></header>

        <p>Includes</p>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['ingredient'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ingredient']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['burger']->value['ingredienten']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ingredient']->key => $_smarty_tpl->tpl_vars['ingredient']->value){
$_smarty_tpl->tpl_vars['ingredient']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['ingredient']->value;?>
</li>
            <?php } ?>
        </ul>

        <div class="dummy">&nbsp;</div>


        </section>

        <!-- Vote buttons -->
        <section id="voteBtns">
            <header><h1>I like this one!</h1></header>

        <ul>
            <li id="fb"><a href="shareFB">Share it on Facebook<img src="assets/images/50s-detail-fb-share-btn.png" width="10"/></a></li>
            <li id="tw"><a href="shareTwitter">Share it on Twitter<img
                    src="assets/images/50s-detail-twitter-sharebtn.png" width="25px" /></a></li>

        </ul>

        </section>

        <div class="dummy">&nbsp;</div>

    </section>


</div><?php }} ?>