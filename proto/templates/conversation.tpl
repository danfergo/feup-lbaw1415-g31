{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <div class="col-xs-2"> </div>
    <div class="col-xs-8">
        <div style="text-align:center;"> <a href="#"> Ver mensagens mais antigas </a></div>
        {foreach from=$conversation item=conversations}
            <div class="base-container upper" style="padding:7px;margin:15px 0;">
                {include file='notifications/msg.tpl'}
            </div>
        {/foreach}
        <form class="form-horizontal" action="{$BASE_URL}actions/callconversation.php" method="post" >
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">msg:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Escrever texto">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
        <div class="col-xs-2"> </div>
    </div>
    {include file='common/footer.tpl'}
