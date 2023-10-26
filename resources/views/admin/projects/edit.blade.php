@extends('layouts.app')

@section('content-header')
    <h1 class="my-3">Modifica Progetti</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mt-3">Torna indietro</a>

    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary mt-3">Vai ai dettagli</a>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="row">
            @method('PATCH')
            @csrf
            <div class="col-12 mt-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project->tile }}">
            </div>

            <div class="col-12 mt-3">
                <label for="content" class="form-label">Contenuto</label>
                <textarea type="text" name="content" id="content" rows="5" class="form-control">{{ $project->tile }}</textarea>
            </div>

            <div class="col-12 mt-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" id="link" class="form-control" value="{{ $project->link }}">
            </div>

            <div>
                <button class="btn btn-primary mx-5 mt-5">
                    Modifica Progetto
                </button>
            </div>
    </div>

    </form>
@endsection
