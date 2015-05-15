<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:40:55
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:373114020553da1b72e0433-58357271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24a73ee8e6df3e890a7e1d47a23a695700dff317' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/index.tpl',
      1 => 1430073540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '373114020553da1b72e0433-58357271',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da1b73849b6_29930607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da1b73849b6_29930607')) {function content_553da1b73849b6_29930607($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<h2 style="margin-left:15px;">Recomendados</h2>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['name'] = 'consumidor';
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['loop'] = is_array($_loop=10) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['total']);
?>
    <div class="col-xs-12 col-lg-3" style="margin:15px 0;">
        <?php echo $_smarty_tpl->getSubTemplate ('notifications/item-tile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php endfor; endif; ?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
