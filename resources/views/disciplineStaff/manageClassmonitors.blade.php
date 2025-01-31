@extends('disciplineStaff.layout')

@section('content')
<div class="container mx-auto p-6" x-data="{
    showModal: false,
    modalContent: null,
    showNewClassMonitorForm: false
}">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="font-semibold text-2xl text-blue-600">Dashboard</h2>
            <h1 class="text-gray-500">Classmonitors / Dashboard</h1>
            <p class="text-lg mt-3">List of all class monitors</p>
        </div>
        <!-- Button to open the form modal -->
        <button @click="showNewClassMonitorForm = true" class="bg-green-600 text-white font-bold px-4 py-2 rounded-lg">New class monitor</button>
    </div>

    <!-- Student Table -->
    <div x-data="{ showAll: false }" class="relative overflow-x-auto border rounded-lg shadow-md bg-white">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Class</th>
                    <th scope="col" class="px-6 py-3">Stream</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $index => $report)
                <tr x-show="showAll || {{ $index }} < 5" class="bg-white border-b">
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['no'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['class'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['stream'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['Name'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">{{ $report['Email'] }}</td>
                    <td class="px-6 py-4 text-bold text-gray-600">
                        <div class="relative inline-block text-left" x-data="{ showDropdown: false }">
                            <button @click="showDropdown = !showDropdown" class="inline-flex items-center justify-center w-8 h-8 text-gray-500 hover:text-black focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                                </svg>
                            </button>
                            <div x-show="showDropdown" @click.away="showDropdown = false" class="absolute right-0 mt-2 w-28 bg-white border rounded-md shadow-lg z-50">
                                <ul class="py-1 text-sm text-gray-700">
                                    <li>
                                        <button @click="modalContent = {{ json_encode($report) }}; showModal = true" class="text-left w-full block px-4 py-2 hover:bg-gray-300 hover:font-semibold">View</button>
                                    </li>
                                    <li>
                                        <button @click="modalContent = {{ json_encode($report) }}; showModal = true" class="text-left w-full block px-4 py-2 hover:bg-gray-300 hover:font-semibold">Delete</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Show More Button -->
        <div class="text-right mt-4 mr-4 cursor-pointer">
            <p @click="showAll = !showAll" class="text-blue-500 font-bold px-4 py-2 rounded-lg">
                <span x-text="showAll ? 'Show Less' : 'Show More'"></span>
            </p>
        </div>
    </div>

    <!-- New Class Monitor Modal -->
    <div x-show="showNewClassMonitorForm" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;" x-transition>
        <div class="bg-white rounded-lg shadow-lg w-[400px] p-6 relative">
            <div class="flex flex-col items-center">
                <h3 class="text-lg font-semibold text-blue-600 text-center">Add New Class Monitor</h3>
            </div>
            <button @click="showNewClassMonitorForm = false" class="absolute top-3 right-3 text-gray-500 text-2xl hover:text-black">&times;</button>
            <form class="mt-4 space-y-4">
                <div>
                    <label for="fullname" class="block text-sm font-semibold text-gray-700">Fullname</label>
                    <input type="text" id="fullname" name="fullname" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-200" required>
                </div>
                <div>
                    <label for="class" class="block text-sm font-semibold text-gray-700">Class</label>
                    <select id="class" name="class" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-200" required>
                        <option value="" selected disabled>Select a class</option>
                        <!-- Add your class options dynamically -->
                    </select>
                </div>
                <div>
                    <label for="stream" class="block text-sm font-semibold text-gray-700">Stream</label>
                    <select id="stream" name="stream" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-200" required>
                        <option value="" selected disabled>Select a stream</option>
                        <!-- Add your stream options dynamically -->
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <button @click="showNewClassMonitorForm = false" type="button" class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- View/Delete Modal -->
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;" x-transition>
        <div class="bg-white rounded-lg shadow-lg w-[400px] p-6 relative">
            <button @click="showModal = false; modalContent = null" class="absolute top-3 right-3 text-gray-500 text-2xl hover:text-black">&times;</button>
            <h3 class="text-lg font-semibold text-blue-600 text-center mb-4">Class Monitor Details</h3>
            <p><strong>No:</strong> <span x-text="modalContent?.no"></span></p>
            <p><strong>Class:</strong> <span x-text="modalContent?.class"></span></p>
            <p><strong>Stream:</strong> <span x-text="modalContent?.stream"></span></p>
            <p><strong>Name:</strong> <span x-text="modalContent?.Name"></span></p>
            <p><strong>Email:</strong> <span x-text="modalContent?.Email"></span></p>
            <div class="mt-4 flex justify-end space-x-2">
                <button @click="showModal = false; modalContent = null" class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Close</button>
                <button @click="showModal = false; modalContent = null" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection
