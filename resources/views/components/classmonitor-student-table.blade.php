<div class="relative mt-12 overflow-x-auto border border-gray-200 rounded-lg p-5 shadow-md bg-white">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
            <tr class="bg-[#C8D4F4]">
                <th scope="col" class="px-6 py-5">No</th>
                <th scope="col" class="px-6 py-5">First Name</th>
                <th scope="col" class="px-6 py-5">Last Name</th>
                <th scope="col" class="px-6 py-5">Year</th>
                <th scope="col" class="px-6 py-5">Class</th>
                <th scope="col" class="px-6 py-5">Email</th>
            </tr>
        </thead>
        <tbody id="studentTableBody">
            <!-- Data will be dynamically populated -->
        </tbody>
    </table>

    <div class="flex my-4 items-center justify-between gap-10">
        <!-- Left-aligned text -->
        <p id="entriesInfo" class="text-gray-600">Showing 1 to 3 of 3 entries</p>

        <!-- Center-aligned pagination -->
        <div class="flex items-center justify-center space-x-2">
            <!-- Previous Button -->
            <button id="prevBtn"
                class="px-4 py-2 text-gray-700 border border-gray-300 rounded hover:bg-gray-200 focus:outline-none"
                aria-label="Previous Page" disabled>
                Previous
            </button>

            <!-- Current Page -->
            <span id="currentPage"
                class="px-4 py-2 font-semibold text-white bg-green-600 border border-gray-300 rounded">
                1
            </span>

            <!-- Next Button -->
            <button id="nextBtn"
                class="px-4 py-2 text-gray-700 border border-gray-300 rounded hover:bg-gray-200 focus:outline-none"
                aria-label="Next Page">
                Next
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Fetch data from the server
        async function fetchStudentsForClassmonitor(page = 1, rowsPerPage = 5) {
            try {
                const response = await fetch(`/fetch-students-classmonitor`);
                const data = await response.json();

                // Paginate data
                const startIndex = (page - 1) * rowsPerPage;
                const endIndex = Math.min(startIndex + rowsPerPage, data.length);

                const paginatedData = data.slice(startIndex, endIndex);

                // Render table
                renderTable(paginatedData, data.length, page, rowsPerPage);
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        function renderTable(data, totalRows, currentPage, rowsPerPage) {
            const studentTableBody = document.getElementById('studentTableBody');
            const entriesInfo = document.getElementById('entriesInfo');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const currentPageDisplay = document.getElementById('currentPage');

            // Clear existing table rows
            studentTableBody.innerHTML = '';

            // Populate table rows
            data.forEach((item, index) => {
                const row = `<tr class="bg-white text-[#000000] border-b border-gray-200">
                    <td class="px-6 py-5">${item.no}</td>
                    <td class="px-6 py-5">${item.first_name}</td>
                    <td class="px-6 py-5">${item.last_name}</td>
                    <td class="px-6 py-5">${item.year}</td>
                    <td class="px-6 py-5">${item.class}</td>
                    <td class="px-6 py-5">${item.email}</td>

                </tr>`;
                studentTableBody.insertAdjacentHTML('beforeend', row);
            });

            // Update entries info
            const startIndex = (currentPage - 1) * rowsPerPage + 1;
            const endIndex = Math.min(currentPage * rowsPerPage, totalRows);
            entriesInfo.textContent = `Showing ${startIndex} to ${endIndex} of ${totalRows} entries`;

            // Enable/Disable buttons
            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = endIndex === totalRows;

            // Update current page display
            currentPageDisplay.textContent = currentPage;
        }

        // Pagination controls
        let currentPage = 1;
        const rowsPerPage = 5;

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                fetchStudentsForClassmonitor(currentPage, rowsPerPage);
            }
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            currentPage++;
            fetchStudentsForClassmonitor(currentPage, rowsPerPage);
        });

        // Initial fetch
        fetchStudentsForClassmonitor();
    });
</script>
