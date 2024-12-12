@extends('layouts.admin')

@section('content')
    <h1>Edit Project</h1>

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Unique Number -->
        <div class="form-group mb-3">
            <label for="unique_number">Unique Number</label>
            <input type="text" name="unique_number" class="form-control" value="{{ $project->unique_number }}" placeholder="e.g., YUN0001">
        </div>

        <!-- Category -->
        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control">
                <option value="">— Select Category —</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $project->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- District -->
        <div class="form-group mb-3">
            <label for="district">District <span style="color:red;">*</span></label>
            <input type="text" name="district" class="form-control" value="{{ $project->district }}" required>
        </div>

        <!-- Street -->
        <div class="form-group mb-3">
            <label for="street">Street</label>
            <input type="text" name="street" class="form-control" value="{{ $project->street }}" placeholder="Enter street">
        </div>

        <!-- Mahalla Name -->
        <div class="form-group mb-3">
            <label for="mahalla">Mahalla Name</label>
            <input type="text" name="mahalla" class="form-control" value="{{ $project->mahalla }}" placeholder="Enter mahalla name">
        </div>

        <!-- Land -->
        <div class="form-group mb-3">
            <label for="land">Land (ha)</label>
            <input type="number" step="0.01" name="land" class="form-control" value="{{ $project->land }}" placeholder="e.g., 0.12">
        </div>

        <!-- Investor Initiative Date -->
        <div class="form-group mb-3">
            <label for="investor_initiative_date">Investor Initiative Date</label>
            <input type="date" name="investor_initiative_date" class="form-control" value="{{ $project->investor_initiative_date }}">
        </div>

        <!-- Company Name -->
        <div class="form-group mb-3">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" class="form-control" value="{{ $project->company_name }}" placeholder="Enter company name">
        </div>

        <!-- Contact Person -->
        <div class="form-group mb-3">
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" class="form-control" value="{{ $project->contact_person }}" placeholder="Enter contact person">
        </div>

        <!-- Hokim Resolution Number -->
        <div class="form-group mb-3">
            <label for="hokim_resolution_no">Hokim Resolution No</label>
            <input type="text" name="hokim_resolution_no" class="form-control" value="{{ $project->hokim_resolution_no }}" placeholder="Enter Hokim resolution number">
        </div>

        <div class="form-group mb-3">
            <label for="start_date">1-etap Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $project->start_date ?? '') }}" placeholder="Enter start date">
        </div>
        
        <div class="form-group mb-3">
            <label for="end_date">1-etap End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $project->end_date ?? '') }}" placeholder="Enter end date">
        </div>
        
        <div class="form-group mb-3">
            <label for="second_stage_start_date">2-etap Second Stage Start Date</label>
            <input type="date" name="second_stage_start_date" class="form-control" value="{{ old('second_stage_start_date', $project->second_stage_start_date ?? '') }}" placeholder="Enter second stage start date">
        </div>
        
        <div class="form-group mb-3">
            <label for="second_stage_end_date">2-etap Second Stage End Date</label>
            <input type="date" name="second_stage_end_date" class="form-control" value="{{ old('second_stage_end_date', $project->second_stage_end_date ?? '') }}" placeholder="Enter second stage end date">
        </div>
        

        <!-- Image -->
        <div class="form-group mb-3">
            <label for="elon_fayl">Elon</label>
            @if($project->elon_fayl)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $project->elon_fayl) }}" alt="Project Image" width="200">
                </div>
            @endif
            <input type="file" name="elon_fayl" class="form-control-file">
        </div>

        <div class="form-group mb-3">
            <label for="pratakol_fayl">Protokol</label>
            @if($project->pratakol_fayl)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $project->pratakol_fayl) }}" alt="Project Image" width="200">
                </div>
            @endif
            <input type="file" name="pratakol_fayl" class="form-control-file">
        </div>


        <div class="form-group mb-3">
            <label for="qoshimcha_fayl">Qoshimcha</label>
            @if($project->qoshimcha_fayl)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $project->qoshimcha_fayl) }}" alt="Project Image" width="200">
                </div>
            @endif
            <input type="file" name="qoshimcha_fayl" class="form-control-file">
        </div>

        <!-- Implementation Period -->
        <div class="form-group mb-3">
            <label for="implementation_period">Implementation Period (months)</label>
            <input type="number" name="implementation_period" class="form-control" value="{{ $project->implementation_period }}" placeholder="e.g., 36">
        </div>

        <!-- Status -->
        <div class="form-group mb-3">
            <label for="status">Status <span style="color:red;">*</span></label>
            <select name="status" class="form-control">
                <option value="1_step" {{ $project->status == '1_step' ? 'selected' : '' }}>Step 1</option>
                <option value="2_step" {{ $project->status == '2_step' ? 'selected' : '' }}>Step 2</option>
                <option value="archived" {{ $project->status == 'archived' ? 'selected' : '' }}>Archived</option>
                <option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <!-- Srok Realizatsi -->
        <div class="form-group mb-3">
            <label for="srok_realizatsi">Srok Realizatsi (months)</label>
            <input type="number" name="srok_realizatsi" class="form-control" value="{{ $project->srok_realizatsi }}" placeholder="e.g., 12">
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
@endsection
