@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <a href='{{ route('admin.projects.index') }}' class="btn btn-primary mt-3">Torna alla vista</a>
        <h1>{{ $project->title }}</h1>
        <div class="mt-5">
            <p>
            <h3>Description</h3><br>
            {{ $project->description }}
            </p>
            <hr>
            <p>
            <h3>Slug</h3><br>
            {{ $project->slug }}
            </p>
            <hr>
            <p>
            <h3>Created at</h3><br>
            {{ $project->created_at }}
            </p>
            <hr>
            <p>
            <h3>Updated at</h3><br>
            {{ $project->updated_at }}
            </p>
        </div>
    </div>
@endsection
