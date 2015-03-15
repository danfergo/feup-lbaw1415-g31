<div class="clearfix"></div>

<footer style="padding:40px 0;">
    <p style="float:right;">design and developed by: D-TEAM @ LBAW/MIEIC-FEUP 2015</p>

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
            if ($(this).attr("href").split("?") === 1) {
                $(this).attr("href", $(this).attr("href") + "?" + urlParts[1]);
            }
        });
    }
</script>
</body>
</html>