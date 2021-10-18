/* ASIDE MENU */
function show_menu() {
  var element = document.getElementById("aside_menu");
  element.classList.remove("menu_lateral_show");
  element.classList.remove("menu_lateral_hide");
  element.classList.add("menu_lateral_show");
}

function close_menu() {
  var element = document.getElementById("aside_menu");
  element.classList.remove("menu_lateral_show");
  element.classList.remove("menu_lateral_hide");
  element.classList.add("menu_lateral_hide");
}
/* END ASIDE MENU */


/* ASIDE TyC */
function show_tyc() {
  var element = document.getElementById("aside_tyc");
  element.classList.remove("tyc_show");
  element.classList.remove("tyc_hide");
  element.classList.add("tyc_show");
}

function close_tyc() {
  var element = document.getElementById("aside_tyc");
  element.classList.remove("tyc_show");
  element.classList.remove("tyc_hide");
  element.classList.add("tyc_hide");
}
/* END ASIDE TyC */

/* COLLAPSE PANELS */
 $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
  /* END COLLAPSE PANELS*/