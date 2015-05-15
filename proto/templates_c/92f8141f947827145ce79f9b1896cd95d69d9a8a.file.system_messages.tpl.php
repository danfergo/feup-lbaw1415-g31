<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:40:59
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/common/system_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826941977553da1bb0d9fb3-72655999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f8141f947827145ce79f9b1896cd95d69d9a8a' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/common/system_messages.tpl',
      1 => 1430093619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826941977553da1bb0d9fb3-72655999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da1bb1000d9_88906708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da1bb1000d9_88906708')) {function content_553da1bb1000d9_88906708($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
    <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
<?php } ?>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php } ?>
<?php }} ?>
