<?php /* Smarty version Smarty-3.1.8, created on 2013-06-23 17:28:57
         compiled from "bulk/templates/pages/partials/gallery00s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131601235751c711e8ad8555-53994070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e73f98f04db3d94da10a23bd78d47db0ac2374b5' => 
    array (
      0 => 'bulk/templates/pages/partials/gallery00s.tpl',
      1 => 1372001329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131601235751c711e8ad8555-53994070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51c711e8ae5050_45324521',
  'variables' => 
  array (
    'besteBurger' => 0,
    'tweedeBurger' => 0,
    'derdeBurger' => 0,
    'alleBurgers' => 0,
    'burger' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c711e8ae5050_45324521')) {function content_51c711e8ae5050_45324521($_smarty_tpl) {?><section id="banner-00s">
    <header>
        <h1>THE PRESENT</h1>
        <h2>With <span id="rood">contemporary</span> ingredients we&#8217;ll define the <span>future</span>.</h2>
    </header>
</section>

<!-- Alle hamburgers -->
<div id="achtergrond00s">

    <section id="top3">
        <header>
            <h1>these burgers have it!</h1>
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
s&burgerId=<?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['id'];?>
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
s&burgerId=<?php echo $_smarty_tpl->tpl_vars['tweedeBurger']->value['id'];?>
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
s&burgerId=<?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['id'];?>
>View details</a></li>
                 </ul>

             </section>
            <div class="dummy">&nbsp;</div>

        </div>

    </section>

    <section id="allTheBugers00s">
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
s&burgerId=<?php echo $_smarty_tpl->tpl_vars['burger']->value['id'];?>
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