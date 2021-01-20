<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Livewire Autocomplete Example - MDITech') }}
    </h2>
</x-slot>
<div class="py-12">

    <div class="max-w-sm mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <input
                type="text"
                class="w-full"
                placeholder="Search contact..."
                wire:model.debounce.500ms="query"
                wire:keydown.escape="resetProperties"
                wire:keydown.tab="resetProperties"
                wire:keydown.enter="showContact"
            />

            @if(!empty($query))
                <div class="fixed top-0 right-0 bottom-0 left-0" wire:click="resetProperties"></div>
                <div wire:loading class=" absolute block group p-2 bg-yellow-100">Searching...</div>
                @if(!empty($data))
                <div class="absolute  bg-white">
                    @foreach($data as $row)
                        <a
                            href="{{ route('show-contact', $row['id']) }}"
                            class="block group p-2 hover:bg-blue-100"
                        >{{ $row['name'] }}</a>
                    @endforeach
                </div>
                @else
                    <div class="absolute block group p-2 bg-red-100">No contact found.</div>
                @endif
            @endif
        </div>
    </div>
</div>
