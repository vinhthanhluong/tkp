var $ = jQuery;
$(function () {
  // handleChildClick();
  // handleParentClick();
  handleACFToggle();
});

function handleChildClick() {
  $(".categorydiv .children")
    .find("input")
    .each(function (index, input) {
      $(input).on("change", function () {
        var _this = $(this);
        var is_checked = _this.is(":checked");
        var numberOfChecked = _this.closest("ul").find("input:checked").length;
        var numberOfInput = _this.closest("ul").find("input").length;

        if (is_checked) {
          if (numberOfChecked == numberOfInput) {
            _this
              .parents("li")
              .children("label")
              .children("input")
              .prop("checked", true);
          }
        } else {
          if (numberOfChecked < numberOfInput) {
            _this
              .parents("li")
              .children("label")
              .children("input")
              .removeAttr("checked");
          }
        }
      });
    });
}

function handleParentClick() {
  $(".categorydiv .categorychecklist > li label input").each(function () {
    $(this).on("change", function () {
      var _this = $(this);
      var is_checked = _this.is(":checked");
      var numberOfInput = _this
        .parents("li")
        .children("ul")
        .find("input").length;
      var numberOfChecked = _this
        .parents("li")
        .children("ul")
        .find("input:checked").length;
      if (is_checked) {
        if (numberOfChecked != numberOfInput) {
          _this
            .closest("li")
            .children("ul")
            .find("input")
            .each(function () {
              $(this).attr("checked", "checked");
            });
        }
      } else {
        if (numberOfChecked == numberOfInput) {
          _this
            .closest("li")
            .children("ul")
            .find("input")
            .each(function () {
              $(this).removeAttr("checked");
            });
        }
      }
    });
  });
}

// AJAX FOR ALL POST TYPE
function handleACFToggle() {
  $("body").on("click", ".js-toggle", function () {
    var _this = $(this);
    var postID = _this.attr("data-id");
    var isOn = parseInt(_this.attr("data-on"));
    var fieldName = _this.attr("data-field-name");
    var isTax = _this.attr("data-is-tax");
    $.ajax({
      type: "post",
      dataType: "json",
      url: "admin-ajax.php",
      data: {
        action: "wpc_handle_acf_toggle",
        postID: postID,
        isOn: isOn,
        fieldName: fieldName,
        isTax: isTax,
      },
      beforeSend: function () {
        _this.find("span").attr("class", "fa fa-spinner fa-spin");
      },
      success: function () {
        _this
          .attr("data-on", isOn ? 0 : 1)
          .find("span")
          .attr("class", isOn ? "" : "fa fa-check");
      },
    });
    return false;
  });
}

$(window).on("load", function () {
  $("#newscatchecklist input[type='checkbox']").attr("type", "radio");
  $(".type-news .column-title .button-link").on("click", function () {
    setTimeout(function () {
      $(".inline-editor .newscat-checklist input[type='checkbox']").attr(
        "type",
        "radio"
      );
    }, 100);
  });
});
