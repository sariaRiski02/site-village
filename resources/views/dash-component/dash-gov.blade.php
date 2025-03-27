@extends('layouts.dashboard')

@section('main')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-[#071952]">Edit struktur pemerintahan</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Organizational Chart Form -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-[#071952]">Add/Edit Organizational Structure</h2>
            <form id="org-chart-node-form" method="post" class="space-y-4" enctype="multipart/form-data" onsubmit="return false;">
                @csrf
                <input type="hidden" id="node-id" name="node_id">
                <div>
                    <label for="node-name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input 
                        type="text" 
                        id="node-name" 
                        name="name" 
                        placeholder="Enter name" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#071952]"
                        required
                    >
                </div>
                <div>
                    <label for="node-title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input 
                        type="text" 
                        id="node-title" 
                        name="title" 
                        placeholder="Enter job title" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#071952]"
                        required
                    >
                </div>
                <div>
                    <label for="node-parent" class="block text-sm font-medium text-gray-700 mb-2">Parent Node</label>
                    <select 
                        id="node-parent" 
                        name="parent_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg 
                        focus:outline-none focus:ring-2 focus:ring-[#071952]"
                    >
                        <option value="">Select Parent (Optional)</option>
                    </select>
                </div>
                <div>
                    <label for="node-image" class="block text-sm font-medium text-gray-700 mb-2">Profile Image</label>
                    <input 
                        type="file" 
                        id="node-image" 
                        name="image" 
                        accept="image/*"
                        class="block w-full text-sm text-gray-500 
                        file:mr-4 file:py-2 file:px-4 
                        file:rounded-lg file:border-0 
                        file:text-sm file:font-semibold
                        file:bg-[#071952] file:text-white
                        hover:file:bg-[#2a3352]"
                    >
                </div>
                <div class="flex space-x-4">
                    <button 
                        type="submit" 
                        id="add-node-btn"
                        class="flex-1 px-4 py-2 bg-[#071952] text-white rounded-lg 
                        hover:bg-[#2a3352] focus:outline-none focus:ring-2 
                        focus:ring-[#071952] focus:ring-offset-2"
                    >
                        Add Node
                    </button>
                    <button 
                        type="button" 
                        id="cancel-edit-btn"
                        class="flex-1 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg 
                        hover:bg-gray-300 focus:outline-none focus:ring-2 
                        focus:ring-gray-400 focus:ring-offset-2 hidden"
                    >
                        Cancel
                    </button>
                </div>
            </form>
        </div>

        <!-- Organizational Chart Preview -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4 text-[#071952]">Organizational Chart Preview</h2>
            <div id="chart-container" class="w-full h-[500px] overflow-auto">
                <!-- Org Chart will be rendered here -->
            </div>
        </div>
    </div>

    <!-- Save and Reset Buttons -->
    <div class="flex justify-end mt-6 space-x-4">
        <button 
            id="reset-chart-btn"
            class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg 
            hover:bg-gray-300 focus:outline-none focus:ring-2 
            focus:ring-gray-400 focus:ring-offset-2"
        >
            Reset Chart
        </button>
        <button 
            id="save-chart-btn"
            class="px-6 py-3 bg-[#071952] text-white rounded-lg 
            hover:bg-[#2a3352] focus:outline-none focus:ring-2 
            focus:ring-[#071952] focus:ring-offset-2"
        >
            Save Organizational Chart
        </button>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/css/jquery.orgchart.min.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/js/jquery.orgchart.min.js"></script>
<script>
$(function() {
    let orgChartData = {
        id: 1,
        name: "Root",
        title: "Organization Head",
        img: "{{ asset('images/kades.png') }}",
        children: []
    };

    let chart;
    let editingNodeId = null;

    // Debug function to log current chart data
    function debugChartData() {
        console.log('Current Org Chart Data:', JSON.stringify(orgChartData, null, 2));
    }

    // Improved initialization function with more logging
    function initOrgChart() {
        $('#chart-container').empty();
        
        // Ensure there's data to render
        if (!orgChartData.children || orgChartData.children.length === 0) {
            $('#chart-container').html('<p>No organizational chart data available</p>');
            return;
        }

        try {
            chart = $('#chart-container').orgchart({
                'data': orgChartData,
                'nodeTemplate': function(data) {
                    return `
                        <div class="node-actions flex justify-center space-x-2 absolute top-1 right-1 z-10">
                            <button class="edit-node text-xs bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center" data-id="${data.id}">✎</button>
                            <button class="delete-node text-xs bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center" data-id="${data.id}">✖</button>
                        </div>
                        <div class="title text-center font-bold">${data.name}</div>
                        <div class='flex justify-center mb-2'>
                            <img src="${data.img}" class='w-16 h-16 rounded-full object-cover border-2 border-gray-300' alt="${data.name}">
                        </div>
                        <div class="content text-center text-sm">${data.title}</div>
                    `;
                },
                'nodeContent': 'title'
            });
        } catch (error) {
            console.error('Error initializing org chart:', error);
            $('#chart-container').html(`<p>Error rendering chart: ${error.message}</p>`);
        }

        // Additional debugging
        debugChartData();
    }

    // Form submission with enhanced logging
    $('#org-chart-node-form').on('submit', function(e) {
        e.preventDefault();
        
        const name = $('#node-name').val();
        const title = $('#node-title').val();
        const parentId = $('#node-parent').val();
        const imageFile = $('#node-image')[0].files[0];
        
        // Log form submission details
        console.log('Form Submission Details:', {
            name,
            title,
            parentId,
            imageFile: imageFile ? imageFile.name : 'No file'
        });

        const newNode = {
            id: editingNodeId || Date.now(),
            name: name,
            title: title,
            img: imageFile 
                ? URL.createObjectURL(imageFile) 
                : "{{ asset('images/default-profile.png') }}"
        };

        console.log('New Node:', newNode);

        // More robust node addition logic
        if (parentId) {
            const parentNode = findNodeById(parseInt(parentId));
            if (parentNode) {
                if (editingNodeId) {
                    // Update existing node
                    const nodeToUpdate = findNodeById(editingNodeId);
                    if (nodeToUpdate) {
                        Object.assign(nodeToUpdate, newNode);
                    }
                } else {
                    // Ensure children array exists
                    parentNode.children = parentNode.children || [];
                    parentNode.children.push(newNode);
                }
            }
        } else if (!editingNodeId) {
            // Add to root if no parent selected
            orgChartData.children = orgChartData.children || [];
            orgChartData.children.push(newNode);
        }

        // Reset form and reinitialize chart
        initOrgChart();
        $('#org-chart-node-form')[0].reset();
        $('#cancel-edit-btn').addClass('hidden');
        $('#add-node-btn').text('Add Node');
        editingNodeId = null;
    });

    // Initial chart initialization
    initOrgChart();
});
</script>
@endpush