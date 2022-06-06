@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formularz</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('notificationForm.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="topic" class="col-md-4 col-form-label text-md-right">Temat</label>

                            <div class="col-md-6">
                                <input id="topic" type="text" class="form-control @error('topic') is-invalid @enderror" name="topic" value="{{ old('topic') }}" required autocomplete="topic" autofocus>

                                @error('topic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contents" class="col-md-4 col-form-label text-md-right">Treść</label>

                            <div class="col-md-6">
                                <textarea id="contents" class="form-control @error('contents') is-invalid @enderror" name="contents"  autofocus>{{old('contents')}}</textarea>

                                @error('contents')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="link" class="col-md-4 col-form-label text-md-right">Link to file</label>

                            <div class="col-md-6">
                                <textarea id="link" class="form-control @error('link') is-invalid @enderror" name="link"  autofocus>{{old('link')}}</textarea>

                                @error('link')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Wyślij') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
