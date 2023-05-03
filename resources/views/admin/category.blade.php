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
                            <h2 class="h2_font">Add Category</h2>
                            <br>
                            <form action="{{url('/add_category')}}" method="POST">
                              @csrf
                            <form>
                                <input class ="input_colour" type="text" name="category" placeholder="Write category name">
                                <br>
                                <br>
                                <input type="submit" class="btn btn-primary" name="submit" value="Add category">
                                

                            </form>

                        </div>
                        <table class="center">
                          <tr>
                            <td>Category Name</td>
                            <td>Action</td>
                            
                          </tr>
                          @foreach($data as $data)
                          <tr>
                            <td>{{$data->category_name}}</td>
                            <td>
                              <a onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
                            </td>
                            
                          </tr>
                          @endforeach
                        </table>
                      
                        </span>
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
  </body>
</html>