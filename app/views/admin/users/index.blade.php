@extends('templates.admin')
@section('content')
	
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p class="lead"><i class="ion-person-stalker"></i> Usuarios Registrados</p>
				</div>
				<table class="table  table-bordered">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Usuario</th>
							<th>Email</th>
							<th>Perfil</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr id="tr_user_{{ $user->id }}">
							<td>{{ $user->id }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->username }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->profile }}</td>
							<td>{{ $user->status }}</td>
							<td>
								<button class="btn btn-default btn-xs btnSendEmail" data-email="{{ $user->email }}"><i class="ion-ios-email-outline"></i></button>
								<button class="btn btn-default btn-xs"><i class="ion-edit"></i></button>
								<button class="btn btn-danger btn-xs btnDelete" data-user-id="{{ $user->id }}"><i class="ion-trash-a"></i></button>
								@if($user->status != 'Activo')
								<a class="btn btn-primary btn-xs" target="_blank" href="{{ action('CuentaController@getActivar', [$user->validation]) }}"><i class="ion-checkmark-circled"></i></a>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="modal fade" id="dlgSendMessage">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="ion-ios-email-outline"></i> Enviar Mensaje</h4>
				</div>
				<div class="modal-body">
					{{ Form::label('email', 'E-mail:', ['class'=>'control-label']) }}
					{{ Form::email('email', '', ['class'=>'form-control']) }}

					{{ Form::label('subject', 'Asunto:', ['class'=>'control-label']) }}
					{{ Form::text('subject', '', ['class'=>'form-control']) }}

					{{ Form::label('body', 'Mensaje:', ['class'=>'control-label']) }}
					{{ Form::textarea('body', '', ['class'=>'form-control', 'rows'=>'10']) }}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary" id="btnSendMessage">Enviar Mensaje</button>
				</div>
			</div>
		</div>
	</div>

@stop
@section('scripts')
	{{ HTML::script('js/admin/users.js') }}
@stop