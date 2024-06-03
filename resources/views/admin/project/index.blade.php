@extends('layouts.app')
@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">start_date</th>
        <th scope="col">end_date</th>
        <th scope="col">project_url</th>
        <th scope="col">technologies_used</th>
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
        {{-- <td>
          <a href="{{route('admin.project.show')}}"></a>
          <a href="{{route('admin.project.create')}}"></a>
          <a href="{{route('admin.project.destroy')}}"></a>
        </td> --}}
      </tr>
    @endforeach
    </tbody>
  </table>
</div>




@endsection