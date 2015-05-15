<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:44:09
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/account/confirmaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:341809043553da279c19976-53226776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48040fde2de619d01ad4ac88c3eba6f7c17d1a1b' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/account/confirmaccount.tpl',
      1 => 1430093668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '341809043553da279c19976-53226776',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da279cb2bc9_99080188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da279cb2bc9_99080188')) {function content_553da279cb2bc9_99080188($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div style="margin:0px auto; max-width:500px;padding:30px;" class="fluid-container base-container upper">

    <?php echo $_smarty_tpl->getSubTemplate ('common/system_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1>Confirmar conta</h1>
    <p> A sua conta ainda nao se encontra ativa. Um e-mail de confirmaçao foi enviado para o seu e-mail. Basta abrir o link existente neste para esta ficar ativa de imediato.
    </p>
    <br>
    <a href="confirmaccount.php"><button type="submit" class="btn btn-primary">Enviar  novo e-mail de confirmaçao</button></a>
    <br>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
