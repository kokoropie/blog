$(function() {
  CKEDITOR.replace('content');
  CKEDITOR.config.height = 300;

  $("#edit_post").validate({
    messages: {
      "title": {
        required: "Vui Lòng Nhập Tiêu Đề",
        maxlength: $.validator.format("Tiêu Đề Tối Đa {0} Ký Tự")
      }
    },
    highlight: function(input) {
      $(input).parents('.form-line').removeClass('success').addClass('error');
    },
    unhighlight: function(input) {
      $(input).parents('.form-line').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, input) {
      $(input).parents('.form-group').append(error);
    },
    submitHandler: function(form) {
      var action = form.action;
      var method = form.method;
      var data = new FormData();
      $.each(form, function(key, value) {
        if ($(value).data("ckeditor")) {
          data.append(value.name, CKEDITOR.instances[$(value).attr("id")].getData());
        } else if (value.type == "file") {
          data.append(value.name, $(value).prop("files")[0]);
        } else if (value.type == "checkbox") {
          if (value.checked) data.append(value.name, value.value);
        } else {
          data.append(value.name, $(value).val());
        }
      });

      try {
        var request = new XMLHttpRequest();
        request.open(method, action, false);
        request.send(data);
        var res = jQuery.parseJSON(request.response);
        if (res.success == true) {
          update_sidebar_left();
        }
        swal("Thông Báo", res.msg, res.type);
      } catch (error) {
        console.log(error);
      }
    }
  });
});
