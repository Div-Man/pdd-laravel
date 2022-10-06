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
                  <th>Название</th>
                 
                  <th>Картинка</th>
                  <th>Действия</th>
                  <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                   
                    
                @foreach($questions as $question)
                <tr>
                  <td>{{$question->id}}</td>
                  <td><a href="/planeta3/question/show/{{$question->id}}">{{$question->description}}</a></td>
                 
                  <td>
                    <img src="/{{$question->images}}" alt="" width="100">
                  </td>
                  <td>
                  <a href="{{url('/question/edit')}}/{{$question->id}}" class="fa fa-pencil"></a>
                  
                  <form action="{{url('/planeta3/question')}}/{{$question->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button onclick="return confirm('are you sure?')" type="submit" class="delete">
	                <i class="fa fa-remove"></i>
	              </button>
                </form>
	               
                  </td>
                   <td>
                       @if($question->checked == 1)
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
        {{$questions->links()}}
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection