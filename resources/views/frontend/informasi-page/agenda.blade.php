@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold">AGENDA KEGIATAN</h1>
        </div>
        <div class="container mx-auto mt-10 p-4">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Agenda Kegiatan</h1>
                <input type="text" id="searchInput" placeholder="Search..."
                    class="px-4 py-2 border bg-gray-50 border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="overflow-x-auto">
                <table class="table-auto w-full bg-white shadow-md rounded-lg">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="px-1 py-2">No.</th>
                            <th class="px-4 py-2">Kegiatan</th>
                            <th class="px-4 py-2">Dihadiri Oleh</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-4 py-2">Waktu</th>
                            <th class="px-4 py-2">Tempat</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Example rows (you can generate more dynamically) -->
                        <tr class="bg-gray-100 border-b text-center">
                            <td class="px-1 py-2">1</td>
                            <td class="px-4 py-2">Meeting A</td>
                            <td class="px-4 py-2">Person 1</td>
                            <td class="px-4 py-2">2024-10-01</td>
                            <td class="px-4 py-2">10:00 AM</td>
                            <td class="px-4 py-2">Room 1</td>
                        </tr>
                        <tr class="bg-white border-b text-center">
                            <td class="px-1 py-2">2</td>
                            <td class="px-4 py-2">Meeting B</td>
                            <td class="px-4 py-2">Person 2</td>
                            <td class="px-4 py-2">2024-10-02</td>
                            <td class="px-4 py-2">11:00 AM</td>
                            <td class="px-4 py-2">Room 2</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex justify-end mt-4 space-x-2">
                <button id="prevPage" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Previous</button>
                <button id="nextPage" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Next</button>
            </div>
        </div>
    </div>
    <script>
        const rowsPerPage = 5;
        let currentPage = 1;

        function paginateTable() {
            const rows = document.querySelectorAll('#tableBody tr');
            const totalRows = rows.length;
            const totalPages = Math.ceil(totalRows / rowsPerPage);

            // Hide all rows
            rows.forEach((row, index) => {
                row.style.display = 'none';
                if (index >= (currentPage - 1) * rowsPerPage && index < currentPage * rowsPerPage) {
                    row.style.display = '';
                }
            });

            // Disable/Enable buttons based on the page number
            document.getElementById('prevPage').disabled = currentPage === 1;
            document.getElementById('nextPage').disabled = currentPage === totalPages;
        }

        // Handle search
        document.getElementById('searchInput').addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#tableBody tr');
            rows.forEach(row => {
                const match = Array.from(row.cells).some(cell => cell.textContent.toLowerCase().includes(
                    filter));
                row.style.display = match ? '' : 'none';
            });
        });

        // Handle pagination
        document.getElementById('prevPage').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                paginateTable();
            }
        });

        document.getElementById('nextPage').addEventListener('click', () => {
            const totalRows = document.querySelectorAll('#tableBody tr').length;
            const totalPages = Math.ceil(totalRows / rowsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                paginateTable();
            }
        });

        // Initial Pagination
        paginateTable();
    </script>
@endsection
