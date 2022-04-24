@extends('layouts.main')

@section('content')

    <div class="container">
        @if(count($contacts) === 0)
            <div class="alert alert-primary my-4" role="alert">
                <h4>There is no messages right now!<h4>
                <a class="btn btn-success my-2" href="{{url('contact/create')}}">Please create one</a>
            </div>
        @endif
        <table class="table my-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Message</th>
                <th scope="col">Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->title}}</td>
                    <td>{{$contact->message}}</td>
                    <td>{{$contact->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>

@endsection