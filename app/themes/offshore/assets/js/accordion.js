class Accordion {
  constructor() {
    this.buttonClass = 'js-accordion-head';
    this.initHandler();
  }

  initHandler() {
    document.addEventListener('DOMContentLoaded', () => {
      this.accordion();
    });
  }

  accordion() {
    const $title = $(`.${this.buttonClass}`);
    let busy = false;
    $title.on('click', function () {
      if (busy) return false;
      busy = true;
      let _this = $(this);

      if (_this.hasClass('active')) {
        _this.removeClass('active');
        _this.next().removeClass('hidden').slideUp(function () {
          busy = false
        });
      } else {
        $title.removeClass('active');
        $title.next().slideUp();
        _this.addClass('active');
        _this.next().slideDown(function () {
          busy = false
        });
      }
    });
  }
}
new Accordion();
