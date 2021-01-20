<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Show Contact - MDITech') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <div>
            <div class="grid grid-cols-2 font-bold text-xl">
                <div>Name</div>
                <div>Email</div>
            </div>
            <div class="grid grid-cols-2 ">
                <div>{{ $data->name }}</div>
                <div>{{ $data->email }}</div>
              </div>
    </div>
</div>
