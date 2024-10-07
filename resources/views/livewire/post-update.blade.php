<form wire:submit="submit">
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <input wire:model="form.title" type="text" class="w-full rounded-md" id="title" placeholder="Title">
            @error('form.title')
                <p class="text-red-500 mb-3">{{ $message }}</p>
            @enderror
            <textarea wire:model="form.body" name="body" class="w-full mt-3 rounded-md" id="" cols="30"
                rows="2" placeholder="Description"></textarea>
            @error('form.body')
                <p class="text-red-500 mb-3">{{ $message }}</p>
            @enderror
        </div>
        <div class="update-btn">
            <button class="bg-blue-500 p-5 text-white rounded-md hover:bg-blue-600">
                <div>S</div>
                <div>A</div>
                <div>V</div>
                <div>E</div>
            </button>
        </div>
    </div>
</form>
