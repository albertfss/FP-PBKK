<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Order') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/courier">

                <div class="form-group">
                <div>
                    <x-jet-label for="K_id" value="{{ __('Id Kurir') }}" />
                    <x-jet-input id="K_id" class="block mt-1 w-full" type="text" name="K_id" :value="old('K_id')" required autofocus autocomplete="K_id" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="K_nama" value="{{ __('Nama kurir') }}" />
                    <x-jet-input id="K_nama" class="block mt-1 w-full" type="text" name="K_nama" :value="old('K_nama')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="K_email" value="{{ __('email') }}" />
                    <x-jet-input id="K_email" class="block mt-1 w-full" type="text" name="K_email" :value="old('K_email')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="K_biaya" value="{{ __('harga') }}" />
                    <x-jet-input id="K_biaya" class="block mt-1 w-full" type="text" name="K_biaya" :value="old('K_biaya')" required />
                </div>


                <div class="form-group">
                <br>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Order</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>