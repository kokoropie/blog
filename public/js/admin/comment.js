$(function() {
  $('[data-check]').each(function(key, value) {
    $(this).change(function() {
      change_checkbox($(this).attr("data-check"), $(this)[key].checked);
    });
  });

  function change_checkbox(key, ch) {
    var tmp = [].slice.call(document.querySelectorAll(key));
    tmp.forEach(function(key2) {
      key2.checked = ch;
    });
  }
});
