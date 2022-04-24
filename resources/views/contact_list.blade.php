@extends('layouts.main')

@section('content')

    <div class="container">
        @if(count($contacts) === 0)
            <div class="alert alert-primary my-4" role="alert">
                <h4>There is no messages right now!<h4>
                <a class="btn btn-success my-2" href="{{url('contact/create')}}">Please create one</a>
            </div>
        @endif
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach ($contacts as $contact)
                <div class="feature col">
                    <h2>{{$contact->title}}</h2>
                    <p class="fw-light text-muted fst-italic">{{$contact->name}}</p>
                    <p>{{$contact->message}}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection