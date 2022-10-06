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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Текст</th>
                 
                  <th>Действия</th>
                  <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                   
                    
                @foreach($feedback as $feedb)
                <tr class="admin-td">
                  <td>{{$feedb->id}}</td>
                  <td>{{$feedb->email}}</td>
                  <td>{{$feedb->text}}</td>
                  <td>
                        <a href="/planeta3/feedback/show/{{$feedb->id}}">Перейти</a> 
                  </td>
                   <td>
                       @if($feedb->checked == 1)
                        <span style="color: red; font-size: 30px;">&#10006;</span>
                        @else
                        <span style="color: green; font-size: 30px;">&#10004;</span>
                       @endif
                   </td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
      
      <div class="paginator">
        {{$feedback->links()}}
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection