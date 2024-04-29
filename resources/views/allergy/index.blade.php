<x-table-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Products with allergies</h1>
    </x-slot>

    <x-slot name="slot_above">
        <form action="{{ route('allergy.index') }}" method="GET" class="flex justify-center items-center space-x-2">
            <select name="allergy" id="allergy" class="p-2">
                <option value="all">Allergies</option>
                @foreach ($allergies as $allergy)
                <option value="{{ $allergy->id }}">{{ $allergy->name }}</option>
                @endforeach
            </select>
            <button class="p-2 bg-slate-600 hover:bg-slate-500 rounded-md font-black">Filter</button>
        </form>
        <form action="{{ route('allergy.index') }}" method="GET" class="flex justify-center items-center space-x-2">
            <input type="hidden" name="allergy" value="all">
            <button class="p-2 bg-slate-600 hover:bg-slate-500 rounded-md font-black">Clear</button>
        </form>
    </x-slot>

    <x-slot name="columnnames">
        @foreach ($column_names as $column)
        <th class="p-2">{{ $column }}</th>
        @endforeach
    </x-slot>

    <x-slot name="data">
        @foreach ($data as $product)
        @for ($i = 0; $i < count($product->allergies); $i++)
            <tr>
                @if ($i == 0)
                <td class="p-2">{{ $product->name }}</td>
                @else
                <td class="p-2">^^</td>
                @endif

                <td class="p-2">{{ $product->allergies[$i]->name }}</td>
                <td class="p-2">{{ $product->allergies[$i]->description }}</td>

                @if ($i == 0)
                <td class="p-2">{{ $product->in_storage ?? 'NULL'}}</td>
                <td class="p-2"><a href="{{ route('supplier.show', $product->suppliers[0]->id) }}">Show</a></td>
                @else
                <td class="p-2"> ^</td>
                @endif
            </tr>
            @endfor
            @endforeach
    </x-slot>
</x-table-layout>