{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('improvedParam', 'ImprovedParam:') !!}
			{!! Form::text('improvedParam') !!}
		</li>
		<li>
			{!! Form::label('preservedParam', 'PreservedParam:') !!}
			{!! Form::text('preservedParam') !!}
		</li>
		<li>
			{!! Form::label('principleId', 'PrincipleId:') !!}
			{!! Form::text('principleId') !!}
		</li>
		<li>
			{!! Form::label('priority', 'Priority:') !!}
			{!! Form::text('priority') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}