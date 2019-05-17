(function($) {
  'use strict';
  $.fn.nProgress = function(target) {
    var _ = $(this);
    var progress = $("#" + target);
    if (progress.length == 0) {
      _.append('<div id="' + target + '">');
      progress = $("#" + target);
    }
    progress.css("pointer-events", "none");
    progress.append('<div id="bar">');

    var bar = progress.find("#bar");
    bar.attr("style", "background: rgba(255, 255, 255, 0.79); box-shadow: 0 0 10px #333, 0 0 5px #333; position: fixed;z-index: 1000;top: 0;left: 0;width: 0;height: 5px;");

    var winScroll = document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    $(document).on("scroll", function() {
      winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      scrolled = (winScroll / height) * 100;
      bar.css("width", scrolled + "%");
    });
  }
})(jQuery);
