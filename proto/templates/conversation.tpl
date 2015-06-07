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
        <div class="col-xs-2"> </div>
    </div>
    {include file='common/footer.tpl'}
