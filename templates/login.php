<?php
include "parts/header.php";
?>
<div style="margin:0px auto; max-width:350px;padding:30px;" class="fluid-container base-container upper">
    <h1>Login</h1>
    <form>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Palavra-passe">
        </div>


        <button type="submit" class="btn btn-primary" style="width:100%;">Iniciar sessão</button>
        <br>
        <br>

        <a href="#">Recuperar palavra-passe</a>

    </form>
</div>
<br>
<br>
<div style="text-align:center;">
    <a href="#">Criar uma conta </a>
</div>
<?php
include "parts/footer.php";
