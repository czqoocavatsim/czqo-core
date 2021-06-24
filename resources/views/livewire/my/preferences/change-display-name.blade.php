<form wire:submit.prevent="save">
    @csrf
    <div class="px-6 py-6">
        <div class="flex flex-col space-y-4">
            <div class="text-lg font-medium text-czqo-blue">Change display name</div>
            <p class="text-gray-600 text-sm">
                Your display name must comply with the VATSIM Code of Conduct section A4.
            </p>
            <label for="firstName" class="text-sm text-gray-900">First Name</label>
            <input @if($onlyCid) disabled @endif name="firstName" wire:model="firstName" type="text" class="@if($onlyCid) text-gray-400 @endif appearance-none px-4 py-2 border text-sm focus:ring-2 ring-czqo-blue transition rounded-md outline-none">
            <label for="showLastName" class="flex items-center">
                <input @if($onlyCid) disabled @endif wire:model="showLastName" type="checkbox" name="showLastName" class="form-checkbox">
                <span class="ml-2 text-gray-900 text-sm">Show last name ({{ auth()->user()->lname }})</span>
            </label>
            <label for="onlyCid" class="flex items-center">
                <input wire:model="onlyCid" type="checkbox" name="onlyCid" class="form-checkbox">
                <span class="ml-2 text-gray-900 text-sm">Show only CID</span>
            </label>
            <div wire:loading>
                Loading...
            </div>
            <div wire:loading.remove>
                <p>
                    Preview: {{ $this->preview }}
                </p>
                @error('firstName')
                <div class="px-3 py-2 mt-3 bg-red-400 border rounded-md">
                    Please enter a valid first name.
                </div>
                @enderror
            </div>
        </div>
        <div class="flex flex-row space-x-4 justify-end mt-10">
            <button @click="changeDisplayNameModal = false" type="button" class="text-sm border hover:bg-gray-200 transition rounded-md px-4 py-2 w-28">Cancel</button>
            <button @error('firstName') disabled @enderror type="submit" class="text-sm border hover:bg-green-500 hover:text-white transition rounded-md px-4 py-2 w-28">Save</button>
        </div>
    </div>
</form>
