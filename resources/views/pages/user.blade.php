@extends('layouts.master')
@section('content')
<section class="content-header">
  <h1>
    Danh Sách Users
    <small>Trang Admin</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        
        <!-- /.box-header -->

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Phone</th>
                
                
              </tr>
            </thead>

            <tbody>
              @if(empty($users))
              <h3 class=text-danger>No Data</h3>
              @else

              <?php $idx = 0; ?>
              @foreach($users as $user)

              <tr data-id="{{$user}}">
                <td>{{++ $idx}}
                <td>{{$user->name}}
                
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->company_name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->street_address}}</td>
                    <td>{{$user->city}}</td>
           
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
    @endsection
