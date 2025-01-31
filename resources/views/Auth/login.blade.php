<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        body {
            background-image: url('{{ asset('assets/home.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-blue-100 font-[nunito]">
        <div class="flex bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Left Panel with Background Image -->
            <div class="bg-[#0A1C49] text-white w-1/2 flex flex-col justify-between bg-cover bg-left" style="background-image: url('{{ asset('assets/bg.png') }}');">
                <div class="pt-5 pl-3">
                    <div class="flex mb-10 gap-3">
                        <img class="w-12 relative top-0" src="{{ asset('assets/logo.svg') }}" alt="">
                        <h1 class="text-4xl mb-4">RAS</h1>
                    </div>
                    <div class=" p-8">
                        <h1 class="text-5xl mb-10">Welcome back!</h1>
                        <h1 class="text-4xl my-10">RAS</h1>
                        <p class="text-sm leading-relaxed">
                            A real-time attendance system automates presence tracking, enhancing accuracy, efficiency, and accountability with instant reporting.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="w-1/2 bg-gray-50 p-8">
                <div class="mb-6 flex items-center">
                    <!-- Staff Type Radio Buttons -->
                    <label class="flex items-center mr-4">
                        <input type="radio" name="staffType" value="academic" class="form-radio text-blue-600" checked onclick="updateForm()">
                        <span class="ml-2 text-gray-700">Academic staff</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="staffType" value="discipline" class="form-radio text-blue-600" onclick="updateForm()">
                        <span class="ml-2 text-gray-700">Discipline staff</span>
                    </label>
                </div>

                <form id="loginForm">
                    @csrf

                    <!-- Position Dropdown -->
                    <div class="mb-4">
                        <label for="position" class="block text-gray-700 font-medium mb-2">Position</label>
                        <select id="position" name="position" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-500" onchange="updateForm()">
                            <option value="teacher">Teacher</option>
                            <option value="head_teacher">Head Teacher</option>
                            <option value="class_monitor" class="hidden">Class Monitor</option>
                            <option value="patron" class="hidden">Patron</option>
                        </select>
                    </div>

                    <!-- Class Dropdown -->
                    <div class="mb-4">
                        <label for="class" class="block text-gray-700 font-medium mb-2">Class</label>
                        <select id="class" name="class" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-500">
                            <option value="Y1">Y1A</option>
                            <option value="Y1">Y1B</option>
                            <option value="Y1">Y1C</option>
                            <option value="Y2">Y2A</option>
                            <option value="Y2">Y2B</option>
                            <option value="Y2">Y2C</option>
                            <option value="Y2">Y2D</option>
                            <option value="Y3">Y3A</option>
                            <option value="Y3">Y3B</option>
                            <option value="Y3">Y3C</option>
                            <option value="Y3">Y3D</option>
                        </select>
                    </div>

                    <!-- Lesson Dropdown (for Academic Staff only) -->
                    <div id="lesson-field" class="mb-4">
                        <label for="lesson" class="block text-gray-700 font-medium mb-2">Lesson</label>
                        <select id="lesson" name="lesson" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-500">
                            <option value="embedded">Embedded</option>
                            <option value="programming">Programming</option>
                            <option value="mathematics">Mathematics</option>
                        </select>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                        <input id="email" name="email" type="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-500" placeholder="Email">
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                        <input id="password" name="password" type="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring focus:ring-blue-500" placeholder="Password">
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700">
                        SIGN IN
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateForm() {
            const staffType = document.querySelector('input[name="staffType"]:checked').value;
            const positionDropdown = document.getElementById('position');
            const classDropdown = document.getElementById('class');
            const lessonField = document.getElementById('lesson-field');
            const lessonDropdown = document.getElementById('lesson');
            // Reset dropdown visibility
            for (const option of positionDropdown.options) {
                option.classList.add('hidden');
            }
            if (staffType === 'academic') {
                // Show relevant positions for Academic staff
                document.querySelector('option[value="teacher"]').classList.remove('hidden');
                document.querySelector('option[value="head_teacher"]').classList.remove('hidden');
                lessonField.classList.remove('hidden'); // Show lesson dropdown
                // Enable/disable dropdowns based on selected position
                if (positionDropdown.value === 'head_teacher') {
                    classDropdown.disabled = true;
                    lessonDropdown.disabled = true; // Disable lesson dropdown for head teacher
                } else {
                    classDropdown.disabled = false;
                    lessonDropdown.disabled = false; // Enable lesson dropdown
                }
            } else {
                // Show relevant positions for Discipline staff
                document.querySelector('option[value="teacher"]').classList.remove('hidden');
                document.querySelector('option[value="patron"]').classList.remove('hidden');
                lessonField.classList.add('hidden'); // Hide lesson dropdown
            }
        }

        // Submit form
        document.getElementById('loginForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const response = await fetch('/http://127.0.0.1:8000/api/RAS/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();
                if (data.success) {
                    alert('Login successful');
                } else {
                    alert('Invalid credentials');
                }
            } catch (error) {
                console.error('Error logging in:', error);
            }
        });
    </script>
</body>
</html>
