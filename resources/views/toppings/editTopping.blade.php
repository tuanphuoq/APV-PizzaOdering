@extends('layouts.master')
@section('content')
<section class="content-header">
    <h1>{{__('msg.topping_edit')}}</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>{{__('msg.home')}}</a></li>
        <li><a href="{{route('topping')}}">{{__('msg.topping')}}</a></li>
        <li class="active">{{__('msg.topping_edit')}}</li>
    </ol>
    <link rel="stylesheet" type="text/css" href="{{asset('../css/style-font.css')}}">
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-body">
                        <div class="form-add-topping">
                            <form class="form1" method="POST" action="{{asset('')}}topping/editTopping/{{$topping->id}}" enctype="multipart/form-data">
                                @csrf
                                {{ csrf_field() }}
                                <h1>{{__('msg.topping_edit')}}</h1>
                                <hr>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="name">{{__('msg.name')}}</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{$topping->name}}" required>
                                        <p id="name_message" class="text-danger font-text"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" value="{{$topping->price}}" required>
                                        <p id="price_message" class="text-danger font-text"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">{{__('msg.image')}}</label>
                                        <div class="show-image">
                                            <img class="image-fluid img1" src="{{ asset(\Storage::url($topping->image)) }}">
                                        </div>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        <p id="image_message" class="text-danger font-text"></p>
                                    </div>
                                    <button type="" class="btn btn-success" id="btn-edit-topping">{{__('msg.topping_edit')}}</button>
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
<script type="text/javascript" src="../../js/messagetext.js"></script>
<script src="../js/toppings/editTopping.js"></script>
</script>
@endsection
