<?php /* Smarty version Smarty-3.1.8, created on 2013-06-22 23:33:11
         compiled from "bulk/templates/pages/partials/detail80s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122773289651c5ce779bd008-44831850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f434b1eca2b045a3051c0be1bf033ec6469488fc' => 
    array (
      0 => 'bulk/templates/pages/partials/detail80s.tpl',
      1 => 1371936789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122773289651c5ce779bd008-44831850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c5ce77aef009_97072503',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c5ce77aef009_97072503')) {function content_51c5ce77aef009_97072503($_smarty_tpl) {?><!-- Header van de 80s -->
    <section id="banner-80s">
        <div id="logo">&nbsp;</div>
        <header>
            <h1>Burger fever</h1>
        </header>
    </section>

<!-- Alle hamburgers -->
<div id="achtergrond80s">

    <!-- top venstertje met samenvatting over burger -->
    <section id="burgerSamenvatting">

        <header><h1>This burger has some swing</h1></header>

        <div id="hamburgerImage">
            <img src="assets/images/80s-burger-overzicht.png" width="435" height="238" />
        </div>

        <section id="list-things">
            <ul id="actios">
                <li><span>by</span> Ines van helleputte</li>
                <li><span id="votes">115</span> votes</li>
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
            <li>Ingredient</li>
            <li>Ingredient</li>
            <li>Ingredient</li>
        </ul>

        <div class="dummy">&nbsp;</div>


        </section>

        <!-- Vote buttons -->
        <section id="voteBtns">
            <header><h1>I like this one!</h1></header>

        <ul>
            <li id="fb"><a href="shareFB">Share it on Facebook <img src="assets/images/80s-detail-fb-share-btn.png"
                                                               width="10"/></a></li>
            <li id="tw"><a href="shareTwitter">Share it on Twitter<img
                    src="assets/images/80s-detail-twitter-sharebtn.png" width="25px" /></a></li>

        </ul>

        </section>

        <div class="dummy">&nbsp;</div>

    </section>


</div><?php }} ?>