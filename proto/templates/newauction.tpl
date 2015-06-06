{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">
            <form>
                <fieldset>
                    <legend>Informaçoes gerais </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Um titulo para o item a vender" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Categoria</label>
                            <div class="col-sm-10">
                                <select name="category" class="selectpicker">
                                    {foreach from=$categories item=category}
                                        <optgroup label="{$category.title}">
                                            {foreach from=$category.sub_categories item=sub_category}
                                                <option value="{$category.category_id}">{$sub_category.title}</option>
                                            {/foreach}
                                        </optgroup>
                                    {/foreach}
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Base de licitação</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" min="0" placeholder="Valor base do item a ser leiloado" step="0.01">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Comprar já</label>
                            <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control" min="0" placeholder="Defina um valor de venda do item (opcional)">
                            </div>
                        </div>

                    </div>
                </fieldset>
                <fieldset>
                    <legend>Carateristicas </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nº quartos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Número de quartos que a casa possui">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Área</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Número em metros quadrados correspondente a area habitavel do edificio">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Galeria de fotografias </legend>




                    <input id="photos-input" name="photos[]" type="file" multiple=true class="file-loading">
                    <!-- <script type="text/javascrit"  src="{$BASE_URL}/js/photos-upload.js"> </script>-->

                    <script>
                        {literal}
                        $("#photos-input").fileinput({
                            uploadUrl: "/leiloes/proto/api/auction-prev.php",
                            uploadAsync: true,
                            minFileCount: 0,
                            maxFileCount: 5,
                            overwriteInitial: false,
                           /** initialPreview: [
                                "<img src=\'http://placeimg.com/200/150/nature/1\'>",
                                "<img src=\'http://placeimg.com/200/150/nature/2\'>",
                            ],
                            initialPreviewConfig: [
                                {caption: "Food-1.jpg", url: "/leiloes/proto/api/auction-prev.php", key: 1},
                                {caption: "Food-2.jpg", url: "/leiloes/proto/api/auction-prev.php", key: 2},
                            ]**/
                        });
                        $("#photos-input").on("filepredelete", function() {
                            var abort = true;
                            if (confirm("Are you sure you want to delete this image?")) {
                                abort = false;
                            }
                            return abort;
                        });

                        {/literal}
                    </script>
<style>
    .fileinput-remove{
        display:none;
    }

</style>

                   <!-- {SECTION name=xxx loop=5}
                    <div class="base-container upper photoprev" style="background-image:url('{$BASE_URL}images/item-prev.jpg')">
                        <span class="glyphicon glyphicon-remove"></span></div>
                     {/SECTION}
                    <div style="clear:both;margin:5px;padding-top:10px;">
                        <input type="button" value="Adicionar fotografias" class="btn btn-primary    ">
                    </div>-->

                <fieldset>
                    <legend>Descriçao </legend>
                    <form method="post">
                        <textarea class="editor" name="description"></textarea>
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
{include file='common/footer.tpl'}
