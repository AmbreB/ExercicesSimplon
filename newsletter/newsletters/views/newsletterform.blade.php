@extends('newsletters::layout')

@section('content')

<h2>I'm a form !</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ducimus ad aspernatur voluptatum soluta cupiditate tempore tempora dolorum quasi eaque odio explicabo fugiat aut, ea molestiae numquam. Eius, nemo, deleniti.</p>

{!! Form::open(['url' => '/newsletter']) !!}
{!! Form::label('title', 'Entrez le titre du mail :') !!}
{!! Form::text('title') !!}
{!! Form::label('content', 'Entrez le contenu du mail :') !!}
{!! Form::textarea('content') !!}
{!! Form::submit('Envoyer') !!}
{!! Form::close() !!}

@endsection