@extends('layouts.main')

@section('header')
     <h1 class="mt-5">Elenco post</h1>
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Sottotitolo</th>
                <th>Autore</th>
                <th>Data di creazione</th>
                <th>Data di utlima modifica</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->subtitle }}</td>
                    <td>{{ $post->text }}</td>
                    <td>{{ $post->author }} </td>
                    <td>{{ $post->publication_date }} </td>
                    <td>
                        <a href="{{ route('posts.show',  $post->id) }}" class="btn btn-outline-light">Mostra</a>
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-light">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')
     <div class="text-right">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Aggiunig post</a>
     </div>
@endsection