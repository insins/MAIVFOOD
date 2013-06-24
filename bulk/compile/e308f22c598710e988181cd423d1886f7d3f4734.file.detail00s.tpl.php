<?php /* Smarty version Smarty-3.1.8, created on 2013-06-24 16:02:32
         compiled from "bulk/templates/pages/partials/detail00s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109624353151c85178ec00d2-34008152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e308f22c598710e988181cd423d1886f7d3f4734' => 
    array (
      0 => 'bulk/templates/pages/partials/detail00s.tpl',
      1 => 1372082502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109624353151c85178ec00d2-34008152',
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
  'unifunc' => 'content_51c85178ee45b1_66847583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c85178ee45b1_66847583')) {function content_51c85178ee45b1_66847583($_smarty_tpl) {?><!-- Header van de 00s -->
    <section id="banner-00s">
        <header>
            <h1>THE PRESENT</h1>
            <h2>With <span id="rood">contemporary</span> ingredients we&#8217;ll define the <span>future</span>.</h2>
        </header>
    </section>

<!-- Alle hamburgers -->
<div id="achtergrond00s">

    <!-- top venstertje met samenvatting over burger -->
    <section id="burgerSamenvatting">

        <header><h1>This burger is something special!</h1></header>

        <div id="hamburgerImage">
            <img src="assets/images/00s-detail-burger.png" />
        </div>

        <section id="list-things">
            <ul id="actios">
                <li><span>by</span> <?php echo $_smarty_tpl->tpl_vars['burger']->value['creator'];?>
</li>
                <li><span id="votes"> <?php echo $_smarty_tpl->tpl_vars['burger']->value['votes'];?>
</span> votes</li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['burger']->value['id'];?>
"><img src="assets/images/50s-detail-like.png" />Vote for this burger</a></li>
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
            <li id="fb"><a href="<?php echo $_smarty_tpl->tpl_vars['burger']->value['id'];?>
">Share it on Facebook<img src="assets/images/00s-detail-fb-share-btn.png"
            width="10"/></a></li>
            <li id="tw"><a href="https://twitter.com/share?text=I%20voted%20for%20<?php echo $_smarty_tpl->tpl_vars['burger']->value['creator'];?>
%20%60s%20burger%2ECreate%20a%20burger%20yourself%20and%20win%20a%20car%2E%20More%20on%20burgerking%2Ecom">
                            Share it on Twitter<img src="assets/images/00s-detail-twitter-sharebtn.png" width="25px"  /></a></li>

        </ul>

        </section>

        <div class="dummy">&nbsp;</div>

    </section>


</div><?php }} ?>