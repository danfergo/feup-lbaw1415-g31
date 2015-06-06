{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">
            <form action="{$BASE_URL}actions/settings.php" method="post">
                <fieldset>
                    <legend>Informaçoes de conta </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nome</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" value={$user.name} name ="namenew">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3"  value={$user.email} name="emailnew">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Nova palavra-passe</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Palavra-passe de acesso à conta" name="passwordnew">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Reintroduza a nova palavra-passe</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="ReinputPassword" data-match="#inputPassword" data-match-error="Pass não é igual" placeholder="Reintroduza a palavra-passe de acesso à conta" >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Fotografia de perfil</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Defina uma nova fotografia para o seu perfil">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" name="photo" >Escolher</button>
                                    </span>
                                </div><!-- /input-group -->
                               <!-- <input type="file" name="photo">-->
                                <br>
                                <div class="base-container upper photoprev" style="float:none;background-image:url('{$BASE_URL}images/avatar.jpg')"> </div>
                            </div><!-- /.col-lg-6 -->
                        </div>


                    </div>
                </fieldset>


                <div style="text-align:right;padding:20px 0 5px">
                    <div class="input-group" style="width:400px;float:right;">
                        <input type="password" class="form-control" placeholder="Palavra-passe atual" name="password" required>
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary" value="Guardar definições">
                        </span>
                    </div><!-- /input-group -->

                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
