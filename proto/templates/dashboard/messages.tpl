{include file='common/header.tpl'}
{include file='dashboard/sidebar.tpl'}

<div class="col-sm-10">
    {foreach from=$conversations item=conversation}
        <div class="col-xs-7" style="margin-bottom: 15px;">
            {include file='notifications/item-conversation.tpl'}
        </div>
    {/foreach}
</div>
{include file='common/footer.tpl'}
