<div class="overflow-x-auto">
    <table class="w-full border-collapse border border-gray-200 rounded-lg shadow-sm text-sm">
        <thead class="bg-gray-100">
            <tr>
                @foreach ($headers as $header)
                    <th class="border border-gray-300 px-4 py-2 text-left font-medium">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr class="hover:bg-gray-50">
                    @foreach ($row as $key => $cell)
                        <td class="border border-gray-300 px-4 py-2">
                            @if ($key === 'action' && is_array($cell))
                                <!-- Action Dropdown -->
                                <div class="relative">
                                    <button class="p-2 bg-gray-200 rounded hover:bg-gray-300">...</button>
                                    <div class="absolute hidden group-hover:block bg-white border border-gray-300 rounded shadow-lg">
                                        @foreach ($cell as $actionLabel => $actionUrl)
                                            <a href="{{ $actionUrl }}" class="block px-4 py-2 hover:bg-gray-100">
                                                {{ $actionLabel }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                {{ $cell }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
