@extends('layouts.app')

@section('page-title', 'Tutte le Tecnologie')

@section('main-content')
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2 class="text-primary">Tipologie di Progetto</h2>

            <a href="{{ route('admin.types.create') }}" class="btn btn-primary mb-3">Aggiungi Tecnologie <i class="fa-solid fa-plus"></i></a>

            <table class="table table-bordered table-striped table-primary table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td>
                                <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-sm btn-primary">Modifica</a>
                                <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa tipologia?');">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection