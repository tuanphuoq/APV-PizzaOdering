@extends('layouts.master')
@section('css')
	<link rel="stylesheet" href="{{asset('css/orderView.css')}}">
@endsection
@section('content')
<section class="content-header">
	<h1>
		{{__('msg.pageTitle')}}
		<small>{{__('msg.subTitle')}}</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{asset('')}}home"><i class="fa fa-dashboard"></i>{{__('msg.breadcrumbLi1')}}</a></li>
		<li class="active">{{__('msg.breadcrumbLi2')}}</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				{{-- <div class="box-header"></div> --}}
				<!-- /.box-header -->
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
								<th scope="col">{{__('msg.action')}}</th>
							</tr>
						</thead>
						<tbody>
							@if($orders)
								@foreach( $orders as $key => $value)
								<tr>
									<th scope="row">{{ $value->id }}</th>
									<td>{{$value->name_user}}</td>
									<td>{{$value->phone}}</td>
									<td>{{$value->address}}</td>
									<td>{{$value->name_product}}</td>
									<td>{{$value->name_size}}</td>
									<td>{{$value->topping}}</td>
									<td class="text-center">{{$value->quantity}}</td>
									<td>{{$value->total.__('msg.dollar')}}</td>
									<td>{{$value->state}}</td>
									<td>
										<button type="button" order-id="{{$value->id}}" class="btn btn-warning text-white btn-del font-weight-bold btn-change" data-toggle="modal" data-target="#myModal">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										</button>
										{{-- modal --}}
										<div id="myModal"  class="modal fade" tabindex="-1" role="dialog">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title text-uppercase">{{__('msg.changeState')}}</h4>
														<button type="button" class="close text-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
													</div>
													<div class="modal-body">
														<span>{{__('msg.updateId')}}</span><span id="id-order"></span>
													</div>
													<div class="chooses text-center">
														<div class="col-md-12">
															<button class="btn btn-danger text-uppercase text-white font-weight-bold btn-state" state="3">{{__('msg.cancelOrder')}}<i class="fa fa-ban" aria-hidden="true"></i></button>
														</div>
														<div class="col-md-12">
															<button class="btn btn-warning text-uppercase text-white font-weight-bold btn-state" state="1">{{__('msg.deliveringOrder')}}<i class="fa fa-exchange" aria-hidden="true"></i></button>
														</div>
														<div class="col-md-12">
															<button class="btn btn-success text-uppercase text-white font-weight-bold btn-state" state="2">{{__('msg.deliveredOrder')}}<i class="fa fa-check-square-o" aria-hidden="true"></i></button>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">{{__('msg.close')}}</button>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->
									</td>
								</tr>
								@endforeach
							@endif
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
<script type="text/javascript" src="../js/message.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="../js/order.js"></script>
@endsection