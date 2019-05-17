$(function() {
  $("#login").validate({
    messages: {
      "username": {
        required: "Vui Lòng Nhập Tài Khoản"
      },
      "password": {
        required: "Vui Lòng Nhập Mật Khẩu"
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
        data.append(value.name, value.value);
      });

      var request = new XMLHttpRequest();
      request.open(method, action, false);
      request.send(data);
      $("#msg").html(request.response);
    }
  });
});
