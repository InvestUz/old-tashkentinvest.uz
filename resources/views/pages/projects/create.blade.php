@extends('layouts.admin')

@section('content')
    <h1>Create Project</h1>

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Unique Number -->
        <div class="form-group mb-3">
            <label for="unique_number">Unique Number</label>
            <input type="text" name="unique_number" class="form-control" placeholder="e.g., YUN0001">
        </div>

        <!-- Category -->
        <div class="form-group mb-3">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control">
                <option value="">— Select Category —</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- District -->
        <div class="form-group mb-3">
            <label for="district">District <span style="color:red;">*</span></label>
            <input type="text" name="district" class="form-control" placeholder="Enter district" required>
        </div>

        <!-- Street -->
        <div class="form-group mb-3">
            <label for="street">Street</label>
            <input type="text" name="street" class="form-control" placeholder="Enter street">
        </div>

        <!-- Mahalla Name -->
        <div class="form-group mb-3">
            <label for="mahalla">Mahalla Name</label>
            <input type="text" name="mahalla" class="form-control" placeholder="Enter mahalla name">
        </div>

        <!-- Land -->
        <div class="form-group mb-3">
            <label for="land">Land (ha)</label>
            <input type="number" step="0.01" name="land" class="form-control" placeholder="e.g., 0.12">
        </div>

        <!-- Investor Initiative Date -->
        <div class="form-group mb-3">
            <label for="investor_initiative_date">Investor Initiative Date</label>
            <input type="date" name="investor_initiative_date" class="form-control">
        </div>

        <!-- Company Name -->
        <div class="form-group mb-3">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" class="form-control" placeholder="Enter company name">
        </div>

        <!-- Contact Person -->
        <div class="form-group mb-3">
            <label for="contact_person">Contact Person</label>
            <input type="text" name="contact_person" class="form-control" placeholder="Enter contact person">
        </div>

        <!-- Hokim Resolution Number -->
        <div class="form-group mb-3">
            <label for="hokim_resolution_no">Hokim Resolution No</label>
            <input type="text" name="hokim_resolution_no" class="form-control"
                placeholder="Enter Hokim resolution number">
        </div>

        <div class="form-group mb-3">
            <label for="start_date">1-etap Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}" placeholder="Enter start date">
        </div>
        
        <div class="form-group mb-3">
            <label for="end_date">1-etap End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}" placeholder="Enter end date">
        </div>
        
        <div class="form-group mb-3">
            <label for="second_stage_start_date">2-etap Second Stage Start Date</label>
            <input type="date" name="second_stage_start_date" class="form-control" value="{{ old('second_stage_start_date') }}" placeholder="Enter second stage start date">
        </div>
        
        <div class="form-group mb-3">
            <label for="second_stage_end_date">2-etap Second Stage End Date</label>
            <input type="date" name="second_stage_end_date" class="form-control" value="{{ old('second_stage_end_date') }}" placeholder="Enter second stage end date">
        </div>
        
        <!-- Image -->
        
        <div class="form-group mb-3">
            <label for="elon_fayl">Elon Fayl</label>
            <input type="file" name="elon_fayl" class="form-control-file">
        </div>

        <div class="form-group mb-3">
            <label for="pratakol_fayl">Pratakol Fayl</label>
            <input type="file" name="pratakol_fayl" class="form-control-file">
        </div>

        <div class="form-group mb-3">
            <label for="qoshimcha_fayl">Qoshimcha Image</label>
            <input type="file" name="qoshimcha_fayl" class="form-control-file">
        </div>



        <!-- Implementation Period -->
        <div class="form-group mb-3">
            <label for="implementation_period">Implementation Period (months)</label>
            <input type="number" name="implementation_period" class="form-control" placeholder="e.g., 36">
        </div>

        <!-- Status -->
        <div class="form-group mb-3">
            <label for="status">Status <span style="color:red;">*</span></label>
            <select name="status" class="form-control">
                <option value="1_step">Step 1</option>
                <option value="2_step">Step 2</option>
                <option value="archived">Archived</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <!-- Srok realizatsi (optional) -->
        <div class="form-group mb-3">
            <label for="srok_realizatsi">Srok Realizatsi (months)</label>
            <input type="number" name="srok_realizatsi" class="form-control" placeholder="e.g., 12">
        </div>

        <button type="submit" class="btn btn-success">Create Project</button>
    </form>
@endsection
