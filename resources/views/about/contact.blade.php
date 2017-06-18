<h2>Contact Page</h2>

<ul>
    @foreach($errors as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

@if(Session::has('msg'))
<div class="alert alert-info">
    {{ Session::get('msg') }}
</div>
@endif

{!! Form::open(array('route' => 'contact_store', 'class' => 'form'))  !!}

<div class="form-group">
    {!! Form::label('Your name') !!}
    {!! Form::text('name', null, array(
        'required', 'class' => 'form-control', 'placeholder' => 'Your name' 
    )) !!}
</div>

<div class="form-group">
    {!! Form::label('Your email address') !!}
    {!! Form::text('email', null, array(
        'required', 'class' => 'form-control', 'placeholder' => 'Your email address' 
    )) !!}
</div>

<div class="form-group">
    {!! Form::label('Your message') !!}
    {!! Form::textarea('message', null, array(
        'required', 'class' => 'form-control', 'placeholder' => 'Your message' 
    )) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us', array('class' => 'btn btn-primary')) !!}
</div>

{!! Form::close() !!}