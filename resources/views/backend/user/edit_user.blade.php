@extends('admin.admin_master')
@section('admin')


  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Edit User</h3>
					 
				</div>
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			 
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form  action="{{route('user.update', $data->id)}}" method="post">
                        @csrf
					  <div class="row">
						<div class="col-6">						
							<div class="form-group">
								<h5>User Full Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text"  placeholder="Enter Full Name" name="name" class="form-control"  value="{{$data->name}}" > </div>
                                
							</div>

                        </div>

						<div class="col-6">						
							<div class="form-group">
								<h5>User Mobile Number<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="number"  placeholder="Enter Mobile Number" name="mobile" class="form-control"  value="{{$data->mobile}}"> </div>
 
							</div>

                        </div>

                        <div class="col-6">		
							<div class="form-group">
								<h5>User Email <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email"  placeholder="Enter Email" name="email" class="form-control" value="{{$data->email}}"  > </div>
                                     
                                     
    
                            </div>

                        </div>

                        <div class="col-6">		    
							<div class="form-group">
								<h5>User Password <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" placeholder="Enter Password" name="password" class="form-control"   > </div>
                                  
                                    

                            </div>
						</div>
						<div class="col-4">
							  
							<div class="form-group">
								<h5> Please Select Role <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="role" id="role" required class="form-control">

										<option value="{{$data->user_type}}">{{$data->user_type}}</option>
										<option value="">--------</option>

										<option value="Admin">Admin</option>
										<option value="Student">Student</option>
										 
									</select>
                                  
 
 
								</div>
							</div>
							 
						</div>

						<div class="col-4">
							  
							<div class="form-group">
								<h5> User Gender<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="gender" id="gender" required class="form-control">

									 <option value="{{$data->gender}}">{{$data->gender}}</option>
										<option value="">--------</option>
										
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										 
									</select>

									 
								</div>
							</div>
							 
						</div>

						<div class="col-4">
							  
							<div class="form-group">
								<h5> User Status<span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="status" id="status" required class="form-control">

									
									<option value="{{$data->status}}">{{$data->status}}</option>
										<option value="">--------</option>
										
										<option value="Active">Active</option>
										<option value="Inactive">Inactive</option>
										 
									</select>

									 
 
								</div>
							</div>
							 
						</div>


						<div class="col-12">
							  
							  <div class="form-group">
								  <h5> User Address<span class="text-danger">*</span></h5>
  
								  <div class="controls"> 
  
									 <textarea name="address" id="address"  rows="4" class="form-control" placeholder="{{$data->address}}" value="" ></textarea> 
									  
							  </div>
							  </div>
							   
						  </div>



					  </div>
					  
 
 
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Edit User</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->


@endsection

