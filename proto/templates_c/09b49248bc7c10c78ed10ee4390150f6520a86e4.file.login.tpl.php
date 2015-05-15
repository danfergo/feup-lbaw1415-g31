<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:40:59
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/account/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:824120105553da1bb031801-95602194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b49248bc7c10c78ed10ee4390150f6520a86e4' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/account/login.tpl',
      1 => 1430095921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824120105553da1bb031801-95602194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da1bb0d1012_93642893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da1bb0d1012_93642893')) {function content_553da1bb0d1012_93642893($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div style="margin:0px auto; max-width:350px;padding:30px;" class="fluid-container base-container upper">

    <?php echo $_smarty_tpl->getSubTemplate ('common/system_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <h1>Login</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/login.php" method="post">
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Palavra-passe">
        </div>


        <input type="submit" class="btn btn-primary" value="Iniciar sessão" style="width:100%;">
        <br>
        <br>
       <!-- <label style="font-weight: normal;">
            <input type="checkbox" name="remember_me"> Lembrar-me
        </label> -->
        <br>
        <a href="recoverpassword.php">Recuperar palavra-passe</a>

    </form>
</div>
<br>
<br>
<div style="text-align:center;">
    <a href="register.php">Criar uma conta </a>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
