$(function() {
  var $hash = location.hash;

  if ($hash) {
    try {
      $('html,body').animate({
        scrollTop: $($hash).offset().top - $('.navbar').innerHeight() - 50
      }, 1500);
    } catch (e) {}
  }

  $('a[data-hash]').each(function() {
    $(this).attr("data-hash", $(this).attr("href")).attr("href", "javascript:void(0)");
  });

  $('a[data-hash]').on("click", function() {
    $('html,body').animate({
      scrollTop: $($(this).data("hash")).offset().top - $('.navbar').innerHeight() - 50
    }, 1500);
    return false;
  });

  $('[gallery]').find("img:not([thumbnail])").each(function(key, val) {
    var href = this.src;
    var sub = this.alt ? this.alt : '';
    $(this).addClass("img-responsive").removeAttr("style");
    if ($(this).parent("a").length > 0) {
      $(this).parent("a").attr("data-sub-html", sub).attr("id", "gallery_image_" + key).attr("data-gallery", "data-gallery");
    } else {
      $('<a href="' + href + '" data-sub-html="' + sub + '" id="gallery_image_' + key + '"></a>').replaceAll($(this));
      $("a#gallery_image_" + key).attr("data-gallery", "data-gallery").html(this);
    }
    var $a = $("a#gallery_image_" + key);
    if ($a.parent(".youtube-embed-wrapper").length > 0) {
      $a.replaceAll($a.parent(".youtube-embed-wrapper"));
    }
  });

  var $gallery = $('[gallery]');
  $gallery.lightGallery({
    selector: 'a[data-gallery]:not([thumbnail])',
    loop: false,
    slideEndAnimatoin: false,
    hideControlOnEnd: true,
    getCaptionFromTitleOrAlt: false,
    download: false,
    enableDrag: false,
    enableSwipe: false,
    hash: false,
    share: false
  });

  $("[data-tab]").find('[role=tabpanel]').each(function(key, val) {
    if (key == 0) $(this).addClass("active in");
  });

  startTime("#timer");

  $('[loadMore]').hide().slice(0, 5).show();
  $('#loadMore').on('click', function(e) {
    var self = this;
    var html = $(self).html();
    $(self).toggleAttr("disabled").html("Đang Tải...");
    var target = $(self).data("target");
    setTimeout(function() {
      e.preventDefault();
      $(target + ":hidden").slice(0, 5).slideDown();
      if ($(target + ":hidden").length == 0) {
        $(self).fadeOut('slow');
      } else if ($(self).is(":hidden") && $(target + ":hidden").length > 1) {
        $(self).fadeIn('slow');
      }
      $('html,body').animate({
        scrollTop: $(self).offset().top - $('.navbar').innerHeight() - 20
      }, 1500);
      $(self).toggleAttr("disabled").html(html);
    }, 1000);
  });

  //Masked Input
  $('[data-masked-input]').each(function() {
    //Date
    $(this).find('[data-mask-date]').inputmask('dd/mm/yyyy', {
      placeholder: '__/__/____'
    });
    //Time
    $(this).find('[data-mask-time12]').inputmask('hh:mm t', {
      placeholder: '__:__ _m',
      alias: 'time12',
      hourFormat: '12'
    });
    $(this).find('[data-mask-time24]').inputmask('hh:mm', {
      placeholder: '__:__ _m',
      alias: 'time24',
      hourFormat: '24'
    });
    //Date Time
    $(this).find('[data-mask-datetime]').inputmask('d/m/y h:s', {
      placeholder: '__/__/____ __:__',
      alias: "datetime",
      hourFormat: '24'
    });
    //Phone Number
    $(this).find('[data-mask-phone]').inputmask('+99 999 999 999', {
      placeholder: '+__ ___ ___ ___'
    });
    //Dollar Money
    $(this).find('[data-mask-money-dollar]').inputmask('99,99 $', {
      placeholder: '__,__ $'
    });
    //Euro Money
    $(this).find('[data-mask-money-euro]').inputmask('99,99 €', {
      placeholder: '__,__ €'
    });
    //VND Money
    $(this).find('[data-mask-money-vnd]').inputmask('999 999 999 VND', {
      placeholder: '___ ___ ___ VND'
    });
    //IP Address
    $(this).find('[data-mask-ip]').inputmask('999.999.999.999', {
      placeholder: '___.___.___.___'
    });
    //Credit Card
    $(this).find('[data-mask-credit-card]').inputmask('9999 9999 9999 9999', {
      placeholder: '____ ____ ____ ____'
    });
    //Email
    $(this).find('[data-mask-email]').inputmask({
      alias: "email"
    });
    //Serial Key
    $(this).find('[data-mask-key]').inputmask('****-****-****-****', {
      placeholder: '____-____-____-____'
    });
  });

  $("[data-table]").each(function(key, val) {
    $(this).DataTable({
      bSort: false,
      responsive: true,
      searching: false,
      lengthChange: false,
      "language": {
        "emptyTable": "Không Có Dữ Liệu",
        "info": "Trang _PAGE_/_PAGES_",
        "infoEmpty": "",
        paginate: {
          first: "<<",
          previous: "<",
          next: ">",
          last: ">>"
        },
        aria: {
          paginate: {
            first: "First",
            previous: "Previous",
            next: "Next",
            last: "Last"
          }
        }
      }
    });
  });

  $('.js-modal-btn').on('click', function() {
    var color = $theme;
    $($(this).data('modal') + ' .modal-content').removeAttr('class').addClass('modal-content modal-col-' + color);
    $($(this).data('modal')).modal('show');
  });

  $('[data-toggle="tooltip"]').tooltip({
    container: 'body'
  });

  autosize($('textarea.auto-growth'));

  $('.datetimepicker').bootstrapMaterialDatePicker({
    format: 'dddd DD MMMM YYYY - HH:mm',
    clearButton: true,
    weekStart: 1
  });

  $('.datepicker').bootstrapMaterialDatePicker({
    format: 'dddd DD MMMM YYYY',
    clearButton: true,
    weekStart: 1,
    time: false
  });

  $('.timepicker').bootstrapMaterialDatePicker({
    format: 'HH:mm',
    clearButton: true,
    date: false
  });

  $('#bs_datepicker_container input').datepicker({
    autoclose: true,
    container: '#bs_datepicker_container'
  });

  $('#bs_datepicker_component_container').datepicker({
    autoclose: true,
    container: '#bs_datepicker_component_container'
  });

  $('#bs_datepicker_range_container').datepicker({
    autoclose: true,
    container: '#bs_datepicker_range_container'
  });

  $('[type=reset]').on("click", function() {
    var form = $(this).parents("form");
    $.each(form.find('[data-src]'), function() {
      $(this).attr("src", $(this).data('src'));
    });
    $.each(form.find('[data-ckeditor]'), function() {
      CKEDITOR.instances[$(this).attr("id")].setData('');
    });
  });

  $('[data-like]').on("click", function() {
    var self = this;
    $.ajax({
      url: '/action/like-post',
      type: 'POST',
      dataType: 'html',
      data: {
        post_id: $(self).data("like")
      },
      success: function(res) {
        $('[data-like="' + $(self).data("like") + '"]').toggleClass("col-" + $theme).html(res);
        update_right_post($(self).data("update"));
      }
    });
  });

  $('body').on("load", function() {
    $(".tag").each(function() {
      $(this).addClass("bg-" + $theme);
    });
  });

  $('.scrollToTop').hide();
  $(window).scroll(function() {
    if ($(this).scrollTop() > 10) {
      $('.scrollToTop').fadeIn(300);
    } else {
      $('.scrollToTop').fadeOut(300);
    }
  });
  $('.scrollToTop').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
  });

  if ($(window).scrollTop() < ($(document).height() - $('.navbar').innerHeight() - $(window).height())) {
    $('.scrollToBottom').show();
  } else {
    $('.scrollToBottom').hide();
  }
  $(window).scroll(function() {
    if ($(this).scrollTop() < ($(document).height() - $('.navbar').innerHeight() - $(window).height())) {
      $('.scrollToBottom').fadeIn(300);
    } else {
      $('.scrollToBottom').fadeOut(300);
    }
  });
  $('.scrollToBottom').click(function() {
    $('html, body').animate({
      scrollTop: $(document).height()
    }, 1000);
  });

  if ($.fn.countTo) {
    $('[count-to]').countTo();
  }

  $("head").append('<link href="/public/plugins/highlight/styles/' + $hlTheme + '.css" rel="stylesheet">');
  hljs.initHighlightingOnLoad();
  hljs.initLineNumbersOnLoad();
  hljs.initCopyButtonOnLoad();

  $(document).ready(function() {
    $('pre code').each(function(i, block) {
      hljs.lineNumbersBlock(block);
    });
    $('code.hljs').each(function(i, block) {
      hljs.addCopyButton(block);
    });
  });

  $.each($(".ace-on"), function() {
    var id = $(this).attr("id");
    var editor = ace.edit(id);
    editor.setTheme("ace/theme/monokai");
  });

  $(document).ready(function($) {
    $('body').nProgress("progress");
  });

  if (!localStorage.getItem('first_time')) {
    //swal($.AdminBSB.browser.getBrowser() + " Thông Báo", "Chào Mừng Bạn Đến Với Website Của Chúng Tôi!", "success");
    showNotification(null, "Chào Mừng " + $.AdminBSB.browser.getBrowser() + " Đến Với Website Của Chúng Tôi!");
    localStorage.setItem('first_time', $.AdminBSB.browser.getClassName());
  }

  contactButton();
});
