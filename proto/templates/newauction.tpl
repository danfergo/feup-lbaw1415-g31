{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <div class="col-xs-12">
        <div class="base-container upper" style="padding:20px;">
            {include file='common/system_messages.tpl'}

            <form action="{$BASE_URL}actions/auction/new.php" method="post">
                <fieldset>
                    <legend>Informaçoes gerais </legend>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10"item_title>
                                <input {if isset($AUCTION.item_title)}value="{$AUCTION.item_title}"{/if}
                                       type="text" class="form-control" name="item_title"
                                       placeholder="Um titulo para o item a vender" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Categoria</label>
                            <div class="col-sm-10">
                                <select
                                        id="auction-category-selector" name="category_id"
                                        class="form-control selectpicker"  title="Nenhuma Selecionada" requiredd>
                                    <option data-hidden="true"></option>
                                    {foreach from=$categories item=category}
                                        <optgroup label="{$category.title}">
                                            {foreach from=$category.sub_categories item=sub_category}
                                                <option {if isset($AUCTION.category_id) AND $AUCTION.category_id eq $sub_category.category_id} selected {/if}
                                                        value="{$sub_category.category_id}">{$sub_category.title}</option>
                                            {/foreach}
                                        </optgroup>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                        <script type="text/javascript">$('.selectpicker').selectpicker(); // works faster</script>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Base de licitação</label>
                            <div class="col-sm-10">
                                <input {if isset($AUCTION.auction_base)}value="{$AUCTION.auction_base}"{/if}
                                        type="number" class="form-control" name="auction_base" min="0" placeholder="Valor base do item a ser leiloado" step="0.01" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Comprar já</label>
                            <div class="col-sm-10">
                                <input {if isset($AUCTION.buyout)}value="{$AUCTION.buyout}"{/if}
                                        type="number" step="0.01" class="form-control" name="buyout" min="0" placeholder="Defina um valor de venda do item (opcional)">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Portes</label>
                            <div class="col-sm-10">
                                <input {if isset($AUCTION.shipping_cost)}value="{$AUCTION.shipping_cost}"{/if}
                                        type="number" step="0.01" class="form-control" name="shipping_cost" min="0" placeholder="Custos de envio (opcional)">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tempo de fim</label>
                            <div class="col-sm-10">
                                <input {if isset($AUCTION.end_time)}value="{$AUCTION.end_time}"{/if}
                                        size="16" type="datetime" name="end_time" readonly class="form-control form_datetime" required>
                            </div>
                        </div>



                        <script type="text/javascript">
                            $(".form_datetime").datetimepicker({
                                format: "yyyy-mm-dd hh:ii",
                                language:'pt'
                            });
                        </script>

                    </div>
                </fieldset>
                <fieldset id="characteristics-fieldset" style="display:none;">
                    <legend>Carateristicas </legend>
                    <div class="form-horizontal" id="characteristics-inputs-section">
                    </div>
                </fieldset>
                <div style="display:none;" id="characteristic-form-group-template">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10 input-area checkbox radio">
                        </div>
                    </div>
                </div>


                <fieldset>
                    <legend>Galeria de fotografias </legend>

                    <input id="photos-input" name="photo" type="file" multiple="true" class="file-loading">

                </fieldset>

                    <script type="text/javascript" src="{$BASE_URL}/js/auction.php"></script>
                <fieldset>
                    <legend>Descriçao </legend>
                    <form method="post">
                        <textarea class="editor" name="item_description">{if isset($AUCTION.item_description)}{$AUCTION.item_description}{/if}</textarea>
                    </form>

                <div style="text-align:right;padding:20px 0 5px">
                    <!--<input type="submit" name="delete" value="Eliminar" class="btn btn-default"> -->
                    <input type="submit" name="save" value="Guardar" class="btn btn-default">
                    <input type="submit" name="save_and_preview" value="Guardar e pré-visualizar" class="btn btn-primary    ">
                    <input type="submit" name="publish" value="Publicar" class="btn btn-default">
                </div>
                </fieldset>

            </form>
        </div>
    </div>
</div>
{include file='common/footer.tpl'}
