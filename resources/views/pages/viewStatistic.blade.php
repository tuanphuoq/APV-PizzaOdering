@extends('layouts.master')
@section('css')
	<link rel="stylesheet" href="{{asset('css/orderView.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection

@section('content')
<section class="content-header">
	<h1>
		{{-- {{__('msg.pageTitle')}} --}}
		Statistic
		{{-- <small>{{__('msg.subTitle')}}</small> --}}
		<small>Order Statistic</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{asset('')}}home"><i class="fa fa-dashboard"></i>{{__('msg.breadcrumbLi1')}}</a></li>
		{{-- <li class="active">{{__('msg.breadcrumbLi2')}}</li> --}}
		<li class="active">Statistic table</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				{{-- <div class="box-header"></div> --}}
				<!-- /.box-header -->
				<div class="container-fluid py-3 choose-date">
					<h5 class="font-weight-bold title">Choose date to display statistic order</h5>
					<div class="row">
						<div class="col-lg-3 col-md-12">
							<span>Time Range :</span>
							<input type="text" class="datepicker" name="daterange">
							<button class="btn btn-info btn-small" id="show-statistic">View Statistic</button>
						</div>
					</div>
				</div>
				<div class="box-body table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">{{__('msg.name')}}</th>
								<th scope="col">{{__('msg.phone')}}</th>
								<th scope="col">{{__('msg.address')}}</th>
								<th scope="col">{{__('msg.product')}}</th>
								<th scope="col">{{__('msg.size')}}</th>
								<th scope="col">{{__('msg.toppings')}}</th>
								<th scope="col">{{__('msg.quantity')}}</th>
								<th scope="col">{{__('msg.total')}}</th>
								<th scope="col">{{__('msg.state')}}</th>
							</tr>
						</thead>
						<tbody id="statistic-body">
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

@endsection

@section('foot')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="../js/statistic.js"></script>
@endsection