@extends('admin.admin_master')
@section('admin')

   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container">
		<!-- Content Header (Page header) -->
 
          <div class="row">
            <div class="col-md-12">
            <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<!-- <div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;"> -->
					<div class="widget-user-header bg-black" style="background-color: black;">

					  <h3 class="widget-user-username">Full Name:{{$user->name}}</h3>
					  <h6 class="widget-user-desc">Email: {{$user->email}}</h6>
					  <h6 class="widget-user-desc">Addres: {{$user->address}}</h6>
					</div>

                    <div>
                      <a href="#" class="btn btn-rounded btn-outline-dark " style="float:right; margin:10px;">Edit Profile</a>

                    </div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="../images/user3-128x128.jpg" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header">Mobile Number</h5>
							<span class="description-text">{{$user->mobile}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
                          <h5 class="description-header">Gender</h5>
							<span class="description-text">{{$user->gender}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
                            <h5 class="description-header">Profile Status</h5>
							<span class="description-text">{{$user->status}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
            </div>
          </div>

	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

