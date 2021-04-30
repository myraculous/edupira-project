@extends('admin.admin_master')

@section('admin')


<div class="content-wrapper">
	  <div class="container-full">
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">User List</h3>
                  <a class="btn btn-rounded btn-success" href="{{ route('user.add')}}" style="float:right">Add User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">SN</th>
								<th>Role</th>
								<th>Name</th>
								<th>Email</th>
								<th width="25%">Action</th>
								
							</tr>
						</thead>
						<tbody>

                        @foreach($allData as $key => $user)
							<tr>
								<td>{{$key + 1 }}</td>
								<td>{{$user->usertype}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td><a class="btn btn-info btn-sm" href="">Edit</a>
                                <a class="btn btn-danger btn-sm" href="{{route('user.delete', $user->id)}}" id="delete">Delete</a></td>
                                </td>
							</tr>
                        @endforeach
						</tbody>
						<tfoot>
							
						</tfoot>
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






@endsection