console.log("hola backoffice");

jQuery(document).ready(function ($) {
  function taxonomy_media_upload(
    button_id,
    wrapper_image,
    imageID,
    button_remove
  ) {
    var custom_media = true,
      original_attachment = wp.media.editor.send.attachment;
    $("body").on("click", button_id, function (e) {
      custom_media = true;
      wp.media.editor.send.attachment = function (props, attachment) {
        if (custom_media) {
          $(imageID).val(attachment.id);
          $(wrapper_image).html(
            '<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />'
          );
          $(`${wrapper_image} .custom_media_image`)
            .attr("src", attachment.url)
            .css("display", "block");
        } else {
          return original_attachment.apply(button_id, [props, attachment]);
        }
      };
      wp.media.editor.open(button_id);
      return false;
    });
    if ($(button_remove)) {
      $("body").on("click", button_remove, function () {
        $(imageID).val("");
        $(wrapper_image).html("");
      });
    }
    $(document).ajaxComplete(function (event, xhr, settings) {
      var queryStringArr = settings.data.split("&");
      if ($.inArray("action=add-tag", queryStringArr) !== -1) {
        var xml = xhr.responseXML;
        $response = $(xml).find("term_id").text();
        if ($response != "") {
          $(wrapper_image).html("");
        }
      }
    });
  }
});
