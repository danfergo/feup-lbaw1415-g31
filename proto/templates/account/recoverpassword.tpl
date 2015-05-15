{include file='common/header.tpl'}

<div style="margin:0px auto; max-width:500px;padding:30px;" class="fluid-container base-container upper">

    {include file='common/system_messages.tpl'}
    <form action="{$BASE_URL}actions/recoverpassword.php" method="post">
        <h1>Redefinir palavra-passe</h1>
        <p>Introduza o endereço de e-mail da sua conta.</p>

        <input type="email"  name="email" class="form-control" placeholder="Endereço de e-mail da conta">
        <br>
        <input type="submit" class="btn btn-primary" value="Redefinir palavra-passe">
    </form>

        <br>
</div>
{include file='common/footer.tpl'}
