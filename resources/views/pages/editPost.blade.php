@extends('layouts.master')
@section('content')
<section class="content-header">
    <h1>{{__('msg.post_edit')}}</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>{{__('msg.home')}}</a></li>
        <li><a href="{{route('post')}}">{{__('msg.post')}}</a></li>
        <li class="active">{{__('msg.post_edit')}}</li>
    </ol>
    <link rel="stylesheet" type="text/css" href="{{asset('../css/style-font.css')}}">
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-body">
                        <div class="form-add-post">
                            <form class="form1" method="POST" action="{{asset('')}}post/editPost/{{$post->id}}" enctype="multipart/form-data">
                                @csrf
                                {{ csrf_field() }}
                                <h1>{{__('msg.post_edit')}}</h1>
                                <hr>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="title">{{__('msg.title')}}</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" required>
                                        <p id="name_message" class="text-danger font-text"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="shortDes">{{__('msg.shortDes')}}</label>
                                        <input type="text" class="form-control" id="short_desc" name="short_desc" value="{{$post->short_desc}}" required>
                                        <p id="price_message" class="text-danger font-text"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="longDes">{{__('msg.longDes')}}</label>
                                        <input type="text" class="form-control" id="long_desc" name="long_desc" value="{{$post->long_desc}}" required>
                                        <p id="price_message" class="text-danger font-text" ></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">{{__('msg.image')}}</label>
                                        <div class="show-image">
                                            <img class="image-fluid img1" src="{{ asset(\Storage::url($post->image)) }}">
                                        </div>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        <p id="image_message" class="text-danger font-text"></p>
                                    </div>
                                    <button type="" class="btn btn-success" id="btn-edit-post">{{__('msg.post_edit')}}</button>
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
<script src="../js/post/editPost.js"></script>
</script>
@endsection
