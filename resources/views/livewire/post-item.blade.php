<tr class="hover:bg-gray-100">
    <td class="px-5 py-4 text-start text-sm">{{ $post->id }}</td>
    <td class="px-5 py-4 text-start text-sm">{{ $post->user->name }}</td>
    <td class="px-5 py-4 text-start text-sm">{{ $post->title }}

       @if ($edit)
          <div class="post-update-form">
            <livewire:post-update :post="$post" />
          </div>
       @endif 
        <div>
            <button wire:click="$toggle('edit')" class="text-blue-500">Edit Post</button>
        </div>
    </td>
    <td class="px-5 py-4 text-start text-sm">{{ $post->created_at->diffForHumans() }}</td>
    <td class="px-5 py-4 text-center text-sm hover:bg-white">
        <button wire:confirm="Are you sure to want to delete it?" wire:click="destroy({{ $post->id }})"
            class="bg-red-500 py-2 px-4 text-white rounded-md hover:bg-red-600">Delete</button>
    </td>
</tr>