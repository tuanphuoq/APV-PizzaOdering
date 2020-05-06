@extends('layouts.master')
@section('content')
<section class="content-header">
	<h1>
		Products List
		<small>Product Management</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{asset('')}}home"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Product tables</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="add-product">
						<a href="{{route('viewadd')}}" class="btn btn-success btn-add-product">Add Product</a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Image</th>
								<th scope="col">Description</th>
								<th scope="col">Tag</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach( $data as $key => $value)
							<tr>
								<th scope="row">{{ $value->id }}</th>
								<td>{{$value->name}}</td>
								<td>{{$value->price.__('msg.dollar')}}</td>
								<td>
									<img class="image-fluid" src="{{ asset(\Storage::url($value->image)) }}" style="width: 100px; height: 100px;">
								</td>
								<td>{{$value->description}}</td>
								<td>{{$value->tag}}</td>
								<td>
									<a data-id="{{$value->id}}" class="btn btn-warning text-white btn-edit" href="{{asset('')}}product/viewedit/{{$value->id}}">Edit</a>
									<button data-id="{{$value->id}}" class="btn btn-danger text-white btn-del">Delete</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/productList.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		//display message
		@if(Session::get('message') != null)
			toastr.success('{{Session::get('message')}}');
		@endif
	})
</script>
@endsection