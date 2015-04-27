<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 05:23:01
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/dashboard/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:701880263553dab958b5303-30307218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6adb066c2dc84598fa2da044fef986c18ef29d0' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/dashboard/index.tpl',
      1 => 1430096881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701880263553dab958b5303-30307218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dab95949905_39822236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dab95949905_39822236')) {function content_553dab95949905_39822236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('dashboard/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-sm-10">
    <!--
            include('parts/prevs/item-list-giverating.php');
            include('parts/prevs/item-list-seller-draft.php');
            include('parts/prevs/item-list-seller-active.php');
            include('parts/prevs/item-list-seller-confirmshippment.php');
            include('parts/prevs/item-list-buyer-msg.php');
    -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
