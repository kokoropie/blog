$(function() {
  $("#settings_form").validate({
    messages: {
      "title": {
        required: "Vui Lòng Nhập Tiêu Đề"
      },
      "keywords": {
        required: "Vui Lòng Nhập Từ Khóa"
      },
      "description": {
        required: "Vui Lòng Nhập Mô Tả"
      }
    },
    highlight: function(input) {
      $(input).parents('.form-line').removeClass('success').addClass('error');
    },
    unhighlight: function(input) {
      $(input).parents('.form-line').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, input) {
      $(input).parents('.input-group').append(error);
    },
    submitHandler: function(form) {
      var action = form.action;
      var method = form.method;
      var data = new FormData();
      $.each(form, function(key, value) {
        if (value.type != "file") {
          data.append(value.name, value.value);
        } else {
          data.append(value.name, $(this).prop("files")[0]);
        }
      });

      try {
        var request = new XMLHttpRequest();
        request.open(method, action, false);
        request.send(data);
        var res = jQuery.parseJSON(request.response);
        if (res.success == "true") {
          $("title").html(res.title);
          if (res.src != undefined) {
            $.each(res.src, function(key, src) {
              $(form).find("#preview_" + src).attr("data-src", res);
            });
          }
        }
        swal("Thông Báo", res.msg, res.type);
      } catch (error) {
        console.log(error);
      }
    }
  });
});

function icon(input) {
  if (input.files && input.files[0]) {
    var preview = $(input).data("preview");
    var reader = new FileReader();
    reader.onload = function(e) {
      $(preview).attr("src", e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
