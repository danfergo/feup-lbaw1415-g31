<?php
include "parts/header.php";
?>

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;"> 
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
                                <select class="selectpicker">
                                    <optgroup label="Imoveis">
                                        <option>Casa</option>
                                        <option>Apartamento</option>
                                    </optgroup>
                                    <optgroup label="Desporto">  
                                        <option>Futebol</option>
                                        <option>Basquet</option>
                                        <option>Hoquei</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Base de licitação</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPassword3" placeholder="Valor base do item a ser leiloado" step="0.01">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Comprar já</label>
                            <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control" id="inputPassword3" placeholder="Defina um valor de venda do item (opcional)">
                            </div>
                        </div>

                    </div>
                </fieldset>
                <fieldset>
                    <legend>Carateristicas </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Nº quartos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Número de quartos que a casa possui">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Área</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputPassword3" placeholder="Número em metros quadrados correspondente a area habitavel do edificio">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Galeria de fotografias </legend>
                    <div class="base-container upper photoprev" style="background-image:url('img/item-prev.jpg')">
                        <span class="glyphicon glyphicon-remove"></span></div>
                    <div class="base-container upper photoprev" style="background-image:url('img/item-prev.jpg')">
                        <span class="glyphicon glyphicon-remove"></span></div>
                    <div class="base-container upper photoprev" style="background-image:url('img/item-prev.jpg')">
                        <span class="glyphicon glyphicon-remove"></span></div>
                    <div class="base-container upper photoprev" style="background-image:url('img/item-prev.jpg')">
                        <span class="glyphicon glyphicon-remove"></span></div>

                    <div style="clear:both;margin:5px;padding-top:10px;">
                        <input type="button" value="Adicionar fotografias" class="btn btn-primary    ">
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Descriçao </legend>
                    <form method="post">
                        <textarea class="editor"></textarea>
                    </form>
                </fieldset>

                <div style="text-align:right;padding:20px 0 5px">
                    <input type="button" value="Eliminar" class="btn btn-default">
                    <input type="button" value="Guardar" class="btn btn-default">
                    <input type="button" value="Guardar e pré-visualizar" class="btn btn-primary    ">
                    <input type="button" value="Publicar" class="btn btn-default">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "parts/footer.php";
