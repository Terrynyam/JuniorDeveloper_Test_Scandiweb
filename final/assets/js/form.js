$("#productType").on("change", function(){
  $('.fieldbox').hide();
  $("#" + $(this).val()).show();
})

$(document).ready(function () {
  $("select").change(function () {
      $("select option:selected").each(function () {

          if ($(this).attr("value") === "DVDs") {

            $("#size").attr('required', '');
            $("#weight").removeAttr("required");
            $("#height").removeAttr("required");
            $("#width").removeAttr("required");
            $("#length").removeAttr("required");

          }

          if ($(this).attr("value") === "Books") {

              $("#weight").attr('required', '');
              $("#size").removeAttr("required");
              $("#height").removeAttr("required");
              $("#width").removeAttr("required");
              $("#length").removeAttr("required");
          }

          if ($(this).attr("value") === "Furnitures") {

            $("#height").attr('required', '');
            $("#length").attr('required', '');
            $("#width").attr('required', '');
            $("#size").removeAttr("required");
            $("#weight").removeAttr("required");

        }
      });
  }).change();
});