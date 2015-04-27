<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:41:00
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/account/recoverpassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826536531553da1bcd932f0-19913058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44d4dd33d3ce220dcaeaaf6b206b32467110f56b' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/account/recoverpassword.tpl',
      1 => 1430100031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826536531553da1bcd932f0-19913058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da1bce391a0_13863315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da1bce391a0_13863315')) {function content_553da1bce391a0_13863315($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div style="margin:0px auto; max-width:500px;padding:30px;" class="fluid-container base-container upper">

    <?php echo $_smarty_tpl->getSubTemplate ('common/system_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/recoverpassword.php" method="post">
        <h1>Redefinir palavra-passe</h1>
        <p>Introduza o endereço de e-mail da sua conta.</p>

        <input type="email"  name="email" class="form-control" placeholder="Endereço de e-mail da conta">
        <br>
        <input type="submit" class="btn btn-primary" value="Redefinir palavra-passe">
    </form>

        <br>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
