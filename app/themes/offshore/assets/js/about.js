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
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 3000,
      pauseOnHover: true,
      cssEase: 'linear',
      infinite: true,
      centerMode: true,
      variableWidth: true
    });
  }
}

new aboutLogoSlider();
