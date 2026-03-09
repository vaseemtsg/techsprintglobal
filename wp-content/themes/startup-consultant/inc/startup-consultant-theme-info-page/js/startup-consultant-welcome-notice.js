(function ($) {
    "use strict";

    // Install + Activate button
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();

        var button = $(this);
        button.prop("disabled", true)
              .text("Installing & Activating recommended plugins…")
              .addClass("processing-spinner");

        $.post(startup_consultant_localize.ajax_url, {
            action: "startup_consultant_install_and_activate_plugins",
            nonce: startup_consultant_localize.nonce
        }, function (response) {
            if (response.success) {
                window.location.href = startup_consultant_localize.redirect_url;
            } else {
                button.text(response.data?.message || "Installation failed");
            }
        });
    });

})(jQuery);
