<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 12:09:41
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454706242553e0ae5742512-93888672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814f9e5157d8c6e2228574dbbfa00c84c90235e1' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/search.tpl',
      1 => 1430075331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454706242553e0ae5742512-93888672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553e0ae57e23c1_70158405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e0ae57e23c1_70158405')) {function content_553e0ae57e23c1_70158405($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-sm-2">
    <h4><span class="glyphicon glyphicon-list-alt"> </span> Categorias </h4>
    <ul>
        <li>Carros (97)
            <ul>
                <li>Carros (20) </li>
                <li>Motas (40) </li>
                <li>Barcos (37)</li>
            </ul>
        </li>
        <li>Casas (231)
            <ul>
                <li>Apartamentos (200)</li>
                <li>Moradias (15) </li>
                <li>Barracos (16) </li>
            </ul>
        </li>
    </ul>
</div>
<div class="col-sm-10">

    <div style="float:right;margin-right:15px;">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                Ordenar resultados por
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo+Portes descendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo+Portes ascendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo ascendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo descendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nº licitaçoes descente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nº licitaçoes ascendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tempo restante descente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tempo restante ascendente</a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>

    <<?php ?>?php for ($i = 0; $i < 10; $i++) {
            ?<?php ?>>
    <div class="col-xs-12 col-lg-4" style="margin:15px 0;">

        <<?php ?>?php include "parts/prevs/item-tile.php"; ?<?php ?>>
    </div>
    <<?php ?>?php
        }
        ?<?php ?>>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
