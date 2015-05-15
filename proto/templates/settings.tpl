{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">
            <form>
                <fieldset>
                    <legend>Informaçoes de conta </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nome</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" value="Nome do Utilizador">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3"  value="email@account.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nova palavra-passe</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Palavra-passe de acesso à conta">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Reintroduza a nova palavra-passe</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Reintroduza a palavra-passe de acesso à conta">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Fotografia de perfil</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Defina uma nova fotografia para o seu perfil">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Escolher</button>
                                    </span>
                                </div><!-- /input-group -->
                                <br>
                                <div class="base-container upper photoprev" style="float:none;background-image:url('{$BASE_URL}images/avatar.jpg')"> </div>
                            </div><!-- /.col-lg-6 -->
                        </div>


                    </div>
                </fieldset>


                <div style="text-align:right;padding:20px 0 5px">
                    <div class="input-group" style="width:400px;float:right;">
                        <input type="password" class="form-control" placeholder="Palavra-passe atual" >
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Guardar definições</button>
                        </span>
                    </div><!-- /input-group -->

                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
