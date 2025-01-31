<div>
<!-- Navbar -->
    <nav class="bg-white text-gray-800 p-4 shadow-md px-12">
                <div class="flex justify-between items-center">
                    <a href="#" class=" text-lg font-bold">Welcome {{ $welcomeMessage }} !</a>
                    <div class="flex gap-6 border-l-2 pl-10 border-gray-400">
                        <i class="fa-regular fa-bell mt-2 text-xl"></i>
                        <img src="{{ asset($imagePath) }}" class="h-10 w-10 rounded-full" alt="my image">
                        <h2 class="font-semibold text-blue-900 mt-2">{{ $label }}</h2>
                    </div>

                </div>
            </nav>
</div>
