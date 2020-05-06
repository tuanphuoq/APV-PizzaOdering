@extends('layouts.master')
@section('content')
<section class="content-header">
    <h1>
        {{__('msg.post_add')}}

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{__('msg.home')}}</a></li>
        <li><a href="{{route('post')}}">{{__('msg.post')}}</a></li>
        <li class="active">{{__('msg.post_add')}}</li>
    </ol>
    <link rel="stylesheet" type="text/css" href="{{asset('../css/style-font.css')}}">
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-add-post">s
                        <form class="form1" method="POST" action="{{ Route('addPost') }}" enctype="multipart/form-data">
                            @csrf
                            {{ csrf_field() }}
                            <h1 class="text-center">{{__('msg.post_add')}}</h1>
                            <hr>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="title">{{__('msg.title')}}</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    <p id="name_message" class="text-danger font-text"></p>
                                </div>
                                <div class="form-group">
                                    <label for="title">{{__('msg.shortDes')}}</label>
                                    <input type="text" class="form-control" id="short_desc" name="short_desc" required>
                                    <p id="price_message" class="text-danger font-text"></p>
                                </div>
                                <div class="form-group">
                                    <label for="title">{{__('msg.longDes')}}</label>
                                    <input type="text" class="form-control" id="long_desc" name="long_desc" required>
                                    <p id="price_message" class="text-danger font-text"></p>
                                </div>
                                <div class="form-group">
                                    <label for="image">{{__('msg.image')}}</label>
                                    <input type="file" class="form-control-file" id="image" name="image" required>
                                    <p id="image_message" class="text-danger font-text"></p>
                                </div>
                                <button type="" class="btn btn-success" id="btn-add-post">{{__('msg.post_add')}}</button>
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
<script type="text/javascript" src="../../js/messagetext.js"></script>
<script src="../../js/post/addPost.js"></script>
@endsection