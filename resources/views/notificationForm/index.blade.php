@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Zgłoszenie</h1>
                </div>
                <div class="col-6">
                    <a class="float-right" href="{{ route('notificationForm.create') }}">
                        <button type="button" class="btn btn-primary">Nowe zgłoszenie</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Topic</th>
                            <th scope="col">Description</th>
                            <th scope="col">Link to file</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($notificationForm as $notification)
                        <tr>
                            <td>{{$notification->topic}}</td>
                            <td>{{$notification->contents}}</td>
                            <td>{{$notification->link}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    {{$notificationForm->links()}}

             </div>
@endsection
