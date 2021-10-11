 
  <footer data-section-id="footer" data-section-type="header-section" class="site-footer clearfix">
    <div class="footer-1">
      <div class="footer-top">
        <div class="container">
          <div class="footer-wrapper row">
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-xxs-6 ft-item">
              <div class="footer-block">
                <h3 class="footer-block-title"> Công nghệ</h3>
                <ul class="footer-block-content">
                  @foreach(getFooterCat(2) as $item)
                  <li>
                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}">{{$item -> title}}</a>
                  </li>
                  @endforeach
                  
                </ul>
              </div>    
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-xxs-6 ft-item">
              <div class="footer-block">
                <h3 class="footer-block-title"> Thời trang làm đẹp</h3>
                <ul class="footer-block-content">
                  @foreach(getFooterCat(1) as $item)
                  <li>
                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}">{{$item -> title}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>          
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-xxs-6 ft-item">
              <div class="footer-block">
                <h3 class="footer-block-title"> Thiết kế nội thất</h3>
                <ul class="footer-block-content">
                   @foreach(getFooterCat(3) as $item)
                  <li>
                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}">{{$item -> title}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>      
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-xxs-6 ft-item">
              <div class="footer-block">
                <h3 class="footer-block-title"> Điện tử</h3>
                <ul class="footer-block-content">
                   @foreach(getFooterCat(19) as $item)
                  <li>
                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}">{{$item -> title}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>      
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-xxs-6 ft-item">
              <div class="footer-block">
                <h3 class="footer-block-title"> Đồ biển</h3>
                <ul class="footer-block-content">
                   @foreach(getFooterCat(1) as $item)
                  <li>
                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}">{{$item -> title}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>      
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-xxs-6 ft-item">
              <div class="footer-block">
                <h3 class="footer-block-title"> Đồ dùng gia đình</h3>
                <ul class="footer-block-content">
                   @foreach(getFooterCat(2) as $item)
                  <li>
                    <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}">{{$item -> title}}</a>
                  </li>
                  @endforeach
                </ul>
              </div>      
            </div>
            
          </div>
        </div>
      </div>
      <div class="footer-center">
        <div class="container a-center">
          <div class="footer-inner">
            
            <div class="inner_menu font-ct">
              <ul>
                <li>
                  <a href="{{ url('/') }}">Trang chủ</a>
                </li>
                <li>
                    <a href="{{ url('cua-hang') }}">Cửa hàng</a>
                </li>
                <li>
                    <a href="{{ url('tin-tuc/giới-thiệu/5') }}">Giới thiệu</a>
                </li>
                <li>
                    <a href="{{ url('tin-tuc') }}">Tin tức</a>
                </li>
                
                <li>
                    <a href="{{ url('lien-he') }}">Liên hệ</a>
                </li>
              </ul>
            </div>
            
            <div class="inner_payment a-center">
              <a href="#" title="Khala store">
                <img class="img-payment" alt="Khala store" src="{{asset('images/ico-payment92f9.png')}}" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="goToTop" class="hidden-xs"><span></span></div>
      <div class="footer-bottom ">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copyright a-center">
              <address>Khala © 2021 Demo Store. All Rights Reserved.</address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
