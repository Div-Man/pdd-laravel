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
             
                <div><b>Email:</b> {{$feedback->email}}</div>
                <hr>
                <b>Текст:</b>
                <div>{{$feedback->text}}</div>
                <br>
                
                
                
                
                
                @if($feedback->checked == 1)
                    <form action="{{url('/planeta3/feedback/checked')}}/{{$feedback->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-success">
	                Отменить прочитаным
	              </button>
                </form>
                        @else
                        <form action="{{url('/planeta3/feedback/disable')}}/{{$feedback->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <button type="submit" class="btn btn-warning">
	                Отменить не прочитаным
	              </button>
                </form>
                       @endif
                
                
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection