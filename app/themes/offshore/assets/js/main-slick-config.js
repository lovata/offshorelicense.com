class MainSlider {
  constructor () {
    this.slideNode = null;
    this.slide = null;
    this.screen = null;
    this.initHandler();
  }

  initHandler () {
    document.addEventListener("DOMContentLoaded", () => {
      this.initSlider();
    });
  }

  initSlider () {
    this.slideNode = $(".js-main-shortcut");
    if (!this.slideNode) return false;
    this.setScreen();
    window.addEventListener("resize", () => {
      this.setScreen();
    });

  }

  setScreen () {
    let screenWidth = document.documentElement.clientWidth >= 768 ? "desktop" : "mobile";
    if (this.screen == null || (screenWidth !== this.screen)) {
      this.screen = screenWidth;
      if (this.screen == "mobile") {
        this.initSlickSlider();
      }
      if (this.screen == "desktop") {
        if(this.slide !== null) {
          this.slide = null;
          $(".js-main-shortcut").slick("unslick");
        }
      }
    }
  }

  initSlickSlider () {

    this.slide = $(".js-main-shortcut").slick({
      arrows: true,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 2,
      loop: true,
      dots: true
    });
  }
}

new MainSlider();
