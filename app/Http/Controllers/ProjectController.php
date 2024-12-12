<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Display a listing of projects
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->with('category')->get();
        return view('pages.projects.index', compact('projects'));
    }

    // Show the form for creating a new project
    public function create()
    {
        $categories = Category::all();
        return view('pages.projects.create', compact('categories'));
    }

    // Store a newly created project in storage
    public function store(Request $request)
    {
        $request->validate([
            'unique_number' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'district' => 'required|string',
            'street' => 'nullable|string',
            'mahalla' => 'nullable|string',
            'land' => 'nullable|numeric',
            'investor_initiative_date' => 'nullable|date',
            'company_name' => 'nullable|string',
            'contact_person' => 'nullable|string',
            'hokim_resolution_no' => 'nullable|string',
            'elon_fayl' => 'nullable',
            'pratakol_fayl' => 'nullable',
            'qoshimcha_fayl' => 'nullable',
            'implementation_period' => 'nullable|integer',
            'status' => 'required|in:1_step,2_step,archived,completed',
            'srok_realizatsi' => 'nullable|integer',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'second_stage_start_date' => 'nullable',
            'second_stage_end_date' => 'nullable',
        ]);

        $data = $request->all();

        if ($request->hasFile('elon_fayl')) {
            $data['elon_fayl'] = $request->file('elon_fayl')->store('project_images/elon', 'public');
        }
        if ($request->hasFile('pratakol_fayl')) {
            $data['pratakol_fayl'] = $request->file('pratakol_fayl')->store('project_images/pratakol', 'public');
        }
        if ($request->hasFile('qoshimcha_fayl')) {
            $data['qoshimcha_fayl'] = $request->file('qoshimcha_fayl')->store('project_images/qoshimcha', 'public');
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    // Show the form for editing the specified project
    public function edit($id)
    {
        $categories = Category::all();
        $project = Project::findOrFail($id);
        return view('pages.projects.edit', compact('project', 'categories'));
    }

    // Update the specified project in storage
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'unique_number' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,id',
            'district' => 'required|string',
            'street' => 'nullable|string',
            'mahalla' => 'nullable|string',
            'land' => 'nullable|numeric',
            'investor_initiative_date' => 'nullable|date',
            'company_name' => 'nullable|string',
            'contact_person' => 'nullable|string',
            'hokim_resolution_no' => 'nullable|string',
            'elon_fayl' => 'nullable',
            'pratakol_fayl' => 'nullable',
            'qoshimcha_fayl' => 'nullable',
            'implementation_period' => 'nullable|integer',
            'status' => 'required|in:1_step,2_step,archived,completed',
            'srok_realizatsi' => 'nullable|integer',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'second_stage_start_date' => 'nullable',
            'second_stage_end_date' => 'nullable',
        ]);

        $data = $request->all();

        if ($request->hasFile('elon_fayl')) {
            // Delete old elon_fayl if exists
            if ($project->elon_fayl) {
                Storage::disk('public')->delete($project->elon_fayl);
            }
            $data['elon_fayl'] = $request->file('elon_fayl')->store('project_images/pratakol', 'public');
        }

        if ($request->hasFile('pratakol_fayl')) {
            // Delete old pratakol_fayl if exists
            if ($project->pratakol_fayl) {
                Storage::disk('public')->delete($project->pratakol_fayl);
            }
            $data['pratakol_fayl'] = $request->file('pratakol_fayl')->store('project_images', 'public');
        }

        if ($request->hasFile('qoshimcha_fayl')) {
            // Delete old qoshimcha_fayl if exists
            if ($project->qoshimcha_fayl) {
                Storage::disk('public')->delete($project->qoshimcha_fayl);
            }
            $data['qoshimcha_fayl'] = $request->file('qoshimcha_fayl')->store('project_images/qoshimcha', 'public');
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    // Remove the specified project from storage
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
