<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Review') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

            <form method="POST" action="/review">

                <div class="form-group">
                <div>
                    <x-jet-label for="R_id" value="{{ __('Id Review') }}" />
                    <x-jet-input id="R_id" class="block mt-1 w-full" type="text" name="R_id" :value="old('R_id')" required autofocus autocomplete="R_id" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="R_skor" value="{{ __('Skor Review') }}" />
                    <x-jet-input id="R_skor" class="block mt-1 w-full" type="text" name="R_skor" :value="old('R_skor')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="R_deskripsi" value="{{ __('Deskripsi') }}" />
                    <x-jet-input id="R_deskripsi" class="block mt-1 w-full" type="text" name="R_deskripsi" :value="old('R_deskripsi')" required />
                </div>


                <div class="form-group">
                <br>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Review</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>
