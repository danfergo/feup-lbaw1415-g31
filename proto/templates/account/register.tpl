
{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">

            {include file='common/system_messages.tpl'}

            <form action="{$BASE_URL}actions/register.php" method="post" enctype="multipart/form-data">
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
                        {include file='texts/termosecondicoes.tpl'}
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
{include file='common/footer.tpl'}
