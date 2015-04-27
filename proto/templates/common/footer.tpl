<div class="clearfix"></div>

{if $ISADMIN}
<div style="text-align:center;padding-top:40px;">
  <a href="index.php?loggedin&adminmode">
    <button type="button" class="btn btn-sm btn-default" >
      <span class="glyphicon glyphicon-wrench"> </span> Ativar modo de administraçao
    </button>
  </a>
</div>

{elseif $ADMINMODE}
<div style="text-align:center;padding-top:40px;">
  <a href="index.php?loggedin&admin">
    <button type="button" class="btn btn-sm btn-default" >
      <span class="glyphicon glyphicon-wrench"> </span> Desligar modo de administraçao
    </button>
  </a>
</div>
{/if}

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
</html>