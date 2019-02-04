@extends('layouts.app')

@section('content')

    <ul>
        @foreach($personnes as $p)
            <li>{{$p->prenom}}</li>
        @endforeach
    </ul>

@endsection