<?php /* Smarty version Smarty-3.1.13, created on 2013-06-24 15:48:16
         compiled from "bulk/templates/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:143938157351c84e20e5e304-19050873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f60b181d356074d67921bb7c799bed71d2db354' => 
    array (
      0 => 'bulk/templates/index.htm',
      1 => 1372072885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143938157351c84e20e5e304-19050873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'page' => 0,
    'menuitem' => 0,
    'submenuitem' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c84e210305f9_98297014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c84e210305f9_98297014')) {function content_51c84e210305f9_98297014($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>BURGER KING's battle of the decades</title>
    <link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
</head>
<body>
<!-- html5 content -->
<div id="wrapper">
    <!-- wrapper -->
    <section id="menu">
        <!-- menu -->
        <ul>
            <?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value){
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['menuitem']->value['page_id']){?>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['link_text'];?>

                    <?php if (isset($_smarty_tpl->tpl_vars['menuitem']->value['submenu'])){?>
                        <ul id="submenu">
                            <?php  $_smarty_tpl->tpl_vars['submenuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuitem']->value['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenuitem']->key => $_smarty_tpl->tpl_vars['submenuitem']->value){
$_smarty_tpl->tpl_vars['submenuitem']->_loop = true;
?>
                            <?php if (isset($_GET['decade'])&&$_GET['decade']==$_smarty_tpl->tpl_vars['submenuitem']->value['page_id']){?>
                            <li class="active"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['link_text'];?>
</li>
                            <?php }else{ ?>
                            <li><a href="index.php?page=gallery&amp;decade=<?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['page_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['link_text'];?>
</a></li>
                            <?php }?>
                            <?php } ?>
                        </ul>
                    <?php }?>
                </li>
                <?php }else{ ?>
                <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['page_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['link_text'];?>
</a>
                    <?php if (isset($_smarty_tpl->tpl_vars['menuitem']->value['submenu'])){?>
                        <ul id="submenu">
                            <?php  $_smarty_tpl->tpl_vars['submenuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['submenuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuitem']->value['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['submenuitem']->key => $_smarty_tpl->tpl_vars['submenuitem']->value){
$_smarty_tpl->tpl_vars['submenuitem']->_loop = true;
?>
                            <?php if (isset($_GET['decade'])&&$_GET['decade']==$_smarty_tpl->tpl_vars['submenuitem']->value['page_id']){?>
                            <li class="active"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['link_text'];?>
</li>
                            <?php }else{ ?>
                            <li><a href="index.php?page=gallery&amp;decade=<?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['page_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['submenuitem']->value['link_text'];?>
</a></li>
                            <?php }?>
                            <?php } ?>
                        </ul>
                    <?php }?>
                </li>
                <?php }?>
            <?php } ?>
        </ul>
        <div class="dummy">&nbsp;</div>
        <!-- /menu -->
    </section>
    <section id="content-wrapper">
        <!-- content-wrapper -->
        <section id="content">
            <!-- content -->
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            <!-- /content -->
        </section>
        <!-- /content-wrapper -->
    </section>
    <!-- /wrapper -->
</div>
<!-- /html5 content -->

<!-- javascript files -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript" src="assets/js/Facebook.login.js"></script>
<div id="fb-root"></div>
<script type="text/javascript" src="assets/js/Application.js"></script>
<!-- /javascript files -->

</body>
</html><?php }} ?>