@extends('layouts.app')

@section('content')

        <h3>{{$personne->prenom}} {{$personne->nom}}</h3>

        <h4>Ses tournages</h4>

        <ul>
            @foreach($personne->realisations as $r)
            <li>{{$r->titre}}</li>
            @endforeach
        </ul>

@endsection