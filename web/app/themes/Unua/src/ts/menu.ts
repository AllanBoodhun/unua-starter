export default class burgerMenu {
  burger: HTMLInputElement | null;
  body: HTMLElement | null;

  constructor() {
      this.burger = document.querySelector('.menu-toggle') as HTMLInputElement;
      this.body = document.querySelector('body') as HTMLElement;
      this.events();
  }
  events():void {
    if (this.burger){
      this.burger.addEventListener('click', ():void => this.toggleTheMenu());
    }
    
  }
  toggleTheMenu():void {
    this.burger?.checked ? this.body?.classList.add('active-menu') 
                          : this.body?.classList.remove('active-menu');
      ;
  }
}


