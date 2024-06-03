@extends('layouts.app')
@section('content')

<div class="container">
  <div class="my-3">
    <a href="{{route('admin.project.create')}}" class="btn btn-success">Crea</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Data di inizio</th>
        <th scope="col">Data di fine</th>
        <th scope="col">Url Progetto</th>
        <th scope="col">Tecnologie usate</th>
        <th scope="col">Azioni</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($projects as $project)
      <tr>
        <td>{{ $project->title }}</td>
        <td>{{ $project->description }}</td>
        <td>{{ $project->start_date }}</td>
        <td>{{ $project->end_date }}</td>
        <td>{{ $project->project_url }}</td>
        <td>{{ $project->technologies_used }}</td>
        <td>
          <a href="{{route('admin.project.show', $project)}}" class="btn btn-primary">Visualizza</a>
        </td>
        <td>
          <a href="{{route('admin.project.edit', $project)}}" class="btn btn-secondary">Modifica</a>
        </td>
        <td>
          <form action="{{route('admin.project.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Elimina</button>

          </form>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>




@endsection