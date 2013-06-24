<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.13, created on 2013-06-24 02:47:40
=======
<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.11, created on 2013-06-23 23:39:18
         compiled from "bulk/templates/pages/partials/gallery50s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198949987051c76b06ed7135-63941023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.8, created on 2013-06-23 23:30:17
>>>>>>> 21a506e39c8fb38a65aa9e4a366cbfd655cc703f
         compiled from "bulk/templates/pages/partials/gallery50s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97365524451c768e975cf26-59857482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> d4cae78be3301ad9ca33b6e68e530c9152437409
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f66c1ab9afe323b6f19d199a2812f43bf0a611' => 
    array (
      0 => 'bulk/templates/pages/partials/gallery50s.tpl',
      1 => 1372033325,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '198949987051c76b06ed7135-63941023',
=======
  'nocache_hash' => '97365524451c768e975cf26-59857482',
>>>>>>> d4cae78be3301ad9ca33b6e68e530c9152437409
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c768e9887d34_67393346',
  'variables' => 
  array (
    'besteBurger' => 0,
    'tweedeBurger' => 0,
    'derdeBurger' => 0,
    'alleBurgers' => 0,
    'burger' => 0,
  ),
  'has_nocache_code' => false,
<<<<<<< HEAD
=======
<<<<<<< HEAD
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51c76b071c1812_49255389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c76b071c1812_49255389')) {function content_51c76b071c1812_49255389($_smarty_tpl) {?><!-- Header van de 50s -->
=======
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c768e9887d34_67393346',
>>>>>>> 21a506e39c8fb38a65aa9e4a366cbfd655cc703f
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c768e9887d34_67393346')) {function content_51c768e9887d34_67393346($_smarty_tpl) {?><!-- Header van de 50s -->
>>>>>>> d4cae78be3301ad9ca33b6e68e530c9152437409
    <section id="banner-50s">
        <div id="logo">&nbsp;</div>
        <header>
            <h1>50<span>s</span></h1>
            <h2>Rock a burger</h2>
        </header>
    </section>

<!-- Alle hamburgers -->
<div id="achtergrond50s">

    <section id="top3">
        <header>
            <h1>these burgers are rocking our world</h1>
        </header>

        <div id="burgers">
            <!-- Top burger -->
            <section id="topBurger">
                <image src="assets/images/50s-top-burger.png" />
                <div id="voteCountFirst"><?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['likes'];?>
</div>

                <p><?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['user_name'];?>
</p>
                <ul class="actions">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['id'];?>
">Vote for this burger</a></li>
                    <li> <a href=index.php?page=detail&decade=<?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['decade'];?>
&burgerId=<?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['id'];?>
>View details</a></li>
                </ul>

            </section>

            <!-- Tweede beste burger -->
           <section id="secondBurger">
               <image src="assets/images/50s-top-burger.png" />
               <div id="voteCountSecond"><?php echo $_smarty_tpl->tpl_vars['tweedeBurger']->value['likes'];?>
</div>

               <p><?php echo $_smarty_tpl->tpl_vars['tweedeBurger']->value['user_name'];?>
</p>
               <ul class="actions">
                   <li> <a href="<?php echo $_smarty_tpl->tpl_vars['tweedeBurger']->value['id'];?>
">Vote for this burger</a></li>
                   <li> <a href=index.php?page=detail&decade=<?php echo $_smarty_tpl->tpl_vars['tweedeBurger']->value['decade'];?>
&burgerId=<?php echo $_smarty_tpl->tpl_vars['tweedeBurger']->value['id'];?>
>View details</a></li>
               </ul>

           </section>

            <!-- DERDE burger -->
             <section id="thirdBurger">
                 <image src="assets/images/50s-top-burger.png" />
                 <div id="voteCountThird"><?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['likes'];?>
</div>

                 <p><?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['user_name'];?>
</p>
                 <ul class="actions">
                     <li> <a href="<?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['id'];?>
">Vote for this burger</a></li>
                     <li> <a href=index.php?page=detail&decade=<?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['decade'];?>
&burgerId=<?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['id'];?>
>View details</a></li>
                 </ul>

             </section>
            <div class="dummy">&nbsp;</div>

        </div>

    </section>

    <!-- All the burgers -->
    <section id="allTheBugers50s">
        <header>
            <h1>View all the fifties burgers</h1>
        </header>

        <section id="searchField">
            <form>
                <div><input type="text" name="search" value="search for a creator"></div>
            </form>
        </section>

        <div class="dummy">&nbsp;</div>

        <?php  $_smarty_tpl->tpl_vars['burger'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['burger']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alleBurgers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['burger']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['burger']->key => $_smarty_tpl->tpl_vars['burger']->value){
$_smarty_tpl->tpl_vars['burger']->_loop = true;
 $_smarty_tpl->tpl_vars['burger']->index++;
?>

        <!-- Alle burger in een rijtje -->
            <?php if ($_smarty_tpl->tpl_vars['burger']->index%3==0){?>
            <section class="burgerRow">
            <?php }?>
                <section class="burgerSummary">
                    <image src="assets/images/50s-overzicht-burger.png" />
                    <div class="voteCount""><?php echo $_smarty_tpl->tpl_vars['burger']->value['likes'];?>
</div>

                    <p><?php echo $_smarty_tpl->tpl_vars['burger']->value['user_name'];?>
</p>
                    <ul class="actions">
                        <li> <a href="<?php echo $_smarty_tpl->tpl_vars['burger']->value['id'];?>
">Vote for this burger</a></li>
                        <li> <a href=index.php?page=detail&decade=<?php echo $_smarty_tpl->tpl_vars['burger']->value['decade'];?>
&burgerId=<?php echo $_smarty_tpl->tpl_vars['burger']->value['id'];?>
>View details</a></li>
                    </ul>
                </section>

        <?php if ($_smarty_tpl->tpl_vars['burger']->index%3==2){?>
            <div class="dummy">&nbsp;</div>
            <div class="line">&nbsp;</div>
        </section>

        <?php }?>
        <?php } ?>

        <div class="dummy">&nbsp;</div>


    </section>

</div><?php }} ?>