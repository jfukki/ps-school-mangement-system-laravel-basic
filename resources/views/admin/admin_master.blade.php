<!-- header here -->
@include('admin.body.header')
<!-- header here -->


<!-- navbar here -->
@include('admin.body.navbar')
<!-- navbar here -->



  
  <!-- Left side column. contains the logo and sidebar -->
<!-- sidebar here -->
@include('admin.body.sidebar')
<!-- sidebar here -->




  <!-- Content Wrapper. Contains page content -->
   @yield('admin')
  <!-- /.content-wrapper -->


<!-- footer -->

	@include('admin.body.footer')

<!-- footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar">

  @include('admin.body.right-sidebar-control')
	
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
<!-- footer script-->

@include('admin.body.footer-script')

<!-- footer script-->
	