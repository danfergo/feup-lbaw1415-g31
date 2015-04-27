<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:44:09
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/texts/email-confirmaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1423861492553da27974fa38-00274961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8823b6a6c0680c61ac208af2cf3e33c3d69c3a2' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/texts/email-confirmaccount.tpl',
      1 => 1430084497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423861492553da27974fa38-00274961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HASH_CODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da2797e4238_46246806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da2797e4238_46246806')) {function content_553da2797e4238_46246806($_smarty_tpl) {?><a href="http://gnomo.fe.up.pt/~lbaw1431/proto/actions/confirmaccount.php?hash=<?php echo $_smarty_tpl->tpl_vars['HASH_CODE']->value;?>
">
    [clica para ativar conta]
</a><?php }} ?>
