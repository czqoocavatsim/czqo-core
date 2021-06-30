@extends('layouts.primary', ['solidNavBar' => false])


@section('title', 'Controller Roster - ')
@section('description', "Gander Oceanic's Oceanic Controller Roster")

@section('content')

<div class="bg-czqo-blue text-white text-3xl">
    <div class=" lg:mx-auto lg:max-w-6xl px-14 py-10">
        Controller Roster
    </div>
</div>
<div class="lg:mx-auto lg:max-w-6xl px-14 py-6">
    <p class="text-sm text-gray-500">Please note that the 'full name' field on this roster is dependent on the controller's name settings on the CZQO Core system.<br><i class="fas fa-certificate"></i> = Solo Certification</p>
    <div class="flex flex-col my-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Country
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Provider
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($roster as $controller)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $controller->user->full_name_cid }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $controller->user->vatsim_membership_data->rating->grp }} ({{ $controller->user->vatsim_membership_data->rating->short }})
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"> </div>
                                    <div class="text-sm text-gray-500">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                </td>
                            </tr>
                        @endforeach

                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $roster->links() }}
</div>
@endsection
