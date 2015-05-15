<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:40:55
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1437570159553da1b73fbbd9-99653709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca962bbe0c4c787686851309df5fe683c2f52268' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/common/footer.tpl',
      1 => 1430067393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1437570159553da1b73fbbd9-99653709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ISADMIN' => 0,
    'ADMINMODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da1b741c3f4_00382760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da1b741c3f4_00382760')) {function content_553da1b741c3f4_00382760($_smarty_tpl) {?><div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['ISADMIN']->value) {?>
<div style="text-align:center;padding-top:40px;">
  <a href="index.php?loggedin&adminmode">
    <button type="button" class="btn btn-sm btn-default" >
      <span class="glyphicon glyphicon-wrench"> </span> Ativar modo de administraçao
    </button>
  </a>
</div>

<?php } elseif ($_smarty_tpl->tpl_vars['ADMINMODE']->value) {?>
<div style="text-align:center;padding-top:40px;">
  <a href="index.php?loggedin&admin">
    <button type="button" class="btn btn-sm btn-default" >
      <span class="glyphicon glyphicon-wrench"> </span> Desligar modo de administraçao
    </button>
  </a>
</div>
<?php }?>

<footer style="padding:30px 0;">
  <p style="text-align:right;margin:15px;margin-bottom:0;">design and developed by: D-TEAM @ LBAW/MIEIC-FEUP 2015</p>

</footer>
</div>



<script>
  /**
   var $notificationHeader = $("#notification-hidder");
   var $offset = $notificationHeader.height();


   $(window).bind('mousewheel DOMMouseScroll', function (event) {
     var delta = typeof event.originalEvent.wheelDelta !== 'undefined' ? event.originalEvent.wheelDelta : -1 * event.originalEvent.detail;
     if (delta > 0) {
     // scroll up
     }
     else {
     // scroll down
     
     }
     $notificationHeader.height($notificationHeader.height() + 2 * delta);
     
     event.preventDefault();
     event.stopPropagation();
     }); // @ based on the script at http://stackoverflow.com/a/22518932
   **/
  /**
   var $notificationHeader = $("#notification-hidder");
   var offset = $notificationHeader.height();
   var currentHeight = offset;
   function animateHeader() {
     var newHeight = (offset - window.pageYOffset - 150);
     if (newHeight !== currentHeight && newHeight >= 100 && window.pageYOffset < 150) {
     $notificationHeader.height(newHeight);
     currentHeight = newHeight;
     } 
     
     }

   setInterval(function () {
     animateHeader();
     }, 20); **/

  // demo porpouse script
  var urlParts = window.location.href.split("?");
  if (urlParts.length === 2) {
    $("a").each(function (i) {
      var href = $(this).attr("href");
      if (href.split("?").length === 1 && href.substring(0, 10) !== "javascript") {
        $(this).attr("href", href + "?" + urlParts[1]);
      }
    });
  }
</script>
</body>
</html><?php }} ?>
