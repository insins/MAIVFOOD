<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.8, created on 2013-06-24 18:42:00
         compiled from "bulk/templates/pages/partials/gallery50s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113600257351c876d8c4dd32-27302091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.11, created on 2013-06-24 10:49:04
         compiled from "bulk/templates/pages/partials/gallery50s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80095236651c8080028cae4-48676970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.8, created on 2013-06-24 16:16:46
         compiled from "bulk/templates/pages/partials/gallery50s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11193980351c854ce0137e5-25584840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 8eb6e8bcf59722be9419f185b08cb9d7ed075096
>>>>>>> 1bfb4ac7c6f65ad665e3b48331a3f633138c0ae8
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f66c1ab9afe323b6f19d199a2812f43bf0a611' => 
    array (
      0 => 'bulk/templates/pages/partials/gallery50s.tpl',
<<<<<<< HEAD
      1 => 1372010849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80095236651c8080028cae4-48676970',
=======
      1 => 1372078596,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '113600257351c876d8c4dd32-27302091',
=======
  'nocache_hash' => '11193980351c854ce0137e5-25584840',
>>>>>>> 8eb6e8bcf59722be9419f185b08cb9d7ed075096
>>>>>>> 1bfb4ac7c6f65ad665e3b48331a3f633138c0ae8
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51c8080047e541_58534399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c8080047e541_58534399')) {function content_51c8080047e541_58534399($_smarty_tpl) {?><!-- Header van de 50s -->
=======
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c876d8ce5f95_64446041',
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_51c876d8ce5f95_64446041')) {function content_51c876d8ce5f95_64446041($_smarty_tpl) {?><!-- Header van de 50s -->
=======
<?php if ($_valid && !is_callable('content_51c854ce076477_31071343')) {function content_51c854ce076477_31071343($_smarty_tpl) {?><!-- Header van de 50s -->
>>>>>>> 8eb6e8bcf59722be9419f185b08cb9d7ed075096
>>>>>>> 1bfb4ac7c6f65ad665e3b48331a3f633138c0ae8
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
                <div><input type="text" name="search" value="search for a creator">
                <ul id="zoekresultaten">

                </ul></div>
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