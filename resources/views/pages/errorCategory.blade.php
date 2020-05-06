@extends('layouts.master')
@section('content')
	<div class="container error text-center">
		<h2 class="font-weight-bold text-danger" style="padding-top: 50px;">{{__('msg.errorCategory')}}<br>{{__('msg.todo')}}</h2>
	</div>
	<div class="redirect text-center">
		<a href="{{asset('')}}category/add" class="btn btn-info" style="margin-top: 50px;">{{__('msg.clickAdd')}}</a>
	</div>
@endsection
