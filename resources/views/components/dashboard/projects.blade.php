@props(['projects'])
@extends('dashboard')

@section('content')
<!-- Projects Table -->
<div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden">
    <div class="p-8 border-b border-white/5">
        <div class="flex justify-between items-center">
            <h3 class="text-xl font-light text-white">Projects</h3>
            <button onclick="createProject()" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white text-sm rounded-2xl transition-all duration-300 shadow-lg shadow-indigo-500/20">
                Create Project
            </button>
        </div>
    </div>
    <x-dashboard.table :projects="$projects"/>
</div>

<script>
    function createProject() {
        Swal.fire({
            title: 'Create New Project',
            html: `
                <form id="createProjectForm" class="px-4">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 text-left mb-2">Project Title</label>
                        <input type="text" id="projectTitle" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter project title">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 text-left mb-2">Description</label>
                        <textarea id="projectDescription" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter project description"></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 text-left mb-2">Project Image</label>
                        <input type="file" id="projectImage" accept="image/*" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 text-left mb-2">Project URL</label>
                        <input type="url" id="projectUrl" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="https://example.com">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 text-left mb-2">Tags</label>
                        <input type="text" id="projectTags" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter tags separated by comma">
                    </div>
                </form>
            `,
            width: '600px',
            showCancelButton: true,
            confirmButtonText: 'Create Project',
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#4F46E5',
            customClass: {
                popup: 'rounded-2xl',
                confirmButton: 'px-6 py-2.5 rounded-xl text-sm',
                cancelButton: 'px-6 py-2.5 rounded-xl text-sm'
            },
            preConfirm: async () => {
            try {
                const formData = new FormData();
                const title = document.getElementById('projectTitle').value;
                const description = document.getElementById('projectDescription').value;
                const image = document.getElementById('projectImage').files[0];
                const url = document.getElementById('projectUrl').value;
                const tags = document.getElementById('projectTags').value;

                // Validasi input
                if (!title || !description || !image || !url || !tags) {
                    throw new Error('Please fill in all fields');
                }

                formData.append('title', title);
                formData.append('description', description);
                formData.append('image', image);
                formData.append('url', url);
                formData.append('tags', tags);

                const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                const response = await fetch('/projects', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': token
                    },
                    credentials: 'same-origin'
                });

                const data = await response.json();
                console.log('Response:', data);  // Tambahkan ini untuk debugging

                if (!response.ok) {
                    throw new Error(data.message || JSON.stringify(data.errors) || 'Error creating project');
                }

                return data;
            } catch (error) {
                console.error('Error details:', error);  // Tambahkan ini untuk debugging
                Swal.showValidationMessage(error.message);
                return false;
            }
        }
        }).then((result) => {
            if (result.isConfirmed && result.value) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Project created successfully',
                    confirmButtonColor: '#4F46E5',
                }).then(() => {
                    window.location.reload();
                });
            }
        });

    }
    </script>
@endsection