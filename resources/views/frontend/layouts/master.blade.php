<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=1">
  <meta name="theme-color" content="#7796a8">
  <link rel="canonical" href="index.html">   
  <link rel="shortcut icon" href="../cdn.shopify.com/s/files/1/2435/7365/t/3/assets/favicona7e0.png?v=11543105131693196194" type="image/x-icon" />
  @yield('title')
  <meta name="description" content="EtroStore is a responsive ecommerce Shopify template that will be ideal for online shopping sites by its multipurpose.">
  <!-- Scrip -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:600" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

  
  <link href="{{ asset('css/theme.scss8ced.css') }}" rel="stylesheet" type="text/css" media="all" />
  
  <link href="{{ asset('css/style-sections.scss72a2.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('css/style-theme.scss79b6.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('css/style-config.scssd297.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('css/style-respon.scss22f8.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('css/animate16ee.css') }}" rel="stylesheet" type="text/css" media="all" />
  
  <link href="{{ asset('css/owl.carousel.min22a5.css') }}" rel="stylesheet" type="text/css" media="all" />

  <link href="{{ asset('css/ss_slider584b.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('css/khala.css') }}" rel="stylesheet" type="text/css" media="all" />

    
@yield('css')
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/ss_custom6b66.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery-cookie.min60ca.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/libsbc3d.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.minec02.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.elevateZoom.min74c5.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.nav0db3.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap-notify.minbbbe.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/wish-list3510.js') }}" type="text/javascript"></script>

  <script src="{{ asset('js/khala.js') }}" type="text/javascript"></script>
  
<script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 
        'Poppins:100,200,300,400,500,600,700,800,900'
        ,
        'Roboto Condensed:100,200,300,400,500,600,700,800,900'
        ,
        'Roboto:100,200,300,400,500,600,700,800,900'
        ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); 
</script>
    <script src="{{ asset('js/jquery.themepunch.tools.min80db.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.themepunch.revolution.min22e2.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      var revapi;
      jQuery(document).ready(function($) {
        revapi = $('.tp-banner-1507606259201').revolution({
          delay:5000,
          startwidth: 386,
          startheight:591,
          startWithSlide: 0,
          hideThumbs:10,
          fullWidth:"off",
          navigationType: "bullet",
          navigationStyle: "round",
          navigationArrows: "none",
          fullScreen: 'off',
          hideTimerBar: 'on'
      })
    })
    </script>
</head>

<body class="template-index">
    <div id="wrapper" class="page-wrapper wrapper-full effect_10">
       <!--   Loading Site -->
        <div id="loadingSite">
          <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
        </div>
        <!--   end Loading Site -->
        <div id="shopify-section-header" class="shopify-section">
        </div>
        <!-- Header Start -->
        @include('frontend.components.header')
        <!-- Header End -->
        <div class="quick-view"></div>
        <div class="page-container" id="PageContainer">

            @yield('content')
            <!-- footer -->
            <div id="shopify-section-footer" class="shopify-section">
              @include('frontend.components.footer')
            </div>
            <!-- tool icon -->
            <div id="shopify-section-ss-tools" class="shopify-section">
                <script src="{{asset('js/jquery.tmpl.min.js')}}" type="text/javascript"></script>
                @include('frontend.home.tool')
            </div>
            <!-- facebook -->
            <div id="shopify-section-ss-facebook-message" class="shopify-section">
                @include('frontend.home.facebook')
            </div>
            
        </div>
        
        
        {{--  
        <script src="{{ asset('js/currencies.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/jquery.currencies.minb15e.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
              var currentAjaxRequest = null;
              var searchForms = $('form[action="/search"]').css('position','relative').each(function() {
                var input = $(this).find('input[name="q"]');
                var offSet = input.position().top + input.innerHeight();
                $('<ul class="box-results"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo($(this)).hide();
                input.attr('autocomplete', 'off').bind('keyup change', function() {
                  var term = $(this).val();
                  var form = $(this).closest('form');
                  var searchURL = '/search?type=product&q=' + term;
                  var resultsList = form.find('.box-results');
                  if (term.length >= 3 && term != $(this).attr('data-old-term')) {
                    $(this).attr('data-old-term', term);
                    if (currentAjaxRequest != null) currentAjaxRequest.abort();
                    currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
                      resultsList.empty();
                      if(data.results_count == 0) {
                        resultsList.hide();
                    } else {
                        $.each(data.results, function(index, item) {
                          var link = $('<a></a>').attr('href', item.url);
                          link.append('<span class="thumbnail"><img src="' + item.thumbnail + '" /></span>');
                          link.append('<span class="title_name">' + item.title + '</span>');
                          link.wrap('<li></li>');
                          resultsList.append(link.parent());
                      });
                        if(data.results_count > 5) {
                          resultsList.append('<li class="a-center"><span class="btn btn-results"><a href="' + searchURL + '"> All Results (' + data.results_count + ')</a></span></li>');
                      }
                      resultsList.fadeIn(200);
                  }        
              });
                }
            });
            });
              $('body').bind('click', function(){
                $('.box-results').hide();
            });
          })
        </script>
        --}}
        <script src="{{ asset('js/owl.carousel.min29bc.js') }}" type="text/javascript"></script>
        
        @yield('js')
    </div>
  <!--   Loading Icon add to cart -->
    <div class="ss-loading" style="display: none;"></div>
    </div> 
</body>

</html>
