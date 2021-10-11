<div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 100px">
  <a class="sticky-categories" data-target="popup" data-popup="#popup-categories"><span>Danh mục sản phẩm</span><i class="fa fa-align-justify"></i></a>
  <a class="sticky-mycart" data-target="popup" data-popup="#popup-mycart"><span>Giỏ hàng</span><i class="fa fa-shopping-cart"></i></a>
  <a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Tài khoản</span><i class="fa fa-user"></i></a>
  <a class="sticky-mysearch" data-target="popup" data-popup="#popup-mysearch"><span>Tìm kiếm</span><i class="fa fa-search"></i></a>
  <a href="{{ url('san-pham-gan-day') }}" class="sticky-recent" ><span>Sản phẩm xem gần đây</span><i class="fa fa-recent"></i></a>
  <a class="sticky-backtop" data-target="scroll" data-scroll="html"><span>Lên đầu trang</span><i class="fa fa-angle-double-up"></i></a>
  <!-- pop up category -->
  <div class="popup popup-categories popup-hidden" id="popup-categories">
    <div class="popup-screen">
      <div class="popup-position">
        <div class="popup-container popup-small">
          <div class="popup-header">
            <span><i class="fa fa-align-justify"></i>Tất cả danh mục sản phẩm</span>
            <a class="popup-close" data-target="popup-close" data-popup-close="#popup-categories">&times;</a>
          </div>
          <div class="popup-content">
            <div class="nav-secondary">
              <ul>
                @foreach($categories_share as $item)
                <li>
                  <a href="{{ url('danh-muc-san-pham/'.slugify($item -> title,'-').'/'.$item -> id) }}"><i class="fa fa-chevron-down nav-arrow"></i>{{$item -> title}}</a>
                </li>
                @endforeach
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- pop up mycart -->
  <div class="popup popup-mycart popup-hidden" id="popup-mycart">
    <div class="popup-screen">
      <div class="popup-position">
        <div class="popup-container popup-small">
          <div class="popup-html">
            <div class="popup-header">
              <span><i class="fa fa-shopping-cart"></i>Giỏ hàng</span>
              <a class="popup-close" data-target="popup-close" data-popup-close="#popup-mycart">&times;</a>
            </div>
            <div class="popup-content">
              <div class="cart-header">
                @if(count(getProductCart()) > 0)      
                <div class="has-items">
                  <div class="notification gray ">
                    <p>Có <span class="text-color"><span id="scartcount">{{count(getProductCart())}}</span> sản phẩm</span> trong giỏ hàng</p>
                  </div>
                  <table class="table table-striped list-cart">
                    <tbody>
                      <!-- liet ke san pham trong gio hang -->
                      @foreach(getProductCart() as $item)
                      <tr>
                        <td class="text-left first">
                          <a href="{{ url('san-pham/'.slugify($item -> product_name,'-').'/'. $item -> product_id)}}">
                            <img class="img-thumbnail img-responsive" src="{{asset('uploads/products-daidien/'.$item -> image)}}" alt="{{$item -> product_name}}" width="80px" height="80px">
                          </a>
                        </td>
                        <td class="text-left">
                          <a href="{{ url('san-pham/'.slugify($item -> product_name,'-').'/'. $item -> product_id)}}">{{$item -> product_name}}</a>
                        </td>
                        
                        <td class="text-right total-price"><span class="money">{{formatMoney($item -> price)}}</span></td>
                        <td class="text-right last">
                          <a href="{{url('/cart/delete-product/'.$item -> id)}}"  ><i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <div class="cart-bottom">
                    <table class="table table-striped">
                      <tr>
                        <td class="text-left"><strong>Tổng</strong></td>
                        <td class="text-right"><span class='money'>{{formatMoney(getTotalCart())}}</span></td>
                      </tr>
                    </table>
                    <p class="text-center">
                      <a href="{{ url('cart') }}" class="btn btn-view-cart"><strong>Xem giỏ hàng</strong></a>
                      <a href="{{ url('checkout') }}" class="btn btn-checkout"><strong>Thanh toán</strong></a>
                    </p>
                  </div>  
                </div>
                
                @else
                <div class="notification gray no-items">
                  <i class="fa fa-shopping-cart info-icon"></i>
                  <p>Giỏ hàng trống.</p>
                </div>
                @endif
              </div>
            </div>      
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- pop up myaccount-->
  <div class="popup popup-myaccount popup-hidden" id="popup-myaccount">
    <div class="popup-screen">
      <div class="popup-position">
        <div class="popup-container popup-small">
          <div class="popup-html">
            <div class="popup-header">
              <span><i class="fa fa-user"></i>Tài khoản</span>
              <a class="popup-close" data-target="popup-close" data-popup-close="#popup-myaccount">&times;</a>
            </div>
            <div class="popup-content">
              <div class="form-content">
                <div class="row space">
                  @if(empty(Auth::check()))
                  <div class="col col-sm-4 col-xs-6 txt-center">
                    <div class="form-box">
                      <a class="account-url" href="{{ url('/front-register') }}">
                        <span class="ico ico-32 ico-sm"><i class="fa fa-register"></i></span><br>
                        <span class="account-txt">Đăng kí</span>
                      </a>
                    </div>
                  </div>

                  <div class="col col-sm-4 col-xs-6 txt-center">
                    <div class="form-box">
                      <a class="account-url" href="{{ url('/front-login') }}">
                        <span class="ico ico-32 ico-sm"><i class="fa fa-login"></i></span><br>
                        <span class="account-txt">Đăng nhập</span>
                      </a>
                    </div>
                  </div>

                  <div class="col col-sm-4 col-xs-6 txt-center">
                    <div class="form-box">
                      <a class="account-url" href="{{ url('cart') }}">
                        <span class="ico ico-32 ico-sm"><i class="fa fa-shoppingcart"></i></span><br>
                        <span class="account-txt">Giỏ hàng</span>
                      </a>
                    </div>
                  </div>
                  @else

                  <div class="col col-sm-4 col-xs-6 txt-center">
                    <div class="form-box">
                      <a class="account-url" href="{{ url('my-account') }}">
                        <span class="ico ico-32 ico-sm"><i class="fa fa-account"></i></span><br>
                        <span class="account-txt">Quản lý</span>
                      </a>
                    </div>
                  </div>

                  <div class="col col-sm-4 col-xs-6 txt-center">
                    <div class="form-box">
                      <a class="account-url" href="{{ url('cart') }}">
                        <span class="ico ico-32 ico-sm"><i class="fa fa-shoppingcart"></i></span><br>
                        <span class="account-txt">Giỏ hàng</span>
                      </a>
                    </div>
                  </div>

                  <div class="col col-sm-4 col-xs-6 txt-center">
                    <div class="form-box">
                      <a class="account-url" href="{{ url('/front-logout') }}">
                        <span class="ico ico-32 ico-sm"><i class="fa fa-history"></i></span><br>
                        <span class="account-txt">Đăng xuất</span>
                      </a>
                    </div>
                  </div>

                  @endif

                </div>
              </div>
              <div class="clear"></div>
            </div>          
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- pop up search -->
  <div class="popup popup-mysearch popup-hidden" id="popup-mysearch">
    <div class="popup-screen">
      <div class="popup-position">
        <div class="popup-container popup-small">
          <div class="popup-html">
            <div class="popup-header">
              <span><i class="fa fa-search"></i>Tìm kiếm</span>
              <a class="popup-close" data-target="popup-close" data-popup-close="#popup-mysearch">&times;</a>
            </div>
            <div class="popup-content">
              <div class="form-content">
                <div class="row space">
                  <form class="formSearch" action="{{route('search.product')}}" method="post">
                    @csrf
                    <div class="col">
                      <div class="form-box">
                        
                          <input type="text" name="search_product"  placeholder="Từ khóa" id="input-search" class="field" />
                          <i class="fa fa-search sbmsearch"></i>
                        
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-box">
                        <button type="submit" id="button-search" class="btn button-search">Tìm</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>