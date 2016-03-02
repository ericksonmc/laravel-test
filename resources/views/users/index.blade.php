@extends('layouts.master')
@section('title', 'Usuarios')
@section('sidebar')


@section('content')
    <div class="row">
        <div class="col-md-6 pull-center" id="users">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Usuarios</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<div class="table-responsive">
            		<table class="table table-striped">
            			<thead>
            				<tr>
            					<th>Nombre</th>
            					<th>Email</th>
            				</tr>
            			</thead>
            			<tbody data-bind="foreach: users">
            				<tr>
            					<td data-bind="text: name"></td>
            					<td data-bind="text: email"></td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            	
            </div><!-- /.box-body -->
            <div class="box-footer">
                
            </div>
          </div><!-- /.box -->
        </div>
    </div>
    

@stop



