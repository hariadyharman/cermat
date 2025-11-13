/*---------------------------------------------------------------------
  File Name: custom.js
---------------------------------------------------------------------*/

$(function () {

    "use strict";
  
    /* Preloader
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    setTimeout(function () {
      $('.loader_bg').fadeToggle();
    }, 1500);
  
    /* JQuery Menu
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      $('header nav').meanmenu();
    });
  
    /* Tooltip
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  
    /* sticky
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      $(".sticky-wrapper-header").sticky({ topSpacing: 0 });
    });
  
    /* Mouseover
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      $(".main-menu ul li.megamenu").mouseover(function () {
        if (!$(this).parent().hasClass("#wrapper")) {
          $("#wrapper").addClass('overlay');
        }
      });
      $(".main-menu ul li.megamenu").mouseleave(function () {
        $("#wrapper").removeClass('overlay');
      });
    });
  
    /* NiceScroll
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(".brand-box").niceScroll({
      cursorcolor: "#9b9b9c",
    });
  
    /* NiceSelect
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      $('select').niceSelect();
    });
  
    /* OwlCarousel - Blog Post slider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      var owl = $('.carousel-slider-post');
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
      });
    });
  
    /* OwlCarousel - Banner Rotator Slider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      var owl = $('.banner-rotator-slider');
      owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
      });
    });
  
    /* OwlCarousel - Product Slider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      var owl = $('#product-in-slider');
      owl.owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          960: {
            items: 3
          },
          1200: {
            items: 4
          }
        }
      });
      owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY > 0) {
          owl.trigger('next.owl');
        } else {
          owl.trigger('prev.owl');
        }
        e.preventDefault();
      });
    });
  
  
  
    /* Scroll to Top
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(window).on('scroll', function () {
      scroll = $(window).scrollTop();
      if (scroll >= 100) {
        $("#back-to-top").addClass('b-show_scrollBut')
      } else {
        $("#back-to-top").removeClass('b-show_scrollBut')
      }
    });
    $("#back-to-top").on("click", function () {
      $('body,html').animate({
        scrollTop: 0
      }, 1000);
    });
  
    /* Contact-form
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
    $.validator.setDefaults({
      submitHandler: function () {
        alert("submitted!");
      }
    });
  
    $(document).ready(function () {
      $("#contact-form").validate({
        rules: {
          firstname: "required",
          email: {
            required: true,
            email: true
          },
          lastname: "required",
          message: "required",
          agree: "required"
        },
        messages: {
          firstname: "Please enter your firstname",
          email: "Please enter a valid email address",
          lastname: "Please enter your lastname",
          username: {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 2 characters"
          },
          message: "Please enter your Message",
          agree: "Please accept our policy"
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
          // Add the `help-block` class to the error element
          error.addClass("help-block");
  
          if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("input"));
          } else {
            error.insertAfter(element);
          }
        },
        highlight: function (element, errorClass, validClass) {
          $(element).parents(".col-md-4, .col-md-12").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).parents(".col-md-4, .col-md-12").addClass("has-success").removeClass("has-error");
        }
      });
    });
  
    /* heroslider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    var swiper = new Swiper('.heroslider', {
      spaceBetween: 30,
      centeredSlides: true,
      slidesPerView: 'auto',
      paginationClickable: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
    });
  
  
    /* Product Filters
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    var swiper = new Swiper('.swiper-product-filters', {
      slidesPerView: 3,
      slidesPerColumn: 2,
      spaceBetween: 30,
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
          slidesPerColumn: 1,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
          slidesPerColumn: 1,
        },
        480: {
          slidesPerView: 1,
          spaceBetween: 10,
          slidesPerColumn: 1,
        }
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      }
    });
  
    /* Countdown
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $('[data-countdown]').each(function () {
      var $this = $(this),
        finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function (event) {
        var $this = $(this).html(event.strftime(''
          + '<div class="time-bar"><span class="time-box">%w</span> <span class="line-b">weeks</span></div> '
          + '<div class="time-bar"><span class="time-box">%d</span> <span class="line-b">days</span></div> '
          + '<div class="time-bar"><span class="time-box">%H</span> <span class="line-b">hr</span></div> '
          + '<div class="time-bar"><span class="time-box">%M</span> <span class="line-b">min</span></div> '
          + '<div class="time-bar"><span class="time-box">%S</span> <span class="line-b">sec</span></div>'));
      });
    });
  
    /* Deal Slider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $('.deal-slider').slick({
      dots: false,
      infinite: false,
      prevArrow: '.previous-deal',
      nextArrow: '.next-deal',
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: false,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          infinite: true,
          dots: false
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  
    /* News Slider
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $('#news-slider').slick({
      dots: false,
      infinite: false,
      prevArrow: '.previous',
      nextArrow: '.next',
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      }, {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }, {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  
    /* Fancybox
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(".fancybox").fancybox({
      maxWidth: 1200,
      maxHeight: 600,
      width: '70%',
      height: '70%',
    });
  
    /* Toggle sidebar
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
  
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
      });
    });
  
    /* Product slider 
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
    // optional
    $('#blogCarousel').carousel({
      interval: 5000
    });
  
  
    //* General Form */
    // // author badge :)
    // var author = '<div style="position: fixed;bottom: 0;right: 20px;background-color: #fff;box-shadow: 0 4px 8px rgba(0,0,0,.05);border-radius: 3px 3px 0 0;font-size: 12px;padding: 5px 10px;">By <a href="https://twitter.com/mhdnauvalazhar">@mhdnauvalazhar</a> &nbsp;&bull;&nbsp; <a href="https://www.buymeacoffee.com/mhdnauvalazhar">Buy me a Coffee</a></div>';
    // $("body").append(author);
  
    $("input[type='password'][data-eye]").each(function (i) {
      var $this = $(this),
        id = 'eye-password-' + i,
        el = $('#' + id);
  
      $this.wrap($("<div/>", {
        style: 'position:relative; width:80%;',
        id: id
      }));
  
      $this.css({
        paddingRight: 0
      });
      $this.after($("<div/>", {
        // html: 'Show',
        class: 'far fa-eye-slash text-light',
        id: 'passeye-toggle-' + i,
      }).css({
        position: 'absolute',
        right: -5,
        top: ($this.outerHeight() / 2) - 47,
        padding: '4px 7px',
        fontSize: 15,
        cursor: 'pointer',
      }));
  
      $this.after($("<input/>", {
        type: 'hidden',
        id: 'passeye-' + i
      }));
  
      var invalid_feedback = $this.parent().parent().find('.invalid-empty');
  
      if (invalid_feedback.length) {
        $this.after(invalid_feedback.clone().addClass("invalid-password"));
      }
  
      $this.on("keyup paste", function () {
        $("#passeye-" + i).val($(this).val());
      });
      $("#passeye-toggle-" + i).on("click", function () {
        if ($this.hasClass("show")) {
          $this.attr('type', 'password');
          $this.removeClass("show");
          $(this).addClass("fa-eye-slash");
          $(this).removeClass("fa-eye");
        } else {
          $this.attr('type', 'text');
          $this.val($("#passeye-" + i).val());
          $this.addClass("show");
          $(this).addClass("fa-eye");
          $(this).removeClass("fa-eye-slash");
        }
      });
    });
  
    //* End General Form */
  
    //* Login Form */
  
    $(".my-login-validation").submit(function () {
      var form = $(this);
      if (form[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.addClass('was-validated');
    });
  
    //* End Login Form */
  
  
    //* Registration Form */
  
    $(document).ready(function () {
      setPackageDetailText($("#form-select"));
  
      $("#form-select").change(function () {
        setPackageDetailText($(this));
      });
  
      function setPackageDetailText(parentElement) {
        var optElement = parentElement.children('option:selected');
  
        if (optElement.val()) {
          $('#acc-price').text('Biaya berlangganan - Rp ' + optElement.data('price'));
          $('#acc-expired').text('Selama ' + optElement.data('valid') + ' hari');
  
          if (optElement.data('unlimited') == 1) {
            $('#acc-quota').text('Uji tes unlimited');          
          } else {
            $('#acc-quota').text('Uji tes sebanyak ' + optElement.data('quota') + ' kali per hari');
          }
        } else {
          $("#acc-price").text("-");
          $("#acc-expired").text("");
          $("#acc-quota").text("");
        }
      }
    });
  
    $(".my-registration-validation").submit(function () {
      var form = $(this);
      var values = {};
      var $inputs_password = $('.my-registration-validation .password');
      $inputs_password.each(function () {
        values[this.name] = $(this).val();
      });
      var form = $(this);
      if (form[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      } else {
        switch (values["password"] !== values["re-password"]) {
          case true:
            event.preventDefault();
            event.stopPropagation();
            $('.invalid-unmatch-feedback').attr("style", "display: block !important");
  
            break;
  
          case false:
            $('.invalid-unmatch-feedback').attr("style", "display: none !important");
  
            break;
        }
  
      }
      form.addClass('was-validated');
    }).keydown (function () {
      var value = {};
      var $inputs_password = $('.my-registration-validation .password');
      $inputs_password.each(function () {
        value[this.name] = $(this).val();
      });
      if ((value["re-password"].length - 1) === 0) {
        $('.invalid-unmatch-feedback').attr("style", "display: none !important");
      }
    });
  
    //* End Registration Form */
  
    //* Reset Password Form */
  
    $(".my-resetpassword-validation").submit(function () {
      var form = $(this);
      var values = {};
      var $inputs = $('.my-resetpassword-validation :input');
      $inputs.each(function () {
        values[this.name] = $(this).val();
      });
      if (form[0].checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      } else {
        switch (values["password"] !== values["re-password"]) {
          case true:
            event.preventDefault();
            event.stopPropagation();
            $('.invalid-unmatch-feedback').attr("style", "display: block !important");
  
            break;
  
          case false:
            $('.invalid-unmatch-feedback').attr("style", "display: none !important");
  
            break;
        }
  
      }
      form.addClass('was-validated');
    }).keydown (function () {
      var value = {};
      var $input = $('.my-resetpassword-validation :input');
      $input.each(function () {
        value[this.name] = $(this).val();
      });
      if ((value["re-password"].length - 1) === 0) {
        $('.invalid-unmatch-feedback').attr("style", "display: none !important");
      }
    });
  
  });
  
  //* End Reset Password Form */
  
  //* Forgot Password Form */
  
  $(".my-forgotpassword-validation").submit(function () {
    var form = $(this);
    if (form[0].checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.addClass('was-validated');
  });
  
  //* Forgot Password Form */