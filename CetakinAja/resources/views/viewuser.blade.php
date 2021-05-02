
<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('List User') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Users List</div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Id user</th>
                    <th class="text-left p-3 px-5">Nama</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Alamat</th>
                    <th class="text-left p-3 px-5">No. Telp</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">
                        {{$user['id']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$user['name']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$user['email']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$user['alamat']}}
                        </td>
                        <td class="p-3 px-5">
                        {{$user['no_telp']}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>