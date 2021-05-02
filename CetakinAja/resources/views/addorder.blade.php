<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Order') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/order">

                <div class="form-group">
                <div>
                    <x-jet-label for="N_id" value="{{ __('Id Nota') }}" />
                    <x-jet-input id="N_id" class="block mt-1 w-full" type="text" name="N_id" :value="old('N_id')" required autofocus autocomplete="N_id" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="L_id" value="{{ __('Id Layanan') }}" />
                    <x-jet-input id="L_id" class="block mt-1 w-full" type="text" name="L_id" :value="old('L_id')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="nama_layanan" value="{{ __('Nama Layanan') }}" />
                    <x-jet-input id="nama_layanan" class="block mt-1 w-full" type="text" name="nama_layanan" :value="old('nama_layanan')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="harga" value="{{ __('Harga') }}" />
                    <x-jet-input id="harga" class="block mt-1 w-full" type="text" name="harga" :value="old('harga')" required />
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