window.onload = function() {
  document.addEventListener("contextmenu", function(e) {
    e.preventDefault();
  }, false);
  document.addEventListener("keydown", function(e) {
    console.log(e);
    // "I" key
    if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
      disabledEvent(e);
    }
    // "J" key
    if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
      disabledEvent(e);
    }
    // "C" key
    if (e.ctrlKey && e.keyCode == 67) {
      disabledEvent(e);
    }
    // "S" key + macOS
    if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
      disabledEvent(e);
    }
    // "U" key
    if (e.ctrlKey && e.keyCode == 85) {
      disabledEvent(e);
    }
    // "F12" key
    if (e.keyCode == 123) {
      disabledEvent(e);
    }

    // Prev post
    if (e.keyCode == 37) {
      try {
        document.querySelector("[data-prev-post]").click();
      } catch (er) {}
    }
    // Next post
    if (e.keyCode == 39) {
      try {
        document.querySelector("[data-next-post]").click();
      } catch (er) {}
    }

    // Scroll top
    if (e.keyCode == 36) {
      try {
        document.querySelector(".scrollToTop").click();
        disabledEvent(e);
      } catch (er) {}
    }
    // Scroll top
    if (e.keyCode == 35) {
      try {
        document.querySelector(".scrollToBottom").click();
        disabledEvent(e);
      } catch (er) {}
    }
  }, false);

  function disabledEvent(e) {
    if (e.stopPropagation) {
      e.stopPropagation();
    } else if (window.event) {
      window.event.cancelBubble = true;
    }
    e.preventDefault();
    return false;
  }
};

function showNotification(colorName, text, placementFrom, placementAlign, animateEnter, animateExit) {
  if (colorName === null || colorName === '' || !colorName) {
    colorName = 'bg-' + $theme;
  }
  if (text === null || text === '' || !text) {
    text = 'Thông Báo';
  }
  if (placementFrom === null || placementFrom === '' || !placementFrom) {
    placementFrom = 'bottom';
  }
  if (placementAlign === null || placementAlign === '' || !placementAlign) {
    placementAlign = 'left';
  }
  if (animateEnter === null || animateEnter === '' || !animateEnter) {
    animateEnter = 'animated fadeInLeft';
  }
  if (animateExit === null || animateExit === '' || !animateExit) {
    animateExit = 'animated fadeOutLeft';
  }
  var allowDismiss = true;

  $.notify({
    message: text
  }, {
    type: colorName,
    allow_dismiss: allowDismiss,
    newest_on_top: true,
    timer: 1000,
    placement: {
      from: placementFrom,
      align: placementAlign
    },
    animate: {
      enter: animateEnter,
      exit: animateExit
    },
    template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
      '<button type="button" aria-hidden="true" class="close material-icons" data-notify="dismiss">close</button>' +
      '<span data-notify="icon"></span> ' +
      '<span data-notify="title">{1}</span> ' +
      '<span data-notify="message">{2}</span>' +
      '<div class="progress" data-notify="progressbar">' +
      '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
      '</div>' +
      '<a href="{3}" target="{4}" data-notify="url"></a>' +
      '</div>'
  });
}

function change_theme(theme) {
  $.ajax({
    url: '/action/theme',
    type: 'POST',
    dataType: 'text',
    data: {
      theme: theme
    },
    success: function() {}
  });
}

function update_sidebar_left() {
  $.ajax({
    url: '/action/sidebar-left',
    type: 'POST',
    dataType: 'text',
    data: {
      main: $("#leftsidebar").data("main"),
      sub: $("#leftsidebar").data("sub"),
    },
    success: function(res) {
      $("#leftsidebar .menu .list").html(res);
      $.AdminBSB.leftSideBar.activate();
      $.AdminBSB.input.activate();
      $.AdminBSB.select.activate();
    }
  });
}

function update_right_post(cat_id) {
  $.ajax({
    url: '/action/right-post',
    type: 'POST',
    dataType: 'json',
    data: {
      cat_id: cat_id
    },
    success: function(res) {
      console.log(res);
      $.each(res, function(key, val) {
        $('#' + key).html(val);
      });
    },
    error: function(error) {
      console.error(error);
    }
  });
}

function contactButton() {
  $.ajax({
    url: "/action/contact",
    method: "post",
    data: {},
    dataType: "json",
    success: function(res) {
      $.shareButtons("contact", {
        position: "right",
        buttons: res
      });
    },
    error: function(e) {
      console.error(e);
    }
  });
}

function checkTime(j) {
  if (j < 10) {
    j = "0" + j;
  }
  return j;
}

function startTime(target) {
  var today = new Date();
  var h = checkTime(today.getHours());
  var i = checkTime(today.getMinutes());
  var s = checkTime(today.getSeconds());
  var d = checkTime(today.getDate());
  var m = checkTime(today.getMonth() + 1);
  var y = today.getFullYear();

  $(target).html(y + "-" + m + "-" + d + " " + h + ":" + i + ":" + s);
  var t = setTimeout(function() {
    startTime(target);
  }, 500);
}

function fullScreen() {
  if (!isFullScreen()) {
    var el = document.documentElement;
    if (el.requestFullscreen) {
      el.requestFullscreen();
    } else if (el.msRequestFullscreen) {
      el.msRequestFullscreen();
    } else if (el.mozRequestFullScreen) {
      el.mozRequestFullScreen();
    } else if (el.webkitRequestFullscreen) {
      el.webkitRequestFullscreen();
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

function isFullScreen() {
  return (
    document.fullscreenElement ||
    document.mozFullScreenElement ||
    document.webkitFullscreenElement ||
    document.msFullscreenElement
  );
}
