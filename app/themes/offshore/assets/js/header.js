class Header {
  constructor () {
    this.headerSelector = ".js-header-menu";
    this.headerBtn = ".js-menu-button";
    this.headerHidden = "close";
    this.headerShow = "show";
    this.header = null;
    this.screen = null;
    this.eventHandlers();
  }

  eventHandlers () {
    window.addEventListener("load", () => {
      this.header = document.querySelector(".js-header-menu");
      this.headerEventButton();
      this.setScreen();
      window.addEventListener("resize", () => {
        this.setScreen();
        this.headerHeightObserver();
      });
    });

  }

  setScreen () {
    let screenWidth = window.innerWidth >= 767 ? "desktop" : "mobile";
    if (screenWidth !== this.screen) {
      this.screen = screenWidth;
    }
  }

  headerEventButton () {
    const menuButtons = document.querySelectorAll(this.headerBtn);

    menuButtons.forEach(elem => {
      elem.addEventListener("click", () => this.togleMenu());
    });
  }

  hiddenMenu () {
    this.header.classList.remove(this.headerShow);
    this.header.classList.add(this.headerHidden);
    document.querySelector("body").classList.remove("overflow-hidden");
  }

  showMenu () {
    this.header.classList.add(this.headerShow);
    this.header.classList.remove(this.headerHidden);
    document.querySelector("body").classList.add("overflow-hidden");
  }

  togleMenu () {
    this.header.classList.contains(this.headerShow) ? this.hiddenMenu() : this.showMenu();
  }

  headerHeightObserver () {
    if (this.screen == "desktop" && this.header.classList.contains(this.headerShow)) {
      this.hiddenMenu();
    }
  }
}
new Header()
