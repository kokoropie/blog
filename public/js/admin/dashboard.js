$(function() {
  $.ajaxSetup({
    cache: false
  });

  $.ajax({
    url: "/action/dashboard.admin",
    type: "post",
    dataType: "json",
    data: {},
    success: function(result) {
      $.each(result, function(key, val) {
        create_chart("dashboard_" + key + "_chart", "line", val);
      })
    }
  });

  function create_chart(target, type, data) {
    new Chart(document.getElementById(target).getContext("2d"), {
      type: type,
      data: {
        labels: data.labels,
        datasets: [{
          label: "Lượt xem",
          data: data.data,
          borderColor: 'rgba(0, 188, 212, 0.75)',
          backgroundColor: 'rgba(0, 188, 212, 0.3)',
          pointBorderColor: 'rgba(0, 188, 212, 0)',
          pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
          pointBorderWidth: 1
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });
  }

  setInterval(function() {
    $.ajax({
      url: "/action/dashboard.admin",
      type: "post",
      dataType: "json",
      data: {
        type: "count"
      },
      success: function(result) {
        $.each(result, function(key, val) {
          $("#count_" + key + " .number").html(val);
        })
      }
    });
  }, 500);
});
