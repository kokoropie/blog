$(function() {
  $("#admin_form").validate({
    messages: {
      "username": {
        required: "Vui Lòng Nhập Tài Khoản"
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
        swal("Thông Báo", res.msg, res.type);
      } catch (error) {
        console.error(error);
      }
    }
  });

  $("#contact_form").validate({
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
        data.append(value.name, $(value).val());
      });

      try {
        var request = new XMLHttpRequest();
        request.open(method, action, false);
        request.send(data);
        var res = jQuery.parseJSON(request.response);
        swal("Thông Báo", res.msg, res.type);
        contactButton();
      } catch (error) {
        console.error(error);
      }
    }
  });
});
