@extends('layouts.admin')

@section('content')
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create Project</a>

    <table class="table table-bordered" style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Unique Number</th>
                <th>District</th>
                <th>Mahalla</th>
                <th>Land (ha)</th>
                <th>Realizatsiya muddati</th>
                <th>Status</th>
                <th>Fayllar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->unique_number }}</td>
                    <td>{{ $project->district }}</td>
                    <td>{{ $project->mahalla }}</td>
                    <td>{{ $project->land }}</td>
                    <td>{{ $project->srok_realizatsi ?? '' }}</td>
                    <td>{{ $project->status }}</td>
                    <td>
                        @if($project->elon_fayl && file_exists(public_path('storage/' . $project->elon_fayl)))
                            <a class="btn btn-sm btn-primary text-light" target="_blank" href="{{ asset('storage/' . $project->elon_fayl) }}">E'lon</a>
                        @endif
                    
                        @if($project->pratakol_fayl && file_exists(public_path('storage/' . $project->pratakol_fayl)))
                            <a class="btn btn-sm btn-primary text-light" target="_blank" href="{{ asset('storage/' . $project->pratakol_fayl) }}">Pratokol</a>
                        @endif
                    
                        @if($project->qoshimcha_fayl && file_exists(public_path('storage/' . $project->qoshimcha_fayl)))
                            <a class="btn btn-sm btn-primary text-light" target="_blank" href="{{ asset('storage/' . $project->qoshimcha_fayl) }}">Qoshimcha</a>
                        @endif
                    </td>
                    
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-sm btn-danger" 
                                    onclick="return confirm('Are you sure you want to delete this project?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
