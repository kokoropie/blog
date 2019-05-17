$(function() {
  $("#form_comment").validate({
    messages: {
      "name": {
        required: "Vui Lòng Nhập Tên"
      },
      "comment": {
        required: "Vui Lòng Nhập Bình Luận"
      },
      "email": {
        email: "Vui Lòng Nhập Đúng Định Dạng Email"
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
        data.append(value.name, $(value).val());
      });

      try {
        var request = new XMLHttpRequest();
        request.open(method, action, false);
        request.send(data);
        var res = jQuery.parseJSON(request.response);

        if (res.success == "true") {
          $(form).find("[name=comment]").val('');
        }
        swal("Thông Báo", res.msg, res.type);
      } catch (error) {
        console.log(error);
      }
    }
  });
});
