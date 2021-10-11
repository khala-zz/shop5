(function($) {
  $(document).ready(function() {
    ss.init();
  })

  $(document).keyup(function(e) {
    if (e.keyCode == 27) {
      ss.hidePopup();
      //       ss.closeDropdownCart();
    }
  });

  var ss = {
    init: function() {
      this.showPopup();
      this.hidePopup();
      this.btnAddtocart();
      this.updatePricingQuickview();
      this.hidePu();
      this.initAddToCart();
      this.initQuickView();
      this.initThumbnailOwlCarousel();
      this.initThumnail();
      this.initGoTop();
      this.initSwatch();
      this.initcolor();
      this.initDropDownCart();
      this.initToolsCart();
      this.initSiderBar();
      this.initFaqs();
      this.initCurenty();
      this.initCountd();
      this.initaddjs();
      this.initlOwlCarousel();
      this.initBtnDeal();
      this.initProductAddToCart();
      this.initInstaGram();
      this.productsTabs();
    },

    initInstaGram: function(){
      $(".widget-instagram .instagram-slide").each(function(){
        var instagramFeed = $(this);
        var insId = instagramFeed.data("id"),
            insUserId = instagramFeed.data("userid"),
            insAccessToken = instagramFeed.data("accesstoken"),
            insLimited = instagramFeed.data("limit"),
            insResolution = instagramFeed.data("resolution"),
            insNav = instagramFeed.data("navigation");

        var feed = new Instafeed({
          get: 'user',
          userId: insUserId,
          accessToken: insAccessToken,
          target: insId,
          limit: insLimited,
          resolution: insResolution,
          template: '<a target="_blank" href="{{link}}" title="{{caption}}"><img class="img-responsive" alt="{{caption}}" src="{{image}}" /><span class="ss_likes">{{likes}}</span></a>',
          before: function() {},
          after: function() {
            $('.instagram-slide').each(function(){
              $(this).owlCarousel({
                navigation: true,
                scrollPerPage: true,
                stopOnHover: true,     
                navigation: true,
                navText: ['',''],
                nav: false,
                margin: 0,
                dots: false,
                responsive:{
                  0:{
                    items:1,
                    nav:false
                  },
                  359:{
                    items:2,
                    nav:false
                  },
                  479:{
                    items:3,
                    nav:false
                  },
                  767:{
                    items:4,
                    nav:false
                  },
                  991:{
                    items:5,
                    nav:false
                  },
                  1199:{
                    items:6,
                    nav:false,
                    loop:false
                  }
                }
              }); 
            });
          },
          success: function() {},
          error: function() {}
        });

        feed.run();
      });
    },
    initGoTop: function() {
      $(document).ready(function() {
        $("#goToTop").addClass("hidden-top");
        $(window).scroll(function () {
          if ($(this).scrollTop() === 0) {
            $("#goToTop").addClass("hidden-top")
          } else {
            $("#goToTop").removeClass("hidden-top")
          }
        });

        $('#goToTop').click(function () {
          $('body,html').animate({scrollTop:0}, 1200);
          return false;
        });

        $("#loadingSite").fadeOut("slow");

        ss.normalNav();

        $(window).scroll(function() {
          ss.normalNav();
        });

        $('#canvas-menu-mobile').on("click", function (e) {
          e.preventDefault();
          $('.page-wrapper').toggleClass("mobile-menu-active");
        });
        $('.close-megamenu').on("click", function (e) {
          e.preventDefault();
          $('.mobile-menu-active').removeClass("mobile-menu-active");
        });

        $('span.toogleClick .fa-angle-down').click(function() {
          $(this).closest('.mobile_dropdown').find('.nav_dropdown').slideToggle("fast");
          return false;              
        }); 
      })
    },
    initBtnDeal: function(){
      var $grid = $('.deals-grid').isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows',
        getSortData: {
          name: '.name',
          symbol: '.symbol',
          number: '.number parseInt',
          category: '[data-category]',
          weight: function( itemElem ) {
            var weight = $( itemElem ).find('.weight').text();
            return parseFloat( weight.replace( /[\(\)]/g, '') );
          }
        }
      });

      // filter functions
      var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
          var number = $(this).find('.number').text();
          return parseInt( number, 10 ) > 50;
        },
        // show if name ends with -ium
        ium: function() {
          var name = $(this).find('.name').text();
          return name.match( /ium$/ );
        }
      };

      // bind filter button click
      $('#filters').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
      });

      // bind sort button click
      $('#sorts').on( 'click', 'button', function() {
        var sortByValue = $(this).attr('data-sort-by');
        $grid.isotope({ sortBy: sortByValue });
      });

      // change is-checked class on buttons
      $('.button-group').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function() {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $( this ).addClass('is-checked');
        });
      }); 
    },
    initlOwlCarousel: function() {
      $(".ss-owl .owl-carousel").each(function(){
        var owlCarousel = $(this);
        var nav 		= owlCarousel.data("nav"),
            dots		= owlCarousel.data("dots"),
            autoplay 	= owlCarousel.data("autoplay"),
            autospeed 	= owlCarousel.data("autospeed"),
            speed 		= owlCarousel.data("speed"),
            column1 	= owlCarousel.data("column1"),
            column2 	= owlCarousel.data("column2"),
            column3 	= owlCarousel.data("column3"),
            column4 	= owlCarousel.data("column4"),
            column5 	= owlCarousel.data("column5"),
            margin		= owlCarousel.data("margin"),
            lazyLoad	= owlCarousel.data("lazyLoad");
        var config = {

          nav: 					nav,
          dots:					dots,
          margin:				margin,
          autoplay:				autoplay,
          autospeed: 			autospeed,
          speed:				speed,
          loop:					false,
          addClassActive:		true,
          lazyLoad:				lazyLoad,
          navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
          navClass: ["owl-prev", "owl-next"],
          afterAction: 			FirstLastActiveItem,
          responsive:{
            0:{
              items:1,
              nav:false
            },
            359:{
              items:column5,
              nav:false
            },
            481:{
              items:column4,
              nav:false
            },
            767:{
              items:column3,
              nav:false
            },
            991:{
              items:column2,
              nav:false
            },
            1199:{
              items:column1,
              nav: nav,
              loop:false
            }

          }
        };
        if (autoplay){
          config.autospeed = autospeed;
        }
        owlCarousel.owlCarousel( config );
        function FirstLastActiveItem(el){
          el.find(".owl-item").removeClass("first");
          el.find(".owl-item.active").first().addClass("first");
          el.find(".owl-item").removeClass("last");
          el.find(".owl-item.active").last().addClass("last");
        }
      });
    },
    initCountd: function() {
      $('[data-date]').each(function() {
        var $this = $(this);
        if($(this).data('date').indexOf('/') != -1){
          finalDate = $(this).data('date');
          $this.on('finish.countdown', function() {
            $(this).hide();
          }).countdown(finalDate, function(event) {
            $this.html(event.strftime('<div class="deals-time day"><div class="num-time">%D</div><div class="title-time">days</div></div> <div class="deals-time hour"><div class="num-time">%H</div> <div class="title-time">hours</div></div><div class="deals-time minute"><div class="num-time">%M</div><div class="title-time">mins</div></div><div class="deals-time second"><div class="num-time">%S</div><div class="title-time">secs</div></div>'));
          });
          // $this.countdown('stop');
        }

      }); 
    },
    initCurenty: function(){
      $('.currency-Picker .dropdown-content a').on('click', function(e) { 
        $("select.currency-picker").val($(this).data('value')).change();
        $(this).closest('.dropdown-content').removeClass('active');     
        e.preventDefault();
      }); 
      $('.dropdown-toggle > a').click(function() {    
        if($(this).closest('.dropdown-toggle').find('.dropdown-content').hasClass('active')){
          $('.dropdown-content').removeClass('active');
        }else{
          $('.dropdown-content').removeClass('active');
          $(this).closest('.dropdown-toggle').find('.dropdown-content').addClass('active');  
        }     
        return false;              
      }); 

      $(document).on('click', function(e) {
        if ($('.dropdown-content').hasClass('active')) {
          $('.dropdown-content').toggleClass('active');
        }
      });
    },
    initThumnail: function(){
      $(".product-img-box #carousel-up").on("click", function () {
        if (!$(".product-img-box .verticl-carousel").is(':animated')) {
          var bottom = $(".product-img-box .verticl-carousel > a:last-child");
          var clone = $(".product-img-box .verticl-carousel > a:last-child").clone();
          clone.prependTo(".product-img-box .verticl-carousel");

          $(".product-img-box .verticl-carousel").animate({
            "top": "-=85"
          }, 0).stop().animate({
            "top": '+=85'
          }, 250, function () {
            bottom.remove();
          });
        }
      });
      $(".product-img-box #carousel-down").on("click", function () {
        if (!$(".product-img-box .verticl-carousel").is(':animated')) {
          var top = $(".product-img-box .verticl-carousel > a:first-child");
          var clone = $(".product-img-box .verticl-carousel > a:first-child").clone();
          clone.appendTo(".product-img-box .verticl-carousel");

          $(".product-img-box .verticl-carousel").animate({
            "top": '-=85'
          }, 250, function () {
            top.remove();
            $(".product-img-box .verticl-carousel").animate({
              "top": "+=85"
            }, 0);
          });

        }
      });

    },
    initFaqs: function(){
      var selectIds = $('#panel1,#panel2,#panel3');
      $(function ($) {
        selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
          $(this).prev().find('.fa').toggleClass('fa-plus fa-minus');
        })
      });
    },
    initSiderBar: function(){

      $(".open-sidebar").click(function(e){

        $(".sidebar-overlay").toggleClass("show");
        $(".sidebar-fixed").toggleClass("active");
      });

      $(".sidebar-overlay").click(function(e){

        $(".sidebar-overlay").toggleClass("show");
        $(".sidebar-fixed").toggleClass("active");
      });
      $('#close-sidebar').click(function() {
        $('.sidebar-overlay').removeClass('show');
        $('.sidebar-fixed').removeClass('active');

      }); 

    },
    initDropDownCart: function() {
      if ($('.mini-products-list li').length > 0) {
        $('.minicart-header .block-content .no-items').hide();
        $('.minicart-header .block-content .has-items').show();
      }
      else {
        $('.minicart-header .block-content .has-items').hide();
        $('.minicart-header .block-content .no-items').show();
      }

      $(document).on('click', '.minicart-header .btn-remove', function(event) {
        event.preventDefault();
        var productId = $(this).parents('.item').data('product_id');
        Shopify.removeItem(productId, function(cart) {
          ss.doUpdateDropdownCart(cart);
          ss.doUpdateToolsCart(cart);
        });
      })
    },
    initToolsCart: function() {
      if ($('.popup-mycart .cart-header table.list-cart tbody tr').length > 0) {
        $('.popup-mycart .cart-header .no-items').hide();
        $('.popup-mycart .cart-header .has-items').show();
      }
      else {
        $('.popup-mycart .cart-header .has-items').hide();
        $('.popup-mycart .cart-header .no-items').show();
      }

      $(document).on('click', '.so-groups-sticky .popup-mycart .btn-remove', function(event) {
        event.preventDefault();
        var productId = $(this).data('productid');
        Shopify.removeItem(productId, function(cart) {
          ss.doUpdateToolsCart(cart);
          ss.doUpdateDropdownCart(cart);
        });
      });
    },
    doUpdateDropdownCart: function(cart) {
      var template = '<li class="item" data-product_id="{ID}">';
      template += '<div class="product-img-wrap">';
      template += '<a href="{URL}" title="{TITLE}" class="product-image">';
      template += '<img src="{IMAGE}" alt="{TITLE}">';
      template += '</a>';
      template += '<a href="javascript:void(0)"  title="Remove This Item" class="btn-remove">&nbsp;</a>';
      template += '</div>';
      template += '<div class="product-details">';
      template += '<div class="inner-left">';
      template += '<p class="product-name">';
      template += '<a href="{URL}">{TITLE}</a>';
      template += '</p>';
      template += '<div class="product-details-bottom">';
      template += '<span class="title-desc">Quantity:</span>';
      template += '<strong>{QUANTITY}</strong>';
      template += '</div>';
      template += '</div>';
      template += '<div class="product-price">';
      template += '<span class="price">{PRICE}</span>';
      template += '</div>';
      template += '</li>';

      $('#CartCount .cout_item').text(cart.item_count);
      $('.minicart-header #CartTotal .money').html(Shopify.formatMoney(cart.total_price, window.money_format));
      $('.minicart-header .price-total .price .money').html(Shopify.formatMoney(cart.total_price, window.money_format));
      $('.minicart-header .mini-products-list').html('');
      if (cart.item_count > 0) {
        for (var i = 0; i < cart.items.length; i++) {
          var item = template;
          item = item.replace(/\{ID\}/g, cart.items[i].id);
          item = item.replace(/\{URL\}/g, cart.items[i].url);
          item = item.replace(/\{TITLE\}/g, cart.items[i].title);
          item = item.replace(/\{QUANTITY\}/g, cart.items[i].quantity);
          item = item.replace(/\{IMAGE\}/g, Shopify.resizeImage(cart.items[i].image, 'small'));
          item = item.replace(/\{PRICE\}/g, Shopify.formatMoney(cart.items[i].price, window.money_format));
          $('.minicart-header .mini-products-list').append(item);
        }
        $('.minicart-header .btn-remove').click(function(event) {
          event.preventDefault();
          var productId = $(this).parents('.item').data('product_id');
          Shopify.removeItem(productId, function(cart) {
            ss.doUpdateDropdownCart(cart);
          });
        });

        if (ss.ConvertCurrency()) {
          Currency.convertAll(window.shop_currency, jQuery('select[name=currencies] option:selected').val(), '.minicart-header span.money', 'money_format');
        }
      }
      if ($('.mini-products-list li').length > 0) {
        $('.minicart-header .block-content .no-items').hide();
        $('.minicart-header .block-content .has-items').show();
      }
      else {
        $('.minicart-header .block-content .has-items').hide();
        $('.minicart-header .block-content .no-items').show();
      }
    },
    initSwatch: function() {
      jQuery('.swatch :radio').change(function() {
        var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
        var optionValue = jQuery(this).val();
        jQuery(this)
        .closest('form')
        .find('.single-option-selector')
        .eq(optionIndex)
        .val(optionValue)
        .trigger('change');
      });
      Shopify.optionsMap = {};

      Shopify.updateOptionsInSelector = function(selectorIndex) {

        switch (selectorIndex) {
          case 0:
            var key = 'root';
            var selector = $('.single-option-selector:eq(0)');
            break;
          case 1:
            var key = $('.single-option-selector:eq(0)').val();
            var selector = $('.single-option-selector:eq(1)');
            break;
          case 2:
            var key = $('.single-option-selector:eq(0)').val();
            key += ' / ' + $('.single-option-selector:eq(1)').val();
            var selector = $('.single-option-selector:eq(2)');
        }

        var initialValue = selector.val();
        selector.empty();
        var availableOptions = Shopify.optionsMap[key];
        if (availableOptions && availableOptions.length) {
          for (var i = 0; i < availableOptions.length; i++) {
            var option = availableOptions[i];
            var newOption = $('<option></option>').val(option).html(option);
            selector.append(newOption);
          }
          $('.swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(function() {
            if ($.inArray($(this).attr('data-value'), availableOptions) !== -1) {
              $(this).removeClass('soldout').show().find(':radio').removeAttr('disabled', 'disabled').removeAttr('checked');
            } else {
              $(this).addClass('soldout').hide().find(':radio').removeAttr('checked').attr('disabled', 'disabled');
            }
          });
          if ($.inArray(initialValue, availableOptions) !== -1) {
            selector.val(initialValue);
          }
          selector.trigger('change');
        }
      };
      Shopify.linkOptionSelectors = function(product) {
        // Building our mapping object.
        for (var i = 0; i < product.variants.length; i++) {
          var variant = product.variants[i];
          if (variant.available) {
            // Gathering values for the 1st drop-down.
            Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];
            Shopify.optionsMap['root'].push(variant.option1);
            Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);
            // Gathering values for the 2nd drop-down.
            if (product.options.length > 1) {
              var key = variant.option1;
              Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
              Shopify.optionsMap[key].push(variant.option2);
              Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
            }
            // Gathering values for the 3rd drop-down.
            if (product.options.length === 3) {
              var key = variant.option1 + ' / ' + variant.option2;
              Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
              Shopify.optionsMap[key].push(variant.option3);
              Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
            }
          }
        }
        // Update options right away.
        Shopify.updateOptionsInSelector(0);
        if (product.options.length > 1) Shopify.updateOptionsInSelector(1);
        if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
        // When there is an update in the first dropdown.
        $(".single-option-selector:eq(0)").change(function() {
          Shopify.updateOptionsInSelector(1);
          if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
          return true;
        });
        // When there is an update in the second dropdown.
        $(".single-option-selector:eq(1)").change(function() {
          if (product.options.length === 3) Shopify.updateOptionsInSelector(2);
          return true;
        });

      };
    },
    initcolor: function(){
      $( ".product-item li a" ).hover(function() {
        var link = $(this).data('image');
        $(this).parents().find('.s-img').attr('src',link);
      });
    },
    initQuickView: function() {
      $(document).on('click', '.quickview-button a', function() {
        ss.showLoading('.ss-loading');
        var product_handle = $(this).data('id');
        var variants_id = $(this).data('variants_id');
        Shopify.getProduct(product_handle, function(product) {
          var template = $('#quickview-template').html();
          $('.quick-view').html(template);
          var quickview = $('.quick-view');

          quickview.find('.product-title a').html(product.title);
          quickview.find('.product-title a').attr('href', product.url);
          //           quickview.find('.add-to-cart-btn').attr('data-variants_id', variants_id);

          if (quickview.find('.product-vendor span').length > 0) {
            quickview.find('.product-vendor span').text(product.vendor);
          }

          if (quickview.find('.product-type span').length > 0) {
            quickview.find('.product-type span').text(product.type);
          }

          if (quickview.find('.product-inventory span').length > 0) {
            var variant = product.variants[0];
            var inventoryInfo = quickview.find('.product-inventory span');                      
            if (variant.available) {
              if (variant.inventory_management!=null) {
                inventoryInfo.text(variant.inventory_quantity + " " + window.trans_text.in_stock);
              } else {
                inventoryInfo.text(window.trans_text.many_in_stock);
              }
            } else {
              inventoryInfo.text(window.trans_text.out_of_stock);
            }
          }

          if (quickview.find('.product-description').length > 0) {
            var description = product.description.replace(/(<([^>]+)>)/ig, "");
            var description = description.replace(/\[countdown\](.*)\[\/countdown\]/g, "");
            description     = description.split(" ").splice(0, 30).join(" ") + "...";
            quickview.find('.product-description').text(description);
          } else {
            quickview.find('.product-description').remove();
          }

          quickview.find('.price').html(Shopify.formatMoney(product.price, window.money_format));
          quickview.find('.product-item').attr('id', 'product-' + product.id);
          quickview.find('.variants').attr('id', 'product-actions-' + product.id);
          quickview.find('.variants select').attr('id', 'product-select-' + product.id);

          if (product.compare_at_price > product.price) {
            quickview.find('.compare-price').html(Shopify.formatMoney(product.compare_at_price_max, window.money_format)).show();
            quickview.find('.price').addClass('on-sale');
          } else {
            quickview.find('.compare-price').html('');
            quickview.find('.price').removeClass('on-sale');
          }

          quickview.find(".button").on("click", function() {
            var oldValue = quickview.find(".quantity").val(),
                newVal = 1;
            if ($(this).text() == "+") {
              newVal = parseInt(oldValue) + 1;
            } else if (oldValue > 1) {
              newVal = parseInt(oldValue) - 1;
            }
            quickview.find(".quantity").val(newVal);

            if (quickview.find(".total-price").length > 0) {
              ss.updatePricingQuickview();
            }
          });

          if (!product.available) {
            quickview.find("select, input, .total-price, .dec, .inc, .variants label").remove();
            quickview.find(".add-to-cart-btn").text(window.inventory_text.unavailable).addClass('disabled').attr("disabled", "disabled");
          } else {
            quickview.find('.total-price span').html(Shopify.formatMoney(product.price, window.money_format));
//             if (window.use_color_swatch) {
              ss.createQuickViewVariantsSwatch(product, quickview);
//             } else {
//               ss.createQuickViewVariants(product, quickview);
//             }
          }

          ss.initQuickViewAddToCart();

          $('.quick-view').fadeIn(500);
          ss.hideLoading('.ss-loading');

          ss.loadQuickViewImage(product, quickview);

          if ($('.quick-view .total-price').length > 0) {
            $('.quick-view input[name=quantity]').on('change', ss.updatePricingQuickview);
          }

          if (ss.ConvertCurrency()) {
            Currency.convertAll(window.shop_currency, jQuery('select[name=currencies] option:selected').val(), '.quick-view span.money', 'money_format');
          }
        });

        return false
      });

      $(document).on("click", ".quick-view .overlay, .close-quickview", function() {
        ss.closeQuickViewPopup();
        return false;
      });
    },
    showPopup: function (selector) {
      $(selector).addClass('active');
    },
    closeQuickViewPopup: function() {
      $('.quick-view').fadeOut(500);
    },
    hidePopup: function (selector) {
      $(selector).removeClass('active');
    },
    showLoading: function(selector) {
      $(selector).show();
    },
    hideLoading: function(selector) {
      $(selector).hide();
    },
    hidePu: function() {
      $(document).on('click','.popup_bg','.overlay, .close-popup', function() {   
        ss.hidePopup('.modal-pu'); 
        setTimeout(function(){
          $('.loading').removeClass('loaded-content');
        },500);

        return false;
      });
      $(document).on('click touchstart', function(e) {
        var dropdown = $(".modal-pu");
        if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
          dropdown.removeClass('active');      
        }
      });

      $('.close-pu').click(function() {
        $('.modal-pu').removeClass('active');
        return false;              
      }); 
    },
    initProductAddToCart: function() {
      if ($('#AddToCart-product-template').length > 0) {
        $('#AddToCart-product-template').click(function(event) {
          event.preventDefault();
          if ($(this).attr('disabled') != 'disabled') {

            var variant_id = $('form.product-form select[name=id]').val();
            if (!variant_id) {
              variant_id = $('form.product-form input[name=id]').val();
            }
            var quantity = $('form.product-form input[name=quantity]').val();
            if (!quantity) {
              quantity = 1;
            }
            var title = $('h1.product-single__title').html();
            var image = $('#product-featured-image').attr('src');
            ss.doAjaxAddToCart(variant_id, quantity, title, image);
          }
          return false;
        });
      }
    },
    initAddToCart: function () {
      $(document).on('click', '.product-item .btn-addToCart', function(event) {    
        event.preventDefault();
        if ($(this).attr('disabled') != 'disabled') {      
          var productItem = $(this).closest('.product-item');
          var productId = $(this).closest('.product-item').data('id');      
          productId = productId.replace('product-', '');

          var variant_id = $(this).parent('form').find('select[name=id]').val();
          if (!variant_id) {
            variant_id = $(this).parent('form').find('input[name=id]').val();
          }

          var quantity = $(this).parent('form').find('input[name=quantity]').val();
          if (!quantity) {
            quantity = 1;
          }

          var title = $(productItem).find('.product-name').html();
          var image = $(productItem).find('.image-ajax img').attr('src');

          ss.doAjaxAddToCart(variant_id, quantity, title, image); 
          ss.closeQuickViewPopup();
        }

        return false;
      });
    },
    initQuickViewAddToCart: function () {
      $('.quick-view .add-to-cart-btn').click(function(event) {
        event.preventDefault();
        if ($(this).attr('disabled') != 'disabled') {      
          //           variant_id = $(this).data('variants_id');
          var variant_id = $('.quick-view select[name=id]').val();
          if (!variant_id) {
            variant_id = $('.quick-view input[name=id]').val();
          }

          var title = $('.quick-view .product-title a').html();
          var image = $('.quick-view .quickview-image img').attr('src');

          var quantity = $('.quick-view input[name=quantity]').val();
          if (!quantity) {
            quantity = 1;
          }

          ss.doAjaxAddToCart(variant_id, quantity, title, image); 
          ss.closeQuickViewPopup();
        }

        return false;
      });
    },
    btnAddtocart: function() {
      $(window.btn_addToCart).click(function(event) { 
        event.preventDefault();
        if ($(this).attr('disabled') != 'disabled') {
          var variant_id = $(window.product_detail_form +' select[name=id]').val();
          if (!variant_id) {
            variant_id = $(window.product_detail_form +' input[name=id]').val();
          }
          var quantity = $(window.product_detail_form +' input[name=quantity]').val();
          if (!quantity) {
            quantity = 1;
          }
          var title = $(window.product_detail_name).html();
          var image = $(window.product_detail_mainImg).attr('src');
          ss.doAjaxAddToCart(variant_id, quantity, title, image);
        }

        return false;
      });
    },
    doAjaxAddToCart: function(variant_id, quantity, title, image) {  
      $.ajax({
        type: "post",
        url: "/cart/add.js",
        data: 'quantity=' + quantity + '&id=' + variant_id, 
        dataType: 'json', 
        beforeSend: function() {    
          ss.showLoading('.ss-loading');
          if(window.theme_load == "icon"){
            ss.showLoading('.btn-addToCart');
          } else{
            ss.showPopup('.loading'); 
          }
        },
        success: function(response) {
          ss.hideLoading('.ss-loading');
          ss.hidePopup('.quickview-product');       
          if(window.theme_load == "icon"){
            ss.hideLoading('.btn-addToCart');
          } else{
            $('.loading').addClass('loaded-content');         
          }

          switch (window.addcart_susscess) {
            case ('popup'): 

              $('.pu-cart').find('.product-name').html(title);    
              $('.pu-cart').find('.product-image img').attr('src', image);
              $('.pu-cart').find('.product-type .product-type--value').html(response.product_type);
              $('.pu-cart').find('.cart-price-total .price-total').html(response.quantity);
              $('.pu-cart').find('.cart-price-total .price-new').html(Shopify.formatMoney(response.price, window.money_format));
              ss.showPopup('.pu-cart');
              break;
            case ('text'):
              ss.hidePopup('.loading'); 
              ss.hideLoading('.btn-addToCart');
              break;
            case ('noitice'):          
              ss.hidePopup('.loading'); 
              ss.hideLoading('.btn-addToCart');
              $('.product-noitice.susscess').find('.product-name').html(title);
              $('.product-noitice.susscess').find('.product-image img').attr('src', image);
              ss.showNoitice('.product-noitice.susscess');
              break;
            default:
              ss.showPopup('.pu-cart');
              break;
          }

          ss.updateMiniCart();
          ss.updateToolsCart();
          return false;
        },
        error: function(xhr, text) {
          $('.ss-loading').hide();
          $('.ajax-error-message').text($.parseJSON(xhr.responseText).description);
          ss.showPopup('.error-popup');
        }
      });   
    },
    updateMiniCart: function() {
      Shopify.getCart(function(cart) {

        if (window.addcart_susscess='popup') {
          $('.pu-cart').find('.previewCartCheckout-price').html(Shopify.formatMoney(cart.total_price, window.money_format));
          cartTotal = $('.pu-cart').find('.cart-popup-total').data('itemtotal');
          TextCartTotal = cartTotal.replace(/\{itemsTotal\}/g, cart.item_count);

          $('.pu-cart').find('.cart-popup-total').html(TextCartTotal);
        }

        ss.doUpdateDropdownCart(cart);
      });
    },
    updateToolsCart: function() {
      Shopify.getCart(function(cart) {
        ss.doUpdateToolsCart(cart);
      });
    },
    doUpdateToolsCart: function(cart) {
      var template = '';
      template += '<tr>';
      template += '<td class="text-left first"><a href="{URL}"><img class="img-thumbnail img-responsive" src="{IMAGE}" alt="{TITLE}" /></a></td>';
      template += '<td class="text-left"><a href="{URL}">{TITLE}</a></td>';
      template += '<td class="text-right">x&nbsp;{QUANTITY}</td>';
      template += '<td class="text-right total-price">{PRICE}</td>';
      template += '<td class="text-right last"><a href="javascript:;" data-productid="{ID}" return false;" class="btn-remove"><i class="fa fa-trash"></i></a></td>';
      template += '</tr>';

      $('#scartcount').text(cart.item_count);
      $('.popup-mycart .cart-header .cart-bottom table tr td span.money').html(Shopify.formatMoney(cart.total_price, window.money_format));
      $('.popup-mycart .cart-header .cart-bottom table tr td span.money').attr('data-currency-usd', Shopify.formatMoney(cart.total_price, window.money_format));
      $('.popup-mycart .cart-header table.list-cart tbody').html('');

      if (cart.item_count > 0) {
        for (var i = 0; i < cart.items.length; i++) {
          var item = template;
          item = item.replace(/\{ID\}/g, cart.items[i].id);
          item = item.replace(/\{URL\}/g, cart.items[i].url);
          item = item.replace(/\{TITLE\}/g, cart.items[i].title);
          item = item.replace(/\{QUANTITY\}/g, cart.items[i].quantity);
          item = item.replace(/\{IMAGE\}/g, Shopify.resizeImage(cart.items[i].image, '80x80'));
          item = item.replace(/\{PRICE\}/g, Shopify.formatMoney(cart.items[i].price, window.money_format));
          $('.popup-mycart .cart-header table.list-cart tbody').append(item);
        }

        $(document).on('click', '.so-groups-sticky .popup-mycart .btn-remove', function(event) {
          event.preventDefault();
          var productId = $(this).data('productid');
          Shopify.removeItem(productId, function(cart) {
            ss.doUpdateToolsCart(cart);
          });
        });

        if (ss.ConvertCurrency()) {
          Currency.convertAll(window.shop_currency, jQuery('select[name=currencies] option:selected').val(), '.so-groups-sticky span.money', 'money_format');
        }
      }

      if ($('.popup-mycart .cart-header table.list-cart tbody tr').length > 0) {
        $('.popup-mycart .cart-header .no-items').hide();
        $('.popup-mycart .cart-header .has-items').show();
      }
      else {
        $('.popup-mycart .cart-header .has-items').hide();
        $('.popup-mycart .cart-header .no-items').show();
      }
    },
    loadQuickViewImage: function(product, quickviewTemplate) {
      var featuredImage = Shopify.resizeImage(product.featured_image, 'grande');
      quickviewTemplate.find('.quickview-image').append('<a href="' + product.url + '"><img src="' + featuredImage + '" title="' + product.title + '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' + window.theme_load + ') 50% 50% no-repeat;"></div></a>');

      if (product.images.length > 1) {
        var quickViewCarousel = quickviewTemplate.find('.more-view-wrapper ul');
        var count = 0;
        for (i in product.images) {
          if (count < product.images.length) {
            var grande = Shopify.resizeImage(product.images[i], 'grande');
            var compact = Shopify.resizeImage(product.images[i], 'compact');
            var item = '<li><a '+(count == 0 ? 'class="actived"' : '')+' href="javascript:void(0)" data-image="' + grande + '"><img src="' + compact + '"  /></a></li>'

            quickViewCarousel.append(item);
            count = count + 1;
          }
        }

        //quickViewCarousel.find('a').addClass('actived');
        quickViewCarousel.find('a').click(function() {
          var quickViewFeatureImage = quickviewTemplate.find('.quickview-image img');
          var quickViewFeatureLoading = quickviewTemplate.find('.quickview-image div');
          if (quickViewFeatureImage.attr('src') != $(this).attr('data-image')) {
            quickViewFeatureImage.attr('src', $(this).attr('data-image'));
            quickViewFeatureLoading.show();
            quickViewFeatureImage.load(function(e) {
              quickViewFeatureLoading.hide();
              $(this).unbind('load');
              quickViewFeatureLoading.hide();
            });
          }
          quickViewCarousel.find('a').removeClass('actived');
          $(this).addClass('actived');
        });

        quickViewCarousel.owlCarousel({
          items: 3,
          navText: ['',''],
          nav: true,
          margin: 10,
          dots: false
        });

      } else {
        quickviewTemplate.find('.quickview-more-views').remove();
        quickviewTemplate.find('.quickview-more-view-wrapper-jcarousel').remove();
      }
    },
    updatePricingQuickview: function() {
      var regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;
      var unitPriceTextMatch = $('.quick-view .price').text().match(regex);

      if (!unitPriceTextMatch) {
        regex = /([0-9]+[.|,][0-9]+)/g;
        unitPriceTextMatch = $('.quick-view .price').text().match(regex);
      }

      if (unitPriceTextMatch) {
        var unitPriceText = unitPriceTextMatch[0];
        var unitPrice = unitPriceText.replace(/[.|,]/g, '');
        var quantity = parseInt($('.quick-view input[name=quantity]').val());
        var totalPrice = unitPrice * quantity;

        var totalPriceText = Shopify.formatMoney(totalPrice, window.money_format);
        regex = /([0-9]+[.|,][0-9]+[.|,][0-9]+)/g;     
        if (!totalPriceText.match(regex)) {
          regex = /([0-9]+[.|,][0-9]+)/g;
        } 
        totalPriceText = totalPriceText.match(regex)[0];

        var regInput = new RegExp(unitPriceText, "g");
        var totalPriceHtml = $('.quick-view .price').html().replace(regInput, totalPriceText);

        $('.quick-view .total-price span').html(totalPriceHtml);
        if (ss.ConvertCurrency()) {
          Currency.convertAll(window.shop_currency, jQuery('select[name=currencies] option:selected').val(), '.quick-view span.money', 'money_format');
        }
      }
    },
    createQuickViewVariantsSwatch: function(product, quickviewTemplate) {
      if (product.variants.length > 1) {
        for (var i = 0; i < product.variants.length; i++) {
          var variant = product.variants[i];
          var option = '<option value="' + variant.id + '">' + variant.title + '</option>';
          quickviewTemplate.find('form.variants > select').append(option);
        }

        new Shopify.OptionSelectors("product-select-" + product.id, {
          product: product,
          onVariantSelected: selectCallbackQuickview
        });

        var options = "";
        for (var i = 0; i < product.options.length; i++) {
          //Add title for type selected
          quickviewTemplate.find('form.variants > .selector-wrapper').eq(i).find("label").html(product.options[i].name);
          
          options += '<div class="swatch clearfix" data-option-index="' + i + '">';
          options += '<div class="header">' + product.options[i].name + '</div>';
          var is_color = false;
          if (/Color|Colour/i.test(product.options[i].name)) {
            is_color = true;
          }
          var optionValues = new Array();
          for (var j = 0; j < product.variants.length; j++) {
            var variant = product.variants[j];
            var value = variant.options[i];
            var valueHandle = this.convertToSlug(value);
            var forText = 'swatch-' + i + '-' + valueHandle;
            if (optionValues.indexOf(value) < 0) {
              options += '<div data-value="' + value + '" class="swatch-element ' + (is_color ? "color" : "") + valueHandle + (variant.available ? ' available ' : ' soldout ') + '">';
              options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value + '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : ' disabled') + ' />';
              if (is_color) {
                options += '<label for="' + forText + '" style="background-color: ' + valueHandle + ';"></label>';
              } else {
                options += '<label for="' + forText + '">' + value + '</label>';
              }
              options += '</div>';
              if (variant.available) {
                $('.quick-view .swatch[data-option-index="' + i + '"] .' + valueHandle).removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
              }
              optionValues.push(value);
            }
          }
          options += '</div>';
        }
        quickviewTemplate.find('form.variants > select').after(options);
        quickviewTemplate.find('.swatch :radio').change(function() {
          var optionIndex = $(this).parents('.swatch').attr('data-option-index');
          var optionValue = $(this).val();
          $(this).parents('form').find('.single-option-selector').eq(optionIndex).val(optionValue).trigger('change');
        });
      }
      else {
        quickviewTemplate.find('form.variants > select').remove();
        var variant_field = '<input type="hidden" name="id" value="' + product.variants[0].id + '">';
        quickviewTemplate.find('form.variants').append(variant_field);
      }
    },
