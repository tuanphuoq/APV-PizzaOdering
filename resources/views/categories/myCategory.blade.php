@extends('layouts.master')
@section('content')
<section class="content-header">
  <h1>
    {{__('msg.category_header')}}
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('')}}home"><i class="fa fa-dashboard"></i> {{__('msg.home')}}</a></li>
    <li class="active">{{__('msg.category_table')}}</li>
  </ol>
  <link rel="stylesheet" type="text/css" href="{{asset('../css/style-font.css')}}">
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <div class="add-category">
            <a href="{{route('viewAddCategory')}}" class="btn btn-success btn-add-category">{{__('msg.category_add')}}</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">{{__('msg.id')}}</th>
                <th scope="col">{{__('msg.title')}}</th>
                <th scope="col">{{__('msg.image')}}</th>
                <th scope="col">{{__('msg.description')}}</th>
                <th scope="col">{{__('msg.action')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach( $data as $key => $value)
              <tr>
                <th scope="row">{{ $value->id }}</th>
                <td>{{$value->title}}</td>
                <td>
                  <img class="image-fluid img1" src="{{ asset(\Storage::url($value->image)) }}">
                </td>
                <td>{{$value->description}}</td>
                <td>
                  <a id="{{$value->id}}" class="btn btn-warning text-white btn-edit" href="{{asset('')}}category/edit/{{$value->id}}">{{__('msg.edit')}}</a>
                  <button id="{{$value->id}}" class="btn btn-danger text-white btn-del">{{__('msg.delete')}}</button>
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
<script type="text/javascript" src="../js/messagetext.js"></script>
<script src="../js/categories/listCategory.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    //display message
    @if(Session::get('message') != null)
      toastr.success('{{Session::get('message')}}');
    @endif
  })
</script>
@endsection