@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{route('admin.users.create')}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Имя</th>
                  <th>E-mail</th>
                  <th>Бан</th>
                  <th>Роль</th>
                  <th>Аватар</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
	                <tr>
	                  <td>{{$user->id}}</td>
	                  <td>{{$user->name}}</td>
	                  <td>{{$user->email}}</td>
                          @if($user->ban == null)
                               <td>  <form action="{{url('/planeta3/user/ban')}}/{{$user->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-success">
	                Забанить
	              </button>
                </form></td>
                          @else
                                <td><form action="{{url('/planeta3/user/unban')}}/{{$user->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-danger">
	                Разбанить
	              </button>
                </form></td>
                          @endif
                          
	                  <td>{{$user->userRole($user->role)}}</td>
	                  <td>
	                    <img src="{{$user->avatar_700}}" alt="" class="img-responsive" width="150">
	                  </td>
	                  <td><a href="{{route('admin.users.edit', ['id' => $user->id])}}" class="fa fa-pencil"></a> 
                              
                           <form action="{route('admin.users.destroy', ['id' => $user->id])}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">
	                 
	                  <button onclick="return confirm('are you sure?')" type="submit" class="delete">
	                   <i class="fa fa-remove"></i>
	                  </button>

	                  </form>
	                  </td>
	                </tr>
                @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection