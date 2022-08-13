@extends('admin.admin_master')
@section('admin')

   
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 
		<!-- Main content -->
		<section class="content">
		  <div class="row">
			   
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Users List</h3>
                  <a href="#" class="btn btn-md btn-outline-info btn-rounded float-right">Add user</a>
				
                </div>
                <!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Sr#</th>
								<th>User Role</th>
								<th>User Full Name</th>
								<th>User Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
				 
                            @foreach($data as $key => $data)

                            <tr>
                                
								<td>{{$key+1}}</td>
								<td>{{$data->user_type}}</td>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
							    <td>
                                    
                                    <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                                    <a href="" class="btn btn-sm btn-outline-success">Edit</a>


                                </td>
								 
							</tr>

                            @endforeach


						</tbody>
						 
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

 
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection

