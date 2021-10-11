$(function () {
    //khala
   $('.click-show-hide-comment').on('click', function (e) {
       
       $('.form-comment').toggle();
       
        e.preventDefault();
    });
   

    //change price click size
    $('.change-price').on('change', function (e) {
        //gan size den input field hidden size khi click vao size(L,M..)

        let value_size = this.options[this.selectedIndex].text;
        
        //get duong dan cho attr data-url
        let urlRequest = this.value;
        

        if(value_size == '------'){
          
            let html = this.value + ' đ<input type="hidden" id = "product_price" name="product_price" value="' + this.value + '">';
            
              $('.new-price').html(html);
            
        }
        else{
          
           $.ajax({
                  type: 'GET',
                  url: urlRequest,
                  success: function(data){
                    let html = data + ' đ<input type="hidden" id = "product_price" name="product_price" value="' + data + '">';
                    if(data.code = 200){
                      $('.new-price').html(html);
                        //append input type hidden to size to get value size add to cart
                        let inputHidden = '<input type="hidden"  name="product_size" id="product_size" value="' + value_size + '" >';
                        $('.change-price').append(inputHidden);
                      }
                      $("#product_size").val(value_size);
                    },
                    error: function() {
                      /* Act on the event */
                      alert('có lỗi xảy ra,vui lòng thử lại sau hoặc báo admin');
                    }
                 });  
        }

       

    });

    //change color
    $('.change-color').on('click', function (e) {
         
         //gan color den input field hidden size khi click vao size(L,M..)
         let value_color = $(this).data('value');

         alert(value_color);
         $(this).addClass('color-active');
         
         let inputHiddenColor = '<input type="hidden"  name="product_color" id="product_color" value="' + value_color + '" >';
         $('.change-color').append(inputHiddenColor);
        e.preventDefault();
        
    });

     //xy ly ajax cho add to cart o cac trang list product
    $('.btn-add-cart').on('click' ,function(e){
        e.preventDefault();
        //get cac gia tri 
        let values = $(this).attr('value');
        let arrValues = values.split("khala");
        let url = $(this).attr('href');
       
        
        //goi ajax
       
        $.ajax({
                type: 'get',
                url: url,
                data: {
                    product_id: arrValues[0],
                    product_code: arrValues[1],
                    product_name: arrValues[2],
                    product_price: arrValues[3],
                    product_quantity: 1
                },
                beforeSend: function() {    
                    $('.ss-loading').show();
                    
                },
                //btn-addToCart
                success: function(data){
                   $('.ss-loading').hide();
                    
                    alert('Thêm vào giỏ hàng thành công');
                    location.reload();

                },
                error: function() {
                    /* Act on the event */
                    alert('có lỗi xảy ra,vui lòng thử lại sau hoặc báo admin');
                }
            });
             
        
    });

    //lay tu file ss_custom6b
    
    //end lay tu file ss_custom

    //xu ly cho rating
    let listStart = $(".rating-stars .start-a");

    listStart.mouseover(function(event) {

        let $this = $(this);
        //lay value hien tai de so sach trong vong each
        let number = $this.attr('data-key');
        //gan value cho the hidden number_rating
        $('.number_rating').val(number);
        //xy ly phan active
        listStart.removeClass('active');
        $.each(listStart, function(key,value){
            if( key + 1 <= number){
                $(this).addClass('active');
            }
        });
        //hien thi select tot,tam duoc khi hover lên ngôi sao
        $('#rating').val($this.attr('data-key')).show();

    });

    $('#submit_review').on('click' ,function(e){
        e.preventDefault();
        //get cac gia tri message,number,url
        let content = $('#reply-message').val();
        let number = $('.number_rating').val();
        let url = $(this).attr('href');
        
        //goi ajax
        if(content && number){
            $.ajax({
                    type: 'get',
                    url: url,
                    data: {
                        number: number,
                        content: content
                    },
                    success: function(data){
                        if(data.code == '1'){
                            alert('Gửi Đánh giá thành công');
                            location.reload();
                        }

                    },
                    error: function() {
                        /* Act on the event */
                        alert('có lỗi xảy ra,vui lòng thử lại sau hoặc báo admin');
                    }
                });
            }  
        
    });

    // button giao hang dia chi khac
    $('.checkout-toggle').on('click', function() {
        $('.open-toggle').slideToggle(1000);
    });
   
});