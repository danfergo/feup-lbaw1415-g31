<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 05:23:00
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122165381553dab941b5063-28349740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44997cd1b116cba53fbae750d2a968fe77e22764' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/profile.tpl',
      1 => 1430097120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122165381553dab941b5063-28349740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dab94284c30_96098089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dab94284c30_96098089')) {function content_553dab94284c30_96098089($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="base-container upper" style="margin-top:70px;position:relative;">
    <div class="base-container upper" style="position:absolute;top:-70px;left:40px;height:220px;width:220px;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/avatar.jpg" width="220" height="220" style="border-radius: 3px;">
    </div>

    <div class="info" style="margin-left:270px;min-height:190px;padding:20px 30px;">
        <button class="btn btn-default" style="float:right;margin-top:25px;">Enviar mensagem</button>
        <h2>Nome do Utilizador</h2>
        <br>

        <div class="buyer-rank" style="float:left;">
            <div style="font-size:16px;">
                <b> Comprador &nbsp;</b>
                <span class="stars">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </span>
                <div>
                    8 de 10 compras efetuadas com sucesso (80%)
                </div>
            </div>
        </div>


        <div class="seller-rank" style="float:right;text-align:right;">
            <div style="font-size:16px;">
                <b> Vendedor &nbsp;</b>
                <span class="stars">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </span>
                <div>
                    18 de 20 vendas efetuadas com sucesso (90%)
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-5">

        <h2>Últimas vendas efetuadas</h2>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['name'] = 'consumidor';
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php echo $_smarty_tpl->getSubTemplate ('notifications/item-list-rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php endfor; endif; ?>

        <div style="text-align:center;">
            <a href="#"> Ver mais vendas </a>
        </div>

        <h2>Últimas compras efetuadas</h2>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['name'] = 'consumidor';
$_smarty_tpl->tpl_vars['smarty']->value['section']['consumidor']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php echo $_smarty_tpl->getSubTemplate ('notifications/item-list-rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php endfor; endif; ?>

        <div style="text-align:center;">
            <a href="#"> Ver mais compras </a>
        </div>
    </div>

    <div class="col-xs-7">

        <h2>Leilões ativos</h2>
        <div class="row">

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
                <div class="col-xs-6" style="margin-bottom: 15px;">
                    <?php echo $_smarty_tpl->getSubTemplate ('notifications/item-tile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            <?php endfor; endif; ?>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
