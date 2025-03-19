document.addEventListener("DOMContentLoaded", function () {
  // Sélection des éléments du DOM
  const headerItems = document.querySelectorAll(".header-item");
  const menuSections = document.querySelectorAll(".menu-section");

  var handleMetisMenu = function () {
    document.querySelectorAll(".metismenu").forEach(function (menu) {
      $(menu).metisMenu();
    });

    document
      .querySelectorAll(".metismenu > .mm-active")
      .forEach(function (item) {
        if (!item.querySelector("ul")) {
          item.classList.add("active-no-child");
        }
      });
  };

  // Fonction pour afficher le menu correspondant
  function showMenu(menu) {
    // Cacher tous les menus
    menuSections.forEach((section) => section.classList.remove("active"));

    // Afficher le bon menu
    document.getElementById(`menu-${menu}`).classList.add("active");

    // Mettre à jour l'état actif du header
    headerItems.forEach((item) => item.classList.remove("active"));
    document.querySelector(`[data-menu="${menu}"]`).classList.add("active");
    handleMetisMenu();
  }

  // Ajouter un écouteur d'événements à chaque élément du header
  headerItems.forEach((item) => {
    item.addEventListener("click", function () {
      const selectedMenu = this.getAttribute("data-menu");
      showMenu(selectedMenu);
    });
  });

  // Activer le menu "Accueil" par défaut
  showMenu("home");
});
