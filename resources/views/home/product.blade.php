<section class="product_section layout_padding">
<style type="text/css">
        .h2_font{
            
            font-size: 30px;
            padding-top:20px;

        }
        .div_center{
            text-align: center;
            padding-top: 20px;
            
        }
        .input_colour{
            color: black;
        }
        .center{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top:30px;
          border: 2px solid white;
        }
        .img_size{
            width: 200px;
            height: 300px;
        }
        .th_colour{
           background: pink;
        }
        .th_design{
            padding: 20px;
        }
    </style>
         <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>our<br>products</h2>
                </div>
            </div>
        </div>
            <div class="row">
               @foreach($product as $product)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">

                           <a href="{{url('product_details',$product->id)}}" class="option1">
                            Product details
                           </a>
                           <form action="{{url('add_cart',$product->id)}}" method="Post">
                              @csrf
                              <div class="row">
                                 
                                 
                                 <div class="col-md-4">
                                    

                                 </div>
                                 

                              </div>
                              


                           </form>
                        </div>
                     </div>
                     <div class="img-box"><a href="{{url('product_details',$product->id)}}"">
                        <img class="img_size" src="product/{{$product->image}}" alt=""></a>
                     </div>
                     <div class="detail-box">
                        <h3><a href="{{url('product_details',$product->id)}}">
                           {{$product->title}}
                             
                        </h3></a>
                        @if($product->discount_price!=null)

                        <h6 >
                           {{$product->discount_price}} taka
                        </h6>

                        <h6 style="text-decoration: line-through;">
                           {{$product->price}} taka
                        </h6>
                        @else



                        <h6 >
                           {{$product->price}} taka
                        </h6>


                        @endif
                     </div>
                     <form action="{{url('add_cart',$product->id)}}" method="Post">
                        @csrf
                        <div>
                        <input style="width: 50px" type="number" name="quantity" value="1" min="1">
                        <br>
                        <input style="colour:pink" type="submit" class="btn btn-primary" value="Add to Cart">
      
                        <br>

                        </div>
                        
                        

                        
                        
                     </form>
                  </div>
               </div>
               @endforeach 
               
         </div>
      </section>