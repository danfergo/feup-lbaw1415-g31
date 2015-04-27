<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 05:23:00
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/notifications/item-list-rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1264889076553dab94294271-27144157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdfe51a57b9213b365d2ce64d28b3eea499cff3c' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/notifications/item-list-rating.tpl',
      1 => 1430073667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264889076553dab94294271-27144157',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dab942a0235_44688836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dab942a0235_44688836')) {function content_553dab942a0235_44688836($_smarty_tpl) {?><div class="notification base-container upper item-list rating">
    <?php echo $_smarty_tpl->getSubTemplate ('notifications/auction-prev-content-ended.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('notifications/auction-prev-comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div class="clearfix"></div>
</div><?php }} ?>
