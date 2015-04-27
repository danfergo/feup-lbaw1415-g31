<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 05:23:01
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/dashboard/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1065171267553dab95952ea5-17483267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5258402b0704c15f3475bfafcc78ae154c860ab2' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/dashboard/sidebar.tpl',
      1 => 1430075703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065171267553dab95952ea5-17483267',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dab95955b37_57332547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dab95955b37_57332547')) {function content_553dab95955b37_57332547($_smarty_tpl) {?><div class="col-sm-2">
    <br>
    <a href="../newauction.php"><button class="btn btn-sm btn-primary" style="width:100%;">Criar leilão</button></a>
    <br>
    <br>
    <h4><span class="glyphicon glyphicon-shopping-cart"> </span>
        <a href="shopping.php">Compras </a>
    </h4>
    <h4><span class="glyphicon glyphicon-inbox"> </span>
        <a href="selling.php">Vendas </a>
    </h4>
    <h4><span class="glyphicon glyphicon-envelope"> </span>
        <a href="messages.php">Mensagens </a>
    </h4>
    <br>
    <h4><span class="glyphicon glyphicon-cog"> </span>
        <a href="../settings.php"> Definiçoes </a></h4>

</div>
<?php }} ?>