//     createQuickViewVariants: function(product, quickviewTemplate) {
//       if (product.variants.length > 1) {
//         for (var i = 0; i < product.variants.length; i++) {
//           var variant = product.variants[i];
//           var option = '<option value="' + variant.id + '">' + variant.title + '</option>';
//           quickviewTemplate.find('form.variants > select').append(option);
//         }

//         new Shopify.OptionSelectors("product-select-" + product.id, {
//           product: product,
//           onVariantSelected: selectCallbackQuickview
//         });

//       }
//       var html = '';
//       if (product.options.length > 0) {
//         for (var i = 0; i < product.options.length; i++) {
//           html += '<div class="option-sl">';
//           html+= '<label for="product-select-'+ product.id +'-option-'+i+'">'+product.options[i].name+'</label>';
//           html += '<select class="single-option-selector" data-option="option1" id="product-select-'+ product.id +'-option-'+i+'">';
//           for (var j=0; j < product.options[i].values.length; j++) {
//             html += '<option value="'+product.options[i].values[j]+'">'+product.options[i].values[j]+'</option>';
//           }
//           html += '</select>';
//           html += '</div>';
//         }
//         quickviewTemplate.find('form.variants > .product-variants').append(html);
//       }

//       if (product.variants.length > 1) {

//       }
//       else {
//         quickviewTemplate.find('form.variants .product-variants').remove();
//         var variant_field = '<input type="hidden" name="id" value="' + product.variants[0].id + '">';
//         quickviewTemplate.find('form.variants').append(variant_field);
//       }
//     },
    convertToSlug: function(text) {
      return text.toLowerCase().replace(/[^a-z0-9 -]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
    },
    switchImage: function (src, imgObject, el) {
      var $el = $(el);
      $el.attr('src', src);
    },
    initaddjs: function(){
      $(document).ready(function() {
        $('.filter-category a').on("click", function () {
          var number = $(this).find('span').html();
          $('.product-count').text(number + ' products');
        });  

        $('.dropdown-toggle').on("click", function (e) {
          $('.dropdown-content').stop().slideUp(300);
          $(this).next().stop().slideToggle(300);
          e.preventDefault();
        }); 
        $('.dropdown-content li').on("click", function (e) {
          $(this).parent().slideUp(300);
        }); 
        // click header search header 


        $( ".search-header-w .icon-search" ).click(function() {
          $('.form_search').slideToggle(200);
          $(this).toggleClass('active');
        });

      });

    } ,
    initThumbnailOwlCarousel: function() {
      $(document).ready(function() {
        $('.thumbnails-slide .owl-carousel').each(function(){
          $(this).owlCarousel({
            navigation: true,
            scrollPerPage: true,
            stopOnHover: true,     
            navigation: true,
            navText: ['',''],
            nav: true,
            margin: 8,
            dots: false,
            items: 4,
            itemsDesktopSmall: [991, 3],
            itemsTablet: [768, 3],
            itemsTabletSmall: [767, 2],
            itemsMobile : [479, 2]
          }); 
        });

        $(".header-top-right .toplinks-wrapper > li").mouseenter(function(){
          $(".header-top-right .toplinks-wrapper > li.account").addClass('inactive');
        });

        $(".header-top-right .toplinks-wrapper > li").mouseleave(function(){
          $(".header-top-right .toplinks-wrapper > li.account").removeClass('inactive');
        });

        $(".header-top-right .toplinks-wrapper > li.account").mouseenter(function(){
          $(".header-top-right .toplinks-wrapper > li.account").removeClass('inactive');
        });
        $('.toggle-menu .caret').click(function() {
          $(this).closest('.toggle-content').find('.sub-menu').slideToggle("fast");
          return false;              
        }); 
        $screensize = $(window).width();
        if ($screensize > 1300) {
          $('#my_account').hover(
            function(){$(this).find('.btn-group').toggleClass('open');}
          )
          $('#my_account').hover(
            function(){$(this).toggleClass('open');}
          )
        } else {
          $('#my_account').click(
            function(){$(this).find('.btn-group').toggleClass('open');}
          )
          $('#my_account').click(
            function(){$(this).toggleClass('open');}
          )
        }

      });
    },
    productsTabs: function() {
      $('.ltabs-tabs-container').each(function() {
        var $this = $(this),
            $inner = $this.find('.tabs-content'),
            cache = [];

        $this.find('.tabs-menu_title li').on('click', function(e) {
          e.preventDefault();

          var $this = $(this),
              ajaxurl = $this.data('atts'),
              index = $this.index();

          loadTab(ajaxurl, index, $inner, $this, cache,  function(data) {
            $inner.html(data);

          });

        });

        var $nav = $this.find('.tabs-menu'),
            $subList = $nav.find('ul'),
            time = 300;

        $nav.on('click', '.open-title-menu', function() {
          var $btn = $(this);

          if( $subList.hasClass('list-shown') ) {
            $btn.removeClass('toggle-active');
            $subList.removeClass('list-shown');
          } else {
            $btn.addClass('toggle-active');
            $subList.addClass('list-shown');
            setTimeout(function() {
              $('body').one('click', function(e) {
                var target = e.target;
                if ( ! $(target).is('.tabs-menu') && ! $(target).parents().is('.tabs-menu')) {
                  $btn.removeClass('toggle-active');
                  $subList.removeClass('list-shown');
                  return false;
                }
              });
            },10);
          }

        })

        .on('click', 'li', function() {
          var $btn = $nav.find('.open-title-menu'),
              text = $(this).text();

          if( $subList.hasClass('list-shown') ) {
            $subList.removeClass('list-shown');
          }
        });

      });

      var loadTab = function(ajaxurl, index, holder, btn, cache, callback) {
        btn.parent().find('.active-tab-title').removeClass('active-tab-title');
        btn.addClass('active-tab-title')
        holder.addClass('loading').parent().addClass('element-loading');
        btn.addClass('loading');

        $.ajax({
          dataType: "html",
          type: 'GET',
          url: ajaxurl,
          success: function(data) {
            //cache[index] = data;
            callback( data );
          },
          error: function(data) {
            console.log('ajax error');
          },
          complete: function() {
            $('.product-card__gallery .item-img').on("mouseover touchstart", function (e) {
              $(this).addClass('thumb-active').siblings().removeClass('thumb-active');
              var thumb_src = $(this).attr("src");
              $(this).closest('.product-item-container').find('.img-responsive.s-img').attr("src",thumb_src);
            });
            ss.initCountd();
            ss.initlOwlCarousel();
            //product review
            if( $(".spr-badge").length > 0 ) {
              $.getScript(window.location.protocol + "//productreviews.shopifycdn.com/assets/v4/spr.js");
            }
            holder.removeClass('loading').parent().removeClass('element-loading');
            btn.removeClass('loading');
          },
        });
      };
    },
    ConvertCurrency: function() {
      return window.show_multiple_currencies && Currency.currentCurrency != shopCurrency;
    },
    normalNav: function(){
      $(window).scroll(function() {
        if ($(this).scrollTop() >= 36) {
          $('.header.header-fixed').addClass('stickytop');
        }
        else {
          $('.header.header-fixed').removeClass('stickytop');
        }
      });
    }

  }
  })(jQuery)
