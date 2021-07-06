@extends('layouts.primary')
@section('content')

<div class="bg-czqo-blue text-white text-3xl">
    <div class=" lg:mx-auto lg:max-w-6xl px-14 py-10">
        Controller Roster
    </div>
</div>

<div class="lg:mx-auto lg:max-w-6xl px-14 py-6">
    <p class="text-sm text-gray-500 mb-6">Please note that the 'full name' field on this roster is dependent on the controller's name settings on the CZQO Core system.<br><i class="fas fa-certificate"></i> = Solo Certification</p>
    {{ $roster->links() }}
    <div class="border shadow-sm mt-6 rounded-md overflow-x-auto">
        <table class="w-full overflow-x-scroll">
            <thead>
                <tr class="bg-gray-50 text-gray-600 text-sm leading-normal">
                    <th class="py-3 px-6 text-left">CID</th>
                    <th class="py-3 px-6 text-left">Name / Rating</th>
                    <th class="py-3 px-6 text-left">Division</th>
                    <th class="py-3 px-6 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roster as $row)
                    <tr class="text-gray-800 text-sm leading-normal font-normal">
                        <th class="py-3 px-6 text-left">
                            {{ $row->cid }}
                        </th>
                        <th class="py-3 px-6 text-left">
                            {{ $row->user->full_name }} / {{ $row->user->vatsim_membership_data->rating->short }}
                        </th>
                        <th class="py-3 px-6 text-left">
                            {{ $row->user->vatsim_membership_data->division->name }}
                        </th>
                        <th class="py-3 px-6 text-left">
                            {{ $row->certificationPretty() }}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
