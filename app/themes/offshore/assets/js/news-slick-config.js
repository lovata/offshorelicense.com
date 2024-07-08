class NewsSlider {
  constructor()
  {
    this.slides = null;
    this.initHandler();
  }

  initHandler() {
    document.addEventListener("DOMContentLoaded", () => {
      this.initSlider()
    })
  }
  initSlider() {
    this.slides = $('.js-blog-news-list')
    if(!this.slides) return false;
    this.initSlickSlider()
  }
  initSlickSlider() {
    this.slides.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      loop: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
      ]
    });
  }
}

new NewsSlider()
