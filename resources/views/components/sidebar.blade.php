<div class="w-72 bg-gray-800 text-white p-5 relative">
    <!-- Sidebar content -->
    <div class="flex flex-col align-center justify-center mb-20">
        <div class="flex gap-4">
            <img src="{{ asset('assets/logo.svg') }}" width="50px" alt="Logo">
            <h1 class="mt-3 text-3xl font-semibold">RAS</h1>
        </div>
        <p class="text-xs ml-2 mt-4 font-light">Attendance management dashboard</p>
    </div>

    {{-- Links --}}
    @php
        $gradient = 'linear-gradient(90deg, #5E656F 0%, #4E525D 25%, #474D5B 37.5%, #484C58 50%, #656974 75%, #525662 100%)';
    @endphp

    <ul class="space-y-5 px-4">
        @foreach ($links as $link)
            <li class="px-3 flex gap-4 items-center cursor-pointer
                {{ request()->url() == $link['url'] ? 'bg-gray-700 text-yellow-400' : '' }}"
                style="transition: background-color 0.3s ease;"
                onmouseover="this.style.backgroundImage='{{ $gradient }}'"
                onmouseout="this.style.backgroundImage='none'">
                <i class="fa-solid {{ $link['icon'] }}"></i>
                <a href="{{ $link['url'] }}" class="block py-2 px-2">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Logout Link -->
    <div class="absolute bottom-5 left-2 w-full px-4">
        <a href="{{ route('logout') }}"
        class="px-3 py-3 flex gap-4 items-center cursor-pointer"
        style="transition: background-color 0.3s ease;"
        onmouseover="this.style.backgroundImage='{{ $gradient }}'"
        onmouseout="this.style.backgroundImage='none'">
            <i class="fa-solid fa-sign-out-alt"></i>
            Logout
        </a>
    </div>
</div>


<script>
    function setActiveLink(clickedLink) {
        // Remove 'active' class from all links
        const links = document.querySelectorAll('li');
        links.forEach(link => link.classList.remove('active', 'bg-[{{ $gradient }}]'));

        // Add 'active' class to the clicked link
        clickedLink.classList.add('active');
        clickedLink.style.backgroundImage = '{{ $gradient }}';
    }
</script>
