<div class="model-popup">
            <!--   Popup error -->
            <div class="error-popup popup_cart modal-pu">
                <div class="popup_content">
                    <div class="container a-center">
                        <div class="popup_inner">
                            <a class="popup_close close-pu" href="#" title=""><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 37 40"><path d="M21.3 23l11-11c.8-.8.8-2 0-2.8-.8-.8-2-.8-2.8 0l-11 11-11-11c-.8-.8-2-.8-2.8 0-.8.8-.8 2 0 2.8l11 11-11 11c-.8.8-.8 2 0 2.8.4.4.9.6 1.4.6s1-.2 1.4-.6l11-11 11 11c.4.4.9.6 1.4.6s1-.2 1.4-.6c.8-.8.8-2 0-2.8l-11-11z"/></svg></a>
                            <div class="modal-header ">
                                <p class="cart-success-messages"> Transaction failed</p>
                            </div>
                            <div class="modal-body cart-popup-action">
                                <p class="ajax-error-message"></p>
                                <button class="btn btn-dark close-pu"><span class="">Return to store</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="popup_bg">&nbsp;</div>
                </div>
            </div>
            <!--   Popup Cart -->
            <div class="popup_cart bg_1 modal-pu pu-cart">
                <div class="popup_content">
                    <div class="container a-center">
                        <div class="popup_inner">
                            <a class="popup_close close-pu" href="#" title=""><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 37 40"><path d="M21.3 23l11-11c.8-.8.8-2 0-2.8-.8-.8-2-.8-2.8 0l-11 11-11-11c-.8-.8-2-.8-2.8 0-.8.8-.8 2 0 2.8l11 11-11 11c-.8.8-.8 2 0 2.8.4.4.9.6 1.4.6s1-.2 1.4-.6l11-11 11 11c.4.4.9.6 1.4.6s1-.2 1.4-.6c.8-.8.8-2 0-2.8l-11-11z"/></svg></a>
                            <div class="modal-header ">
                                <p class="cart-success-messages"> Added to cart successfully. What&#39;s next?</p>
                            </div>
                            <div class="modal-body ">
                                <div class="row">
                                    <div class="col-lg-9 col-md-6 col-sm-12 cart-popup-left">
                                        <div class="product-image col-lg-6">
                                            <img alt="" src="../cdn.shopify.com/s/files/1/2435/7365/t/3/assets/ajax-loader2ab5.gif?v=4135686330247201572" />
                                        </div>
                                        <div class="cart-popup-info col-lg-6">
                                          <h3 class="product-name"></h3>
                                          <p class="product-type"><span class="label-quantity"> Product type:</span>  <span class="product-type--value">1</span>  </p>
                                          <p class="cart-price-total price"><span class="price-total">1</span> x <span class="price-new"> $00.00</span>  </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 cart-popup-right">
                                        <div class="cart-popup-action">
                                            <button class="btn btn-danger" onclick="window.location='cart.html'">Check out</button>
                                            <div class="cart-popup-imgbottom">
                                                Order subtotal
                                                <span class="previewCartCheckout-price">$00.00</span>       
                                                <p class="cart-popup-total" data-itemTotal="Your cart contains {itemsTotal} items"> </p>
                                            </div>
                                            <a href="#" class="btn btn-dark close-pu">Continue shopping</a>
                                            <button class="btn btn-dark" onclick="window.location='cart.html'">View shopping bag</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup_bg">&nbsp;</div>
                </div>
            </div>
            <!--   Newleter -->
            <script src="{{asset('js/ss-newletter-popupe753.js')}}" type="text/javascript"></script>
            <div id="container-module-newletter" class="hidden-md hidden-sm hidden-xs">
                <div class="ss_newletter_custom_popup_bg popup_bg"></div> 
                <div class="module main-newsleter-popup ss_newletter_custom_popup ss_newletter_oca_popup" id="ss_newletter_custom_popup">
                    <div class="popup-wraper " style="width: 800px;">
                        <div class="ss-custom-popup ss-custom-oca-popup" style="background: url({{asset('images/bg-popup.png')}}) no-repeat white;"> 
                            <div class="modcontent"> 
                                <div class="oca_popup" id="test-popup">
                                    <div class="popup-content">
                                        <div class="short-description">Khuyến mãi hàng ngày</div>
                                        <div class="popup-title"><h3>Đăng ký nhận khuyến mãi</h3></div>
                                        <form action="{{route('newsletter.store')}}" method="post" class="formNewsletter clearfix">
                                            @csrf
                                            <div class="input-group password__input-group">
                                                <input type="email"  placeholder="Nhập email của bạn" name="email" id="mail" class="form-control" aria-label="Join our mailing list" required>
                                                <span class="input-group__btn">
                                                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe">
                                                        <span class="newsletter__submit-text--large">Đăng ký</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                        <label class="hidden-popup">
                                          <input type="checkbox" value="1" name="hidden-popup">
                                          <span class="inline">&nbsp;&nbsp;Không hiển thị hộp đăng ký này nữa</span>
                                        </label>
                                        <div class="socials-popup">
                                            <ul class="social-list">
                                                <li><a href="#" title="title"><i class="fa fa-facebook"></i><span class="hidden">Facebook</span></a></li>
                                                <li><a href="#" title="title"><i class="fa fa-twitter"></i><span class="hidden">Twitter</span></a></li>
                                                <li><a href="#" title="title"><i class="fa fa-google-plus"></i><span class="hidden">Google</span></a></li>
                                                <li><a href="#" title="title"><i class="fa fa-tumblr"></i><span class="hidden">Tumblr</span></a></li>
                                                <li><a href="#" title="title"><i class="fa fa-pinterest"></i><span class="hidden">Pinterest</span></a></li>
                                                <li><a href="#" title="title"><i class="fa fa-linkedin"></i><span class="hidden">Linkedin</span></a></li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <button title="Close" type="button" class="popup-close">×</button> 
                        </div> 
                    </div> 
                </div>
            </div>
            <!-- Social Fixed -->
            <div class="socials-wrap hidden-sm hidden-xs">
                <ul>
                    <li class="li-social facebook-social">
                      <a title="Facebook" href="http://www.facebook.com/MagenTech" target="_blank"> 
                        <span class="fa fa-facebook icon-social"></span>
                        </a>
                    </li>
                    <li class="li-social twitter-social">
                      <a title="Twitter" href="https://twitter.com/MagenTech" target="_blank"> 
                        <span class="fa fa-twitter icon-social"></span>
                        </a>
                    </li>
                    <li class="li-social google-social">
                      <a title="Google+" href="https://plus.google.com/u/0/+Smartaddons" target="_blank"> 
                        <span class="fa fa-google-plus icon-social"></span>
                        </a>
                    </li>
                    <li class="li-social pinterest-social">
                      <a title="Pinterest" href="https://www.pinterest.com/magentech/" target="_blank"> 
                        <span class="fa fa-pinterest icon-social"></span>
                        </a>
                    </li>
                    <li class="li-social instagram-social">
                      <a title="Instagram" href="http://instagram.com/shopify" target="_blank"> 
                        <span class="fa fa-instagram icon-social"></span>
                        </a>
                    </li>
                </ul>
            </div>
            
            
            <div class="clearfix" id="quickview-template" style="display:none">
                <div class="overlay"></div>
                <div class="content clearfix">
                    <a href="javascript:void(0)" class="close-quickview"><i class="fa fa-remove"></i></a> 
                    <div class="row">
                        <div class="qv-left product-img-box col-md-5">
                            <div class="quickview-image"></div>
                                <div class="more-view-wrapper">
                                    <ul class="product-photo-thumbs owl-carousel">
                                    </ul>
                                </div>
                            </div>
                            <div class="qv-right product-shop col-md-7">
                                <div class="product-item">
                                    <h2 class="product-title"><a>&nbsp;</a></h2>
                                    <div class="box-price">
                                      <span class="price price-new"></span>
                                      <span class="compare-price price-old"></span>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-inventory">
                                        <label>Availability</label>
                                        <span></span>
                                        </p>
                                        <p class="product-type">
                                            <label>Product type</label>
                                            <span></span>
                                        </p>
                                        <p class="product-vendor">
                                            <label>Vendor</label>
                                            <span></span>
                                        </p>
                                    </div>
                                    <p class="product-description"></p>
                                    <div class="details clearfix">
                                        <form action="https://ss-etrostores.myshopify.com/cart/add" method="post" class="variants">
                                            <select name='id' style="display:none"></select>
                                            <div class="product-variants clearfix">
                                            </div>
                                            <div class="add-to-box clearfix">
                                                <div class="total-price">
                                                    <label>Subtotal</label><span class="money"></span>
                                                </div>
                                                <div class="wrap-qty">
                                                    <label>Qty:</label>
                                                    <div class="qty-set">
                                                        <input type="text" name="quantity" value="1" class="quantity">
                                                        <div class="inc button">+</div>
                                                        <div class="dec button">-</div>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <button type="button" class="btn add-to-cart-btn" data-variants_id="">Add to cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>