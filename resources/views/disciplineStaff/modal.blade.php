<div x-data="{ isOpen: false, modalContent: null, modalAction: null }" x-show="isOpen" x-transition class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;">
    <div class="bg-white rounded-lg shadow-lg w-[80%] max-w-4xl p-6 relative">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-blue-600">
                <template x-if="modalAction === 'view'">View Report</template>
                <template x-if="modalAction === 'delete'">Delete Confirmation</template>
            </h3>
            <button @click="isOpen = false" class="text-gray-500 text-2xl hover:text-black">&times;</button>
        </div>
        <div class="overflow-y-auto max-h-[70vh]">
            <template x-if="modalAction === 'view'">
                <div>
                    <h4 class="font-bold text-lg mb-2" x-text="modalContent.class"></h4>
                    <p class="mb-4" x-text="modalContent.stream"></p>
                    <p><strong>Monitor:</strong> <span x-text="modalContent.Name"></span></p>
                    <p><strong>Email:</strong> <span x-text="modalContent.Email"></span></p>
                </div>
            </template>
            <template x-if="modalAction === 'delete'">
                <div>
                    <p class="text-gray-700 mb-4">Are you sure you want to delete this report?</p>
                    <p class="font-bold" x-text="modalContent.class + ' - ' + modalContent.stream"></p>
                </div>
            </template>
        </div>
        <div class="mt-4 flex justify-end">
            <template x-if="modalAction === 'delete'">
                <button
                    @click="handleDelete(modalContent)"
                    class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                    Confirm Delete
                </button>
            </template>
            <button @click="isOpen = false" class="bg-gray-300 px-4 py-2 rounded-lg hover:bg-gray-400">Close</button>
        </div>
    </div>
</div>
