{include file='common/header.tpl'}

<div style="margin:0px auto; max-width:350px;padding:30px;" class="fluid-container base-container upper">

    {include file='common/system_messages.tpl'}

    <h1>Login</h1>
    <form action="{$BASE_URL}actions/login.php" method="post">
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Palavra-passe">
        </div>


        <input type="submit" class="btn btn-primary" value="Iniciar sessão" style="width:100%;">
        <br>
        <br>
       <!-- <label style="font-weight: normal;">
            <input type="checkbox" name="remember_me"> Lembrar-me
        </label> -->
        <br>
        <a href="recoverpassword.php">Recuperar palavra-passe</a>

    </form>
</div>
<br>
<br>
<div style="text-align:center;">
    <a href="register.php">Criar uma conta </a>
</div>

{include file='common/footer.tpl'}

