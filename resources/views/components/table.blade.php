<div class="relative overflow-x-auto border mt-5 w-2/3 rounded-lg p-5 shadow-md">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-white border-b">
            <tr>
                @foreach ($headers as $header)
                    <th scope="col" class="px-6 py-3">{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr class="bg-white text-black border-b">
                    <td class="px-6 py-6">{{ $row['no'] }}</td>
                    <td class="px-6 py-6">{{ $row['class'] }}</td>
                    <td class="px-6 py-6">{{ $row['stream'] }}</td>
                    <td class="px-6 py-6">{{ $row['name'] }}</td>
                    <td class="px-6 py-6">{{ $row['email'] }}</td>
                    <td class="px-6 py-6">
                        <input type="checkbox" name="action[]" value="{{ $row['no'] }}" class="cursor-pointer scale-150">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
