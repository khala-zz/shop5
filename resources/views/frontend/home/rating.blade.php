<!-- hien thi rating -->         
<div class="rating-product padding-left-start-khala">

  <?php 
  $avg_rating = 0;
  if($product -> pro_total_rating){
                                  // tru 1 vi de mac dinh cac cot do la 1 de khong che up len heroku khi de mac dinh la 0
      $total_number = $product -> pro_total_number - 1;
      $total_rating = $product -> pro_total_rating  - 1 ;
      if($total_number <> 0 && $total_rating <> 0){
         $avg_rating = round($total_number/$total_rating,2);
     }

 }

 ?>
 <span class="rating-stars selected block-start-khala" >
  @for($i = 1; $i <= 5; $i++)
  <a class="star-{{$i}} {{$i <= $avg_rating ? 'active':''}} ">{{$i}}</a>
  @endfor

</span>

</div>         
<!-- end hien thi rating -->