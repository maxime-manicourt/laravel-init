@extends('layouts.app')

@section('content')

    <ul>
        @foreach($personnes as $p)
            <li><a href="/personne/{{$p->id}}">{{$p->prenom}} {{$p->nom}}</a></li>
        @endforeach
    </ul>

@endsection