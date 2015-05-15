<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 09:08:16
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/newauction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137348160553dab9724f5d5-11436221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f3a03be7549205ce471af3fd45eb17313c6c055' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/newauction.tpl',
      1 => 1430118491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137348160553dab9724f5d5-11436221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553dab972e9fb2_81245377',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553dab972e9fb2_81245377')) {function content_553dab972e9fb2_81245377($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">
            <form>
                <fieldset>
                    <legend>Informaçoes gerais </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Um titulo para o item a vender">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
                            <div class="col-sm-10">
                                <select class="selectpicker">
                                    <optgroup label="Imoveis">
                                        <option>Casa</option>
                                        <option>Apartamento</option>
                                    </optgroup>
                                    <optgroup label="Desporto">
                                        <option>Futebol</option>
                                        <option>Basquet</option>
                                        <option>Hoquei</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Base de licitação</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPassword3" placeholder="Valor base do item a ser leiloado" step="0.01">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Comprar já</label>
                            <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control" id="inputPassword3" placeholder="Defina um valor de venda do item (opcional)">
                            </div>
                        </div>

                    </div>
                </fieldset>
                <fieldset>
                    <legend>Carateristicas </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Nº quartos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Número de quartos que a casa possui">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Área</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPassword3" placeholder="Número em metros quadrados correspondente a area habitavel do edificio">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Galeria de fotografias </legend>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['name'] = 'xxx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['xxx']['total']);
?>
                    <div class="base-container upper photoprev" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/item-prev.jpg')">
                        <span class="glyphicon glyphicon-remove"></span></div>
                     <?php endfor; endif; ?>
                    <div style="clear:both;margin:5px;padding-top:10px;">
                        <input type="button" value="Adicionar fotografias" class="btn btn-primary    ">
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Descriçao </legend>
                    <form method="post">
                        <textarea class="editor"></textarea>
                    </form>
                </fieldset>

                <div style="text-align:right;padding:20px 0 5px">
                    <input type="button" value="Eliminar" class="btn btn-default">
                    <input type="button" value="Guardar" class="btn btn-default">
                    <input type="button" value="Guardar e pré-visualizar" class="btn btn-primary    ">
                    <input type="button" value="Publicar" class="btn btn-default">
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
