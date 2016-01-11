{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('idx', 'Idx:') !!}
			{!! Form::text('idx') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::textarea('title') !!}
		</li>
		<li>
			{!! Form::label('explanation', 'Explanation:') !!}
			{!! Form::textarea('explanation') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}