@extends('layouts.app')
@section('content')
    <div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Topic</th>
            <th scope="col">Contents</th>
            <th scope="col">Customer name</th>
            <th scope="col">Mail</th>
            <th scope="col">Link to file</th>
            <th scope="col">Creation time</th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->topic}}</td>
                <td>{{$user->contents}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>-</td>
                <td>-</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        {{$users->links()}}
    </div>
@endsection
