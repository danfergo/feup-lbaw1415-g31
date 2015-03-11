<?php
include "parts/header.php";
?>

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <h1>Novo</h1>
        <div class="base-container upper"> 
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
                                <input type="email" class="form-control" id="inputEmail3" placeholder="">
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Base de licitação</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Comprar já</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Carateristicas </legend>
                </fieldset>

                <fieldset>
                    <legend>Galeria de fotografias </legend>
                </fieldset>

                <fieldset>
                    <legend>Descriçao </legend>
                    <form method="post">
                        <textarea class="editor"></textarea>
                    </form>
                </fieldset>


            </form>
        </div>
    </div>
</div>

<?php
include "parts/footer.php";
