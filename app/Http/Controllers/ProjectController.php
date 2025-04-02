<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        try {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('projects', 'public');
                $validated['image'] = $imagePath;
            }

            // Simpan tags sebagai string
            $validated['tags'] = $request->tags;

            $project = Project::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Project created successfully',
                'data' => $project
            ], 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error: ' . json_encode($e->errors()));
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error('Error creating project: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error creating project: ' . $e->getMessage()
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
            
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'url' => 'required|url',
                'tags' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Update data dasar
            $project->title = $validated['title'];
            $project->description = $validated['description'];
            $project->url = $validated['url'];
            $project->tags = $validated['tags'];

            // Handle image upload jika ada
            if ($request->hasFile('image')) {
                // Hapus image lama
                if ($project->image) {
                    Storage::delete('public/' . $project->image);
                }
                
                // Upload image baru
                $imagePath = $request->file('image')->store('projects', 'public');
                $project->image = $imagePath;
            }

            $project->save();

            return response()->json([
                'success' => true,
                'message' => 'Project berhasil diupdate!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengupdate project: ' . $e->getMessage()
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            // Cari project berdasarkan ID
            $project = Project::findOrFail($id);
            
            // Debug: Log image path dari database
            Log::info('Image path from database: ' . $project->image);
            
            // Hapus image dari storage jika ada
            if ($project->image) {
                // Path gambar yang tersimpan di database sudah termasuk 'projects/'
                // Jadi kita hanya perlu menambahkan 'public/'
                Storage::delete('public/' . $project->image);
                
                // Debug: Log deletion attempt
                Log::info('Attempting to delete: public/' . $project->image);
                Log::info('File exists: ' . (Storage::exists('public/' . $project->image) ? 'Yes' : 'No'));
            }
            
            // Hapus project dari database
            $project->delete();
            
            return response()->json([
                'success' => true, 
                'message' => 'Project berhasil dihapus!'
            ]);
            
        } catch (\Exception $e) {
            Log::error('Error deleting project: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Gagal menghapus project: ' . $e->getMessage()
            ], 500);
        }
    }
}
