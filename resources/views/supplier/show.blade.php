<x-table-layout>
    <x-slot name="header">
        {{ __('Supplier') }}
    </x-slot>

    <x-slot name="columnnames">
        <th class="p-2">Supplier Name</th>
        <th class="p-2">Contact person</th>
        <th class="p-2">Phone</th>
        <th class="p-2">City</th>
        <th class="p-2">Street</th>
        <th class="p-2">House number</th>
    </x-slot>

    <x-slot name="data">
        <tr>
            <td class="p-2">{{ $supplier->sup_name }}</td>
            <td class="p-2">{{ $supplier->cont_name }}</td>
            <td class="p-2">{{ $supplier->phone }}</td>
            @if ($address !== null)
            <td class="p-2">{{ $address->city }}</td>
            <td class="p-2">{{ $address->street }}</td>
            <td class="p-2">{{ $address->number }}</td>
            @else
            <td class="p-2">No address available</td>
            @endif
        </tr>
    </x-slot>
</x-table-layout>