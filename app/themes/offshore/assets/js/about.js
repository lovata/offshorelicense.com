class aboutLogoSlider {
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

    window.addEventListener("resize", () => {
      this.setScreen();
    });
  }

  initSlider () {
    this.slideNode = $(".js-main-offer-slider");
    if (!this.slideNode) return false;
    this.setScreen();

  }

  setScreen () {
    let screenWidth = document.documentElement.clientWidth >= 1024 ? "desktop" : "mobile";
    if (this.screen == null || (screenWidth !== this.screen)) {
      this.screen = screenWidth;
      if (this.screen == "mobile") {
        this.initSlickSlider();
      }
      if (this.screen == "desktop") {
        if(this.slide !== null) {
          this.slide = null;
          $(".js-main-offer-slider").slick("unslick");
        }
      }
    }
  }

  initSlickSlider () {

    this.slide = $(".js-logo-slider").slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true
    });
  }
}

new aboutLogoSlider();
