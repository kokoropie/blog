$(function() {
  $("#edit_category").validate({
    messages: {
      "title": {
        required: "Vui Lòng Nhập Tiêu Đề"
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
        data.append(value.name, value.value);
      });

      try {
        var request = new XMLHttpRequest();
        request.open(method, action, false);
        request.send(data);
        var res = jQuery.parseJSON(request.response);
        if (res.success == true) {
          $('#by_id').html(res.cat);
          update_sidebar_left();
        }
        swal("Thông Báo", res.msg, res.type);
      } catch (error) {
        console.log(error);
      }
    }
  });
});
