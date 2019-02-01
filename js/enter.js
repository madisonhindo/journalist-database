
$(document).ready(function() {
  $("#respond").hide();

  $("#journoform").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "enter.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
       $("#journalistentry").hide();
       $("#respond").show();
     },
      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      }
    });
  });
});
