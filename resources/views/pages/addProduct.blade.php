@extends('layouts.master')
@section('content')
<section class="content-header">
	<h1>
		Add Product

	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{route('product')}}">Product</a></li>
		<li class="active">Add Product</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-add-product">
						<form style="width: 70%; margin: auto;" method="POST" action="{{ Route('addProduct') }}" enctype="multipart/form-data">
							@csrf
							{{ csrf_field() }}
							<h1 class="text-center">Add Product</h1>
							<hr>
							<div class="form-group">
								<div class="form-group">
									<label for="inputProductName">Product Name</label>
									<input type="text" class="form-control" id="inputProductName" name="inputProductName" required>
									<p id="name_message" class="text-danger" style="font-style: italic;"></p>
								</div>
								<div class="form-group">
									<label for="inputCategory">Category Type</label>
									<select class="form-control" id="inputCategory" name="inputCategory[]" multiple required>
										@foreach ($data as $key => $data)
										<option value="{{$data->id}}">{{$data->title}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="inputPrice">Price</label>
									<input type="text" class="form-control" id="inputPrice" name="inputPrice" required>
									<p id="price_message" class="text-danger" style="font-style: italic;"></p>
								</div>
								<div class="form-group">
									<label for="inputDescription">Description</label>
									<input type="text" class="form-control" id="inputDescription" name="inputDescription" required>
									<p id="description_message" class="text-danger" style="font-style: italic;"></p>
								</div>
								<div class="form-group">
									<label for="inputProductTag">Product Tag</label>
									<input type="text" class="form-control" id="inputProductTag" name="inputProductTag" required>
									<p id="tag_message" class="text-danger" style="font-style: italic;"></p>
								</div>
								<div class="form-group">
									<label for="inputImage">Description Image</label>
									<input type="file" class="form-control-file" id="inputImage" name="inputImage" required>
									<p id="image_message" class="text-danger" style="font-style: italic;"></p>
								</div>
								<button type="" class="btn btn-success" id="btn-add-product">Add Product</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<script src="../js/addProduct.js"></script>
@endsection