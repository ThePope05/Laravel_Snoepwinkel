<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold">Snoepwinkel</h1>
    </x-slot>

    <a href="{{ route('allergy.index') }}" class="w-full px-4 bg-slate-600 hover:bg-slate-500 rounded-md font-black">Allergies</a>
</x-app-layout>