@extends('layouts.app')

@section('content-header')
    <h1 class="my-3">Crea Progetti</h1>
    <a href='{{ route('admin.projects.index') }}' class="btn btn-primary mt-3">Torna indietro</a>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.projects.store') }}" class="row">
            @csrf
            <div class="col-12 mt-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="col-12 mt-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
            </div>

            <div class="col-12 mt-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" id="link" class="form-control">
            </div>

            <div>
                <button class="btn btn-primary mx-5 mt-5">
                    Salva Progetto
                </button>
            </div>
    </div>

    </form>
@endsection
