<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Printing') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/printing">

                <div class="form-group">
                <div>
                    <x-jet-label for="P_id" value="{{ __('Id Percetakan') }}" />
                    <x-jet-input id="P_id" class="block mt-1 w-full" type="text" name="P_id" :value="old('P_id')" required autofocus autocomplete="P_id" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="P_nama" value="{{ __('Nama Percetakan') }}" />
                    <x-jet-input id="P_nama" class="block mt-1 w-full" type="text" name="P_nama" :value="old('P_nama')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="P_email" value="{{ __('email') }}" />
                    <x-jet-input id="P_email" class="block mt-1 w-full" type="text" name="P_email" :value="old('P_email')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="P_alamat" value="{{ __('alamat') }}" />
                    <x-jet-input id="P_alamat" class="block mt-1 w-full" type="text" name="P_alamat" :value="old('P_alamat')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="P_notelp" value="{{ __('notelp') }}" />
                    <x-jet-input id="P_notelp" class="block mt-1 w-full" type="text" name="P_notelp" :value="old('P_notelp')" required />
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