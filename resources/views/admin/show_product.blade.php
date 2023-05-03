<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

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
            width: 50px;
            height: 60px;
        }
        .th_colour{
           background: pink;
        }
        .th_design{
            padding: 20px;
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
                    <h2 class="font_size">All Products</h2>

                    <table class="center">
                        <tr class="th_colour">
                            <th class="th_design">Product title</th>
                            <th class="th_design">Description</th>
                            <th class="th_design">Quantity</th>
                            <th class="th_design">Category</th>
                            <th class="th_design">Price</th>
                            <th class="th_design">Discount Price</th>
                            <th class="th_design">Product Image</th>
                            <th class="th_design">Delete</th>
                            <th class="th_design">Edit</th>
                            
                        </tr>
                        @foreach($product as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img class="img_size" src="/product/{{$product->image}}">
                            </td>

                            <td> 
                                <a class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Delete</a>
                            </td>

                            <td> 
                                <a class="btn btn-primary" href="{{url('edit_product', $product->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                      
                    </table>
                    </div>
                    
                 
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Admin Panel</span>
            </div>
          </footer>
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