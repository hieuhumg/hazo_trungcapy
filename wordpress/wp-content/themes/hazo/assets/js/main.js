

//Scroll

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  if (scroll > 50) {
    $(".header-top").addClass("header-active");
        $(".scroll-top").addClass("active-scroll"); // Scroll Menu - Mobile
      } 
      else {
        $(".header-top").removeClass("header-active");
        $(".scroll-top").removeClass("active-scroll");
      }
});

$(".scroll-top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

// carousel

$('.sl-slider').owlCarousel({
  loop:true,
  margin:0,
  nav:true,
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  animateOut: 'fadeOut',
  smartSpeed:600,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
});

$('.sl-news').owlCarousel({
  loop:true,
  margin:0,
  nav:true,
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  autoplayHoverPause:true,
  animateOut: 'fadeOut',
  smartSpeed:600,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
});

function changeQuantity() {
  jQuery(function ($) {
    if (!String.prototype.getDecimals) {
      String.prototype.getDecimals = function () {
        var num = this,
          match = ("" + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
        if (!match) {
          return 0;
        }
        return Math.max(
          0,
          (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0)
        );
      };
    }
    $(document.body).on("click", ".plus, .minus", function () {
      var $qty = $(this).closest(".quantity").find(".qty"),
        currentVal = parseFloat($qty.val()),
        max = parseFloat($qty.attr("max")),
        min = parseFloat($qty.attr("min")),
        step = $qty.attr("step");

      if (!currentVal || currentVal === "" || currentVal === "NaN")
        currentVal = 0;
      if (max === "" || max === "NaN") max = "";
      if (min === "" || min === "NaN") min = 0;
      if (
        step === "any" ||
        step === "" ||
        step === undefined ||
        parseFloat(step) === "NaN"
      )
        step = 1;

      if ($(this).is(".plus")) {
        if (max && currentVal >= max) {
          $qty.val(max);
        } else {
          $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
        }
      } else {
        if (min && currentVal <= min) {
          $qty.val(min);
        } else if (currentVal > 0) {
          $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
        }
      }

      $qty.trigger("change");
    });
  });
}
changeQuantity();

function showMore() {

  var height = 250;
  var higehtHtml = $('.js-content').height();
  console.log(higehtHtml);
  if(higehtHtml > height){
    $('.show-more').show();
  }
  $('.js-dt').click(function(){
    $(this).parents('.info__detail').find('.info__detail-text').css('height','max-content');
    $(this).hide();
    $(this).parents('.show-more').find('.js-tg').show();
  });
  $('.js-tg').click(function(){
    $(this).parents('.info__detail').find('.info__detail-text').css('height','200px');
    $(this).hide();
    $(this).parents('.show-more').find('.js-dt').show();
  });

}showMore();

$('.ws-search--header').on('submit', function(e) {
  var input = document.getElementById("input1").value;
  if (input.trim() == '') {
    e.preventDefault();
    alert('Xin hãy nhập từ khóa!');
  } 
});


function ClickMe(){

  $('.select-mobile').click(function(){
    $('.sidebar-products').slideToggle();
  });

}ClickMe();



// search mobile

$(".search-mobile a").click(function (event) {
  $(".full-search").fadeIn();
});
$(".times-search a").click(function () {
  $(".full-search").fadeOut();
});


// ?jquery mobile

(function ($) {
  var $main_nav = $("#main-nav");
  var $toggle = $(".toggle");

  var defaultData = {
    maxWidth: false,
    customToggle: $toggle,
    // navTitle: 'All Categories',
    levelTitles: true,
    pushContent: "#container",
  };

  // add new items to original nav
  $main_nav
    .find("li.add")
    .children("a")
    .on("click", function () {
      var $this = $(this);
      var $li = $this.parent();
      var items = eval("(" + $this.attr("data-add") + ")");

      $li.before('<li class="new"><a>' + items[0] + "</a></li>");

      items.shift();

      if (!items.length) {
        $li.remove();
      } else {
        $this.attr("data-add", JSON.stringify(items));
      }

      Nav.update(true);
    });

  // call our plugin
  var Nav = $main_nav.hcOffcanvasNav(defaultData);

  // demo settings update

  const update = (settings) => {
    if (Nav.isOpen()) {
      Nav.on("close.once", function () {
        Nav.update(settings);
        Nav.open();
      });

      Nav.close();
    } else {
      Nav.update(settings);
    }
  };

  $(".actions")
    .find("a")
    .on("click", function (e) {
      e.preventDefault();

      var $this = $(this).addClass("active");
      var $siblings = $this
        .parent()
        .siblings()
        .children("a")
        .removeClass("active");
      var settings = eval("(" + $this.data("demo") + ")");

      update(settings);
    });

  $(".actions")
    .find("input")
    .on("change", function () {
      var $this = $(this);
      var settings = eval("(" + $this.data("demo") + ")");

      if ($this.is(":checked")) {
        update(settings);
      } else {
        var removeData = {};
        $.each(settings, function (index, value) {
          removeData[index] = false;
        });

        update(removeData);
      }
    });


  //tab
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  });
})(jQuery);

$('.partner-list').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  // asNavFor: '.slider-for',
  dots: false,
  autoplay: true,
  autoplaySpeed: 2000,
  // centerMode: true,
  // focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
      }
    }

  ]
});
$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  // asNavFor: '.slider-for',
  dots: false,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 2000,
  // centerMode: true,
  // focusOnSelect: true,
});

$(document).ready(function () {
  $(".content-box").hide();
  $(".contorol").click(function () {
    $(this).next(".content-box").slideToggle().siblings(".content-box").slideUp();
    if ($("i").hasClass("fa-plus")) {
      $(this).find("i").toggleClass("fa-minus");

    }
  });
});
