(function($) {
  'use strict';

  // Main function
  $.shareButtons = function(target, settings) {
    if (settings.buttons.length === 0) {
      $("#" + target).remove();
    } else {
      // Define the container for the buttons
      var oContainer = $("#" + target);

      // Check if the container is already on the page
      if (oContainer.length === 0) {

        // Insert the container element
        $('body').append('<div id="' + target + '" class="contact-buttons-bar">');

        // Get the just inserted element
        oContainer = $("#" + target);

        // Add class for position
        oContainer.addClass(settings.position);
      }
      // Empty container
      oContainer.empty();

      // Add show/hide button
      var sShowHideBtn = '<button class="contact-button-link show-hide-contact-bar"><span class="fas fa-chevron-' + settings.position + '"></span></button>';
      oContainer.append(sShowHideBtn);

      var i;
      for (i in settings.buttons) {
        var bs = settings.buttons[i],
          sLink = bs.link;

        // Change the link for phone and email when needed
        if (bs.class === 'phone') {
          sLink = 'tel:' + bs.link;
        } else if (bs.class === 'email') {
          sLink = 'mailto:' + bs.link;
        }

        switch (bs.class) {
          case 'facebook':
            bs.icon = "fab fa-facebook-f";
            break;
          case 'linkedin':
            bs.icon = "fab fa-linkedin-in";
            break;
          case 'twitter':
            bs.icon = "fab fa-twitter";
            break;
          case 'github':
            bs.icon = "fab fa-github";
            break;
          case 'pinterest':
            bs.icon = "fab fa-pinterest-p";
            break;
          case 'phone':
            bs.icon = "fas fa-phone";
            break;
          case 'email':
            bs.icon = "far fa-envelope";
            break;
          case 'reddit':
            bs.icon = "fab fa-reddit";
            break;
        }

        // Insert the links
        var sIcon = '<span class="' + bs.icon + '"></span>',
          sButton = '<a href="' + sLink +
          '" class="contact-button-link cb-ancor ' + bs.class + '" ' +
          '>' + sIcon + '</a>';
        oContainer.append(sButton);
      }

      // Make the buttons visible
      setTimeout(function() {
        if (settings.position == "right")
          oContainer.animate({
            right: 0
          });
        else
          oContainer.animate({
            left: 0
          });
        oContainer.css("top", ((window.innerHeight - oContainer.height()) / 2) + "px");
      }, 200);
    }
    oContainer.data('top', oContainer.css('top'));

    // Show/hide buttons
    $('.show-hide-contact-bar').on('click', function(e) {
      var self = this;
      e.preventDefault();
      e.stopImmediatePropagation();
      $(self).find('span').toggleClass('fa-chevron-right fa-chevron-left');
      $(self).parent('.contact-buttons-bar').find('.cb-ancor').toggleClass('cb-hidden');
    });
  };
}(jQuery));
