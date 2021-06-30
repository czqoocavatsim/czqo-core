<form wire:submit.prevent="save">
    @csrf
    <div class="px-6 py-6">
        <div class="flex flex-col space-y-4">
            <div class="text-lg font-medium text-czqo-blue">Change profile image</div>
            <p class="text-gray-600 text-sm">
                Your profile image must comply with the VATSIM Code of Conduct.
            </p>
            <p class="text-gray-900 text-sm">Select an option</p>
            <select wire:model="mode" name="" id="" class="appearance-none px-4 py-2 border text-sm focus:ring-2 ring-czqo-blue transition rounded-md outline-none">
                <option value="0">Default</option>
                @if (auth()->user()->discord_linked)
                    <option value="2">Discord</option>
                @endif
                <option value="1">Uploaded image</option>
            </select>
            <div wire:loading>
                Loading...
            </div>
            <div wire:loading.remove>
            @switch($mode)
                @case(0)
                    <div>
                        <div class="text-sm text-gray-900">
                            Preview:
                            <img class="h-20 w-20 mt-4 rounded-full" src="{{ auth()->user()->initials_profile_image }}" alt="">
                        </div>
                    </div>
                @break
                @case(2)
                    @if (auth()->user()->discord_linked)
                        <div>
                            <div class="text-sm text-gray-900">
                                Preview:
                                <img class="h-20 w-20 mt-4 rounded-full" src="{{ auth()->user()->discord_profile_image }}" alt="">
                            </div>
                        </div>
                    @endif
                @break
                @case(1)
                    <div>
                        <div class="text-sm text-gray-900">
                            Select an image:
                            <input wire:model="customImage" type="file" class="text-sm">
                            @error('customImage') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                @break
            @endswitch
            </div>
        </div>
        <div class="flex flex-row space-x-4 justify-end mt-10">
            <button @click="changeProfileImageModal = false" type="button" class="text-sm border hover:bg-gray-200 transition rounded-md px-4 py-2 w-28">Cancel</button>
            <button type="submit" class="text-sm border hover:bg-green-500 hover:text-white transition rounded-md px-4 py-2 w-28">Save</button>
        </div>
    </div>
</form>
