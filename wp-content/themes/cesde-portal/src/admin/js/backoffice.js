jQuery(document).ready(function ($) {
  function taxonomy_media_upload(
    button_id,
    wrapper_image,
    imageID,
    button_remove
  ) {
    var custom_media = true,
      original_attachment = wp.media.editor.send.attachment;
    $(`#${button_id}`).on("click", function (e) {
      custom_media = true;

      wp.media.editor.send.attachment = function (props, attachment) {
        if (custom_media) {
          $(`#${imageID}`).val(attachment.id);
          $(`#${wrapper_image}`).html(
            `<img class="custom_media_image img-fluid" src=""  
           style="width:auto;max-height:350px;margin:0;padding:0;float:none;" />`
          );
          $(`#${wrapper_image} .custom_media_image`)
            .attr("src", attachment.url)
            .css("display", "block");
        } else {
          return original_attachment.apply(button_id, [props, attachment]);
        }
      };
      wp.media.editor.open(button_id);
      return false;
    });
    if ($(`#${button_remove}`)) {
      $(`#${button_remove}`).on("click", function () {
        $(`#${imageID}`).val("");
        $(
          `#${wrapper_image}`
        ).html(`<img class="custom_media_image img-fluid" src="${cesde_back_ajax.project_url}/assets/img/logo.png"  
        style="width:auto;max-height:350px;margin:0;padding:0;float:none;" />`);
      });
    }
  }
  function submitOptionsData(wrapperForm) {
    const form = document.getElementById(`${wrapperForm}_form`);
    if (form) {
      form.addEventListener("submit", (e) => {
        e.preventDefault();
        const savingData = document.querySelector(
          `.container-cesde .saving-data`
        );

        savingData.style.display = "flex";
        const option = document.getElementById("option");
        const action = document.getElementById("action");
        const front_image = document.getElementById("front_image");
        const titulo = document.getElementById("titulo");
        const color_editor = document.getElementById("color_editor");
        const meta_content_editor = document.getElementById(
          "meta_content_editor"
        );
        const template_section = document.getElementById("template_section");
        const url = cesde_back_ajax.ajaxurl;
        const security = document.getElementById("security");

        const data = {
          option: option.value,
          action: action.value,
          security: security.value,
          front_image: front_image.value,
          titulo: titulo.value,

          color_editor: color_editor.value,
          meta_content_editor: meta_content_editor.value,
          template_section: template_section.value,
        };
        const formData = new FormData();
        formData.append("option", option.value);
        formData.append("action", action.value);
        formData.append("security", security.value);
        formData.append("front_image", front_image.value);
        formData.append("titulo", titulo.value);

        formData.append("color_editor", color_editor.value);
        formData.append("meta_content_editor", meta_content_editor.value);
        formData.append("template_section", template_section.value);

        console.log(data);
        fetch(url, {
          method: "POST",
          body: formData,
        })
          .then((res) => res.json())
          .then((res) => {
            if (res.success) {
              savingData.innerHTML = '<h2 class="save-complete">Guardado</h2>';
              setTimeout(() => {
                savingData.innerHTML = '<div class="saving"></div>';
                savingData.style.display = "none";
              }, 1000);
            }
          });
      });
    }
  }
  if ($("#cesde_sedes_config")) {
    taxonomy_media_upload(
      "front_image_button",
      "image-wrapper",
      "front_image",
      "front_image_remove"
    );
    let options = {
      // Podemos declarar un color por defecto aquí
      // o en el atributo del input data-default-color
      defaultColor: false,
      // llamada que se lanzará cuando el input tenga un color válido
      change: function (event, ui) {},
      // llamada que se lanzará cuando el input tenga un color no válido
      clear: function () {},
      // esconde los controles del Color Picker al cargar
      hide: true,
      // muestra un grupo de colores comunes debajo del selector
      // o suministra de una gama de colores para poder personalizar más aun.
      palettes: true,
    };
    $(".mi-plugin-color-field").wpColorPicker(options);
    submitOptionsData("cesde_sedes_config");
  }
  if (document.getElementById("cesde_escuela_config")) {
    taxonomy_media_upload(
      "front_image_button",
      "image-wrapper",
      "front_image",
      "front_image_remove"
    );
    let options = {
      // Podemos declarar un color por defecto aquí
      // o en el atributo del input data-default-color
      defaultColor: false,
      // llamada que se lanzará cuando el input tenga un color válido
      change: function (event, ui) {},
      // llamada que se lanzará cuando el input tenga un color no válido
      clear: function () {},
      // esconde los controles del Color Picker al cargar
      hide: true,
      // muestra un grupo de colores comunes debajo del selector
      // o suministra de una gama de colores para poder personalizar más aun.
      palettes: true,
    };
    $(".mi-plugin-color-field").wpColorPicker(options);
    submitOptionsData("cesde_escuela_config");
  }
  if (document.getElementById("cesde_noticias_config")) {
    taxonomy_media_upload(
      "front_image_button",
      "image-wrapper",
      "front_image",
      "front_image_remove"
    );
    let options = {
      // Podemos declarar un color por defecto aquí
      // o en el atributo del input data-default-color
      defaultColor: false,
      // llamada que se lanzará cuando el input tenga un color válido
      change: function (event, ui) {},
      // llamada que se lanzará cuando el input tenga un color no válido
      clear: function () {},
      // esconde los controles del Color Picker al cargar
      hide: true,
      // muestra un grupo de colores comunes debajo del selector
      // o suministra de una gama de colores para poder personalizar más aun.
      palettes: true,
    };
    $(".mi-plugin-color-field").wpColorPicker(options);
    submitOptionsData("cesde_noticias_config");
  }
});
