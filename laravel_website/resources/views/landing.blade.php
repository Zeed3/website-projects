@extends('layout.layout')

@section('title', 'Landing Page')

@section('content')

    <div>
        <h1>Landing Page</h1>
    </div>

    @if ($cars)
        @foreach ($cars as $c)
            {{ $c->name }}
            {{ $c->model }}
            {{ $c->year }}
            {{ $c->price }}
        @endforeach
    @endif

    @if ($car)
        <div>
            <label>Name: </label>
            {{ $car->name }}
        </div>
        <div>
            <label>Model: </label>
            {{ $car->model }}
        </div>
        <div>
            <label>Year: </label>
            {{ $car->year }}
        </div>
        <div>
            <label>Price: </label>
            {{ $car->price }}
        </div>
    @endif


@endsection
