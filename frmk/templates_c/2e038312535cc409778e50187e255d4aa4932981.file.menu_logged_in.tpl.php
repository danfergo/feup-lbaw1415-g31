<?php /* Smarty version Smarty-3.1.15, created on 2015-04-20 12:32:31
         compiled from "/opt/lbaw/lbaw1431/public_html/frmk/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7264882085534d5bf3586a1-39218780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e038312535cc409778e50187e255d4aa4932981' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/frmk/templates/common/menu_logged_in.tpl',
      1 => 1386927924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7264882085534d5bf3586a1-39218780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5534d5bf3fe3d2_10841921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5534d5bf3fe3d2_10841921')) {function content_5534d5bf3fe3d2_10841921($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
