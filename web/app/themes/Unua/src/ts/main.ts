import burgerMenu from "./menu";

function app() {
  // burgerMenu(), seulement si on est tablette ou mobile
  if(window.innerWidth < 930) {
    new burgerMenu();
  }
}
app();