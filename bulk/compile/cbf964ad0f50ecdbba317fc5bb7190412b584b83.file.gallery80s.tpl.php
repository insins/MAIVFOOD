<?php /* Smarty version Smarty-3.1.13, created on 2013-06-24 15:48:16
         compiled from "bulk/templates/pages/partials/gallery80s.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107762632651c84e20d60684-26656286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf964ad0f50ecdbba317fc5bb7190412b584b83' => 
    array (
      0 => 'bulk/templates/pages/partials/gallery80s.tpl',
      1 => 1372078735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107762632651c84e20d60684-26656286',
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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c84e20e47ce1_32540155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c84e20e47ce1_32540155')) {function content_51c84e20e47ce1_32540155($_smarty_tpl) {?><section id="banner-80s">
    <header>
        <h1>THE PRESENT</h1>
    </header>
</section>

<!-- Alle hamburgers -->
<div id="achtergrond80s">

    <section id="top380s">
        <header>
            <h1>Boogie burgers</h1>
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
                    <li> <a href=index.php?page=detail&decade=v<?php echo $_smarty_tpl->tpl_vars['besteBurger']->value['decade'];?>
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
s&burgerId=<?php echo $_smarty_tpl->tpl_vars['derdeBurger']->value['id'];?>
>View details</a></li>
                 </ul>

             </section>
            <div class="dummy">&nbsp;</div>

        </div>

    </section>

    <!-- All the burgers -->
    <section id="allTheBugers00s">
        <header>
            <h1>View all the funky burgers</h1>
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
</div>
<?php }} ?>