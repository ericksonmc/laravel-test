@extends('layouts.master')
@section('title', 'Crear Usuario')
@section('sidebar')

@section('content')
    <div class="row">
        <div class="col-md-6 pull-center" id="users">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Usuarios</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form action="" class="form" id="formUser">
                    <div class="from-group">
                        <label for="" class="label-control">Name</label>
                        <input type="text" class="form-control" data-bind="textInput: formData().name">
                    </div>
                    <div class="from-group">
                        <label for="" class="label-control">Email</label>
                        <input type="email" class="form-control" data-bind="textInput: formData().email">
                    </div>
                    <div class="from-group">
                        <label for="" class="label-control">Password</label>
                        <input type="password" class="form-control" data-bind="textInput: formData().password">
                    </div>
                </form>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-primary pull-right" data-bind="click: save">Enviar Datos</button>
            </div>
          </div><!-- /.box -->
        </div>
    </div>
    

@stop