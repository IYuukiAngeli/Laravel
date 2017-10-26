@extends ('layout')

@section('content')
<div class = 'col-sm-2 col-sm-offset-2 col-md-10  main'>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('users') }}">User Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('users') }}">View All Users</a></li>
            <li><a href="{{ URL::to('users/create') }}">Create a User</a>
        </ul>
    </nav>
    <div class='panel panel-primary'>
        <div class='panel panel-heading'>
            <h4>All the users</h4>
        </div>

        {{ Html::ul($errors->all()) }}

        {{ Form::open(array('url' => 'users')) }}

            <div class="form-group">
                {{ Form::label('username', 'Username') }}
                {{ Form::text('username', Request::old('username'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('fullname', 'Fullname') }}
                {{ Form::text('fullname', Request::old('fullname'), array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('usertype', 'Usertype') }}
                {{ Form::select('usertype', array('0' => 'Select a usertype', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Request::old('usertype'), array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create User', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>


</div>
@endsection

@section('footer')

@endsection
