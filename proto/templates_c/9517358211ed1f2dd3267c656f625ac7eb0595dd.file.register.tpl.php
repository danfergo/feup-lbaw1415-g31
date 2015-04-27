<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 09:05:38
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/account/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:614836242553da20c850ea5-49402058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9517358211ed1f2dd3267c656f625ac7eb0595dd' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/account/register.tpl',
      1 => 1430112664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '614836242553da20c850ea5-49402058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da20c8f7054_22800430',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da20c8f7054_22800430')) {function content_553da20c8f7054_22800430($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">

            <?php echo $_smarty_tpl->getSubTemplate ('common/system_messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/register.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Informaçoes de conta </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nome</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Primeiro e último nome ou nome completo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail de acesso à conta"  name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Palavra-passe</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputEmail3" placeholder="Palavra-passe de acesso à conta" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Reintroduza a palavra-passe</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputEmail3" placeholder="Reintroduza a palavra-passe de acesso à conta">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Fotografia de perfil</label>
                            <div class="col-sm-9">
                                <!--<div class="input-group">
                                    <input type="text" class="form-control" placeholder="Adicione uma fotografia para o seu perfil">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Escolher fotografia</button>
                                    </span>
                                </div>--><!-- /input-group -->
                                <input type="file" name="photo">
                            </div><!-- /.col-lg-6 -->
                        </div>



                    </div>
                </fieldset>

                <fieldset>
                    <legend>Termos e Condições </legend>
                    <div class="form-control" style="height:250px;overflow:auto;">
                        <?php echo $_smarty_tpl->getSubTemplate ('texts/termosecondicoes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </div>
                    <label>
                        <input type="checkbox"> Li e concordo com os termos e condições mencionados a cima.
                    </label>
                </fieldset>

                <div style="text-align:right;padding:20px 0 5px">
                    <input type="submit" value="Criar conta" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
