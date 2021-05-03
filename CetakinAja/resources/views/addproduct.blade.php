<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Product') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/product">

                <div class="form-group">
                <div>
                    <x-jet-label for="Pr_id" value="{{ __('Id Produk') }}" />
                    <x-jet-input id="Pr_id" class="block mt-1 w-full" type="text" name="Pr_id" :value="old('Pr_id')" required autofocus autocomplete="P_id" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="Pr_nama" value="{{ __('Nama Produk') }}" />
                    <x-jet-input id="Pr_nama" class="block mt-1 w-full" type="text" name="Pr_nama" :value="old('Pr_nama')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="Pr_harga" value="{{ __('Harga') }}" />
                    <x-jet-input id="Pr_harga" class="block mt-1 w-full" type="text" name="Pr_harga" :value="old('Pr_harga')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="Pr_satuan" value="{{ __('Satuan') }}" />
                    <x-jet-input id="Pr_satuan" class="block mt-1 w-full" type="text" name="Pr_satuan" :value="old('Pr_satuan')" required />
                
                </div>
                
                <div class="form-group">
                <br>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Printing</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>