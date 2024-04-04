

export default class Common {
  init() {
    console.log('init common');
    this.burgerMenu();
  }

  burgerMenu() {
    document.querySelector('div#menuToggle').addEventListener('click', (burger) => {
      document.querySelector('ul#menu').classList.toggle('active');
      document.querySelector('div#menuToggle').classList.toggle('active');
    });
  }
}
