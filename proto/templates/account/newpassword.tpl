{include file='common/header.tpl'}

<div style="margin:0px auto; max-width:500px;padding:30px;" class="fluid-container base-container upper">
    {include file='common/system_messages.tpl'}

    <h1>Redefinir palavra-passe</h1>
    <p>Introduza a nova palavra-passe que deseja para a sua conta.</p>

    <form action="{$BASE_URL}actions/newpassword.php" method="post">
        <div class="form-group">
        <input type="hidden" name="hash" value="{$HASH}">
        <input type="text" class="form-control" id="inputPassword3" value="{$EMAIL}" disabled="disabled">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Introduza a nova palavra-passe">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Reintroduza a nova palavra-passe">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Redefinir palavra-passe">
        <br>
    </form>

</div>
{include file='common/footer.tpl'}
