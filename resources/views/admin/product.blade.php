<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .h2_font{
            
            font-size: 20px;
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
        label{
            display: inline-block;
            width: 200px
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              
              <div class="col-12 grid-margin stretch-card">
            
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                            {{session()->get('message')}}


                        </div>
                    @endif
                      <div class="div_center">
                        <h1 class="font_size">  Add Product</h1>
                         <br>
                        <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div>
                        <label>Product title : </label>

                        <input class="input_colour" type="text" name="title" placeholder="Write product title" required="">
                        </div>
                        <br>
                        

                        <div>
                        <label>Product description : </label>

                        <input class="input_colour" type="text" name="description" placeholder="Product description" required="">
                        </div>
                        <br>

                        <div>
                        <label>Product Price : </label>

                        <input class="input_colour" type="number" name="price" placeholder="Product price" required="">
                        </div>
                        <br>

                        <div>
                        <label>Discount Price : </label>

                        <input class="input_colour" type="number" name="discount_price" placeholder="Discount Price">
                        </div>
                        <br>

                        <div>
                        <label>Quantity : </label>

                        <input class="input_colour" type="number" min="0" name="quantity" placeholder="Product quantity" required="">
                        </div>
                        <br>

                        <div>
                        <label>Category: </label>
                        <select class="input_colour" required="">
                            <option value="" selected="">Add category here</option>
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <br>

                        <div>
                        <label>Image: </label>
                        <input type="file" name="image" required="">
                            
                        </div>
                        <div>
                            <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>
                      </div>
                      </form>

                    
                    
                 
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>