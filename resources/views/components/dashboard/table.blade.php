@props(['projects'])

{{-- Add SweetAlert2 CSS dan JS di bagian head --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.all.min.js"></script>

<style>
    
    .swal2-popup {
        padding: 1.5rem !important;
    }
    
    .swal2-title {
        padding: 0 !important;
        margin-bottom: 1.5rem !important;
    }
    
    .swal2-html-container {
        margin: 0 !important;
        padding: 0 !important;
    }
    
    .swal2-actions {
        margin-top: 1.5rem !important;
    }
    
    .swal2-confirm, .swal2-cancel {
        border-radius: 0.5rem !important;
        padding: 0.5rem 1.5rem !important;
    }
    
    </style>

<div class="overflow-x-auto">
    <table class="w-full">
        <thead>
            <tr class="bg-white/5">
                <th class="px-8 py-5 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Project</th>
                <th class="px-8 py-5 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Url</th>
                <th class="px-8 py-5 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Status</th>
                <th class="px-8 py-5 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Tags</th>
                <th class="px-8 py-5 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-white/5">
            @foreach ($projects as $p)
            <tr class="hover:bg-white/5 transition-colors">
                <td class="px-8 py-6">
                    <div class="flex items-center">
                        <img src="{{ asset('storage/' . $p['image']) }}" class="w-12 h-12 rounded-2xl" alt="Project Icon">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-white">{{ $p['title'] }}</div>
                            <div class="text-xs text-gray-400">{{ $p['description'] }}</div>
                        </div>
                    </div>
                </td>
                <td class="px-8 py-6">
                    <div class="text-xs text-gray-400">{{ $p['url'] }}</div>
                </td>
                <td class="px-8 py-6">
                    <span class="px-3 py-1 text-xs text-emerald-400 bg-emerald-400/10 rounded-full">Active</span>
                </td>
                <td class="px-8 py-6">
                    <div class="flex items-center">
                        <div class="text-sm text-white">{{ $p['tags'] }}</div>
                    </div>
                </td>
                <td class="px-8 py-6 relative">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false">
                        <button @click="open = !open" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu dengan z-index tinggi -->
                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 bg-gray-800 rounded-lg shadow-xl z-[9999]">
                            <div class="py-2">
                                <button onclick="showEditForm({{ $p['id'] }})" 
                                        class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                                    ✏️ Edit
                                </button>
                                <button onclick="confirmDelete({{ $p['id'] }})" 
                                        class="w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                                    🗑️ Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
async function showEditForm(id) {
    // Fetch existing project data
    const response = await fetch(`/projects/${id}`);
    const project = await response.json();
    
    // Show SweetAlert form with better styling
    Swal.fire({
        title: 'Edit Project',
        html: `
            <form id="editForm" class="px-2">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 text-left mb-1">Title</label>
                    <input type="text" id="title" class="swal2-input !w-full !m-0 !h-10" placeholder="Project title" value="${project.title}">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 text-left mb-1">Description</label>
                    <textarea id="description" class="swal2-textarea !w-full !m-0" rows="4" placeholder="Project description">${project.description}</textarea>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 text-left mb-1">URL</label>
                    <input type="url" id="url" class="swal2-input !w-full !m-0 !h-10" placeholder="Project URL" value="${project.url}">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 text-left mb-1">Tags</label>
                    <input type="text" id="tags" class="swal2-input !w-full !m-0 !h-10" placeholder="Project tags" value="${project.tags}">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 text-left mb-1">Current Image</label>
                    <img src="/storage/${project.image}" class="w-32 h-32 object-cover rounded-lg shadow-sm mb-2">
                    <input type="file" id="image" class="swal2-file block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                </div>
            </form>
        `,
        showCancelButton: true,
        confirmButtonText: 'Update',
        cancelButtonText: 'Cancel',
        width: '32rem',
        customClass: {
            container: 'edit-form-container',
            popup: '!max-w-3xl',
            htmlContainer: '!m-0 !p-0',
            confirmButton: 'swal2-confirm !bg-blue-600 !shadow-md hover:!bg-blue-700',
            cancelButton: 'swal2-cancel !bg-gray-400 !shadow-md hover:!bg-gray-500'
        },
        preConfirm: async () => {
            const formData = new FormData();
            formData.append('_method', 'PUT');
            formData.append('title', document.getElementById('title').value);
            formData.append('description', document.getElementById('description').value);
            formData.append('url', document.getElementById('url').value);
            formData.append('tags', document.getElementById('tags').value);
            
            const imageFile = document.getElementById('image').files[0];
            if (imageFile) {
                formData.append('image', imageFile);
            }

            try {
                const response = await fetch(`/projects/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: formData
                });

                const result = await response.json();
                
                if (!result.success) {
                    throw new Error(result.message);
                }
                
                return result;
            } catch (error) {
                Swal.showValidationMessage(
                    `Request failed: ${error}`
                );
            }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Updated!',
                text: 'Project has been updated successfully.',
                customClass: {
                    confirmButton: '!bg-green-600 hover:!bg-green-700'
                }
            }).then(() => {
                window.location.reload();
            });
        }
    });
}

    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Kirim DELETE request menggunakan AJAX
                fetch(`/projects/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    // Tampilkan pesan sukses
                    Swal.fire(
                        'Terhapus!',
                        'Project berhasil dihapus.',
                        'success'
                    ).then(() => {
                        // Refresh halaman
                        window.location.reload();
                    });
                })
                .catch(error => {
                    // Tampilkan pesan error
                    Swal.fire(
                        'Error!',
                        'Gagal menghapus project.',
                        'error'
                    );
                });
            }
        });
    }
</script>