<div class="main-container grid grid-cols-3 gap-10 p-8">

    <div class="inser-data row-start-1 row-span-full">
        <form wire:submit.prevent="create" class="max-w-sm shadow-md px-5 py-12 rounded-lg" method="POST">
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <input wire:model.blur="form.title" name="title" type="text" id="title"
                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 clear"
                    placeholder="Title" required />
                @error('form.title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                <textarea wire:model="form.body" class="rounded-lg w-full border border-gray-300 text-gray-900" name="description"
                    id="description" cols="39" rows="5"></textarea>
                @error('form.body')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-btn pb-10">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-right"
                    value="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="show-table col-span-2">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th scope="col" class="px-5 py-4 text-start uppercase">ID</th>
                    <th scope="col" class="px-5 py-4 text-start uppercase">User</th>
                    <th scope="col" class="px-5 py-4 text-start uppercase">Title</th>
                    <th scope="col" class="px-5 py-4 text-start uppercase">Date</th>
                    <th scope="col" class="px-5 py-4 text-center uppercase">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <livewire:post-item :post="$post" wire:key="{{ $post->id }}" @deleting="$refresh" />
                @endforeach
            </tbody>
        </table>
        <div class="p-4">
            {{ $posts->links(data: ['scrollTo' => false]) }}
        </div>
    </div>

</div>
