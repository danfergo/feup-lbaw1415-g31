<?php
include "parts/header.php";
?>
<div style="margin:0px auto; max-width:500px;padding:30px;" class="fluid-container base-container upper">
    <h1>Redefinir palavra-passe</h1>
    <p>Introduza a nova palavra-passe que deseja para a sua conta.</p>
    <div class="form-group">
        <input type="text" class="form-control" id="inputPassword3" value="email@account.com" disabled="disabled">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Introduza a nova palavra-passe">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="inputPassword3" placeholder="Reintroduza a nova palavra-passe">
    </div>

    <br>
    <a href="login.php"><button type="submit" class="btn btn-primary">Redefinir palavra-passe</button></a>
    <br>
</div>
<?php
include "parts/footer.php";
