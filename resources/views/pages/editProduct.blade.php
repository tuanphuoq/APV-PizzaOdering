@extends('layouts.master')
@section('content')
<section class="content-header">
	<h1>Edit Product</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="{{route('product')}}">Product</a></li>
		<li class="active">Edit Product</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="box-body">
						<div class="form-add-product">
							<form style="width: 50%; margin: auto;" method="POST" action="{{asset('')}}product/editProduct/{{$product->id}}" enctype="multipart/form-data">
								@csrf
								{{ csrf_field() }}
								<h1>Edit Product</h1>
								<hr>
								<div class="form-group">
									<div class="form-group">
										<label for="inputProductName">Product Name</label>
										<input type="text" class="form-control" id="inputProductName" name="inputProductName" value="{{$product->name}}" required>
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
										<input type="text" class="form-control" id="inputPrice" name="inputPrice" value="{{$product->price}}" required>
										<p id="price_message" class="text-danger" style="font-style: italic;"></p>
									</div>
									<div class="form-group">
										<label for="inputDescription">Description</label>
										<input type="text" class="form-control" id="inputDescription" name="inputDescription" value="{{$product->description}}" required>
										<p id="description_message" class="text-danger" style="font-style: italic;"></p>
									</div>
									<div class="form-group">
										<label for="inputProductTag">Product Tag</label>
										<input type="text" class="form-control" id="inputProductTag" name="inputProductTag" value="{{$product->tag}}" required>
										<p id="tag_message" class="text-danger" style="font-style: italic;"></p>
									</div>
									<div class="form-group">
										<label for="inputImage">Description Image</label>
										<div class="show-image">
											<img class="image-fluid" src="{{ asset(\Storage::url($product->image)) }}" style="width: 100px; height: 100px; margin: 10px 0px;">
										</div>
										<input type="file" class="form-control-file" id="inputImage" name="inputImage">
										<p id="image_message" class="text-danger" style="font-style: italic;"></p>
									</div>
									<button type="" class="btn btn-success" id="btn-edit-product">Edit Product</button>
								</div>
							</form>
						</div>
					</div>
					<!-- /.box-body -->
					<!-- /.box-header -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
</section>
<script src="../../js/editProduct.js"></script>
@endsection
