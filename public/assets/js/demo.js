(function ($) {
  "use strict";

  var dzThemeSet0 = {
    /* Default Theme */
    typography: "poppins",
    version: "light",
    layout: "vertical",
    primary: "color_1",
    headerBg: "color_4",
    navheaderBg: "color_3",
    sidebarBg: "color_1",
    sidebarStyle: "full",
    sidebarPosition: "fixed",
    headerPosition: "fixed",
    containerLayout: "wide",
  };

  function setThemeOptionOnPage() {
    // Appliquer directement le thème sans utiliser de cookies
    dzSettingsOptions = dzThemeSet0;
    new dzSettings(dzThemeSet0);
  }

  jQuery(window).on("load", function () {
    // Appliquer le thème forcé
    setThemeOptionOnPage();
  });

  jQuery(window).on("resize", function () {
    // Réappliquer le thème au redimensionnement
    setThemeOptionOnPage();
  });
})(jQuery);
