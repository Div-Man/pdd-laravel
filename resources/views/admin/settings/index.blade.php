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

                            <th>Раздел</th>
                            <th>Действия</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>



                        @foreach($settings as $setting)
                        <tr>
                            <td>{{$setting->description}}</td>
                            <td>
                                @if($setting->status == null)
                                <form action="{{url('/planeta3/settings')}}/{{$setting->title}}/disable" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PUT">

                                    <input type="hidden" name="setting_id" value="{{$setting->id}}">
                                    <input type="hidden" name="setting_title" value="{{$setting->title}}">
                                    <input type="hidden" name="setting_status" value="1">

                                    <button type="submit" class="btn btn-danger">
                                        Отключить
                                    </button>
                                </form>
                                @else
                                <form action="{{url('/planeta3/settings')}}/{{$setting->title}}/enable" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PUT">

                                    <input type="hidden" name="setting_id" value="{{$setting->id}}">
                                    <input type="hidden" name="setting_title" value="{{$setting->title}}">
                                    <input type="hidden" name="setting_status" value="null">

                                    <button type="submit" class="btn btn-success">
                                        Включить
                                    </button>
                                </form>
                                @endif
                            </td>
                            <td>

                                @if($setting->status == null)
                                <span style="color: green; font-size: 30px;">&#10004;</span>
                                @else
                                <span style="color: red; font-size: 30px;">&#10006;</span>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection