<div>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
<flux:heading class="mx-4 my-4" size="xl">Daftar Artikel</flux:heading>

<flux:text class="mt-2 mx-4 my-4">Daftar Artikel Anda</flux:text>
<div class="flex gap-6 my-4 mx-4 w-3/4">
    <flux:button variant="danger" icon:trailing="document-plus" :href="route('article.created')">{{ __('Input Data') }}</flux:button>
          
    <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" type="text" autofocus autocomplete="search" placeholder="Search"/>

    <flux:input wire:model.live="date" icon="magnifying-glass" type="date" autofocus autocomplete="search"  placeholder="Date"/>

</div>
<div class="overflow-x-auto">
    <x-delete.artikel-delete />
<table class="w-full mx-4 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-3 py-4">No</th>
                <th class="px-3 py-4">Judul Artikel</th>
                <th class="px-3 py-4">Isi Artikel</th>
                <th class="px-3 py-4">Kategori</th>
                <th class="px-3 py-4">Diposting Oleh</th>
                <th class="px-3 py-4">Tanggal Posting</th>
                <th class="px-3 py-4">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $index => $item)
            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$posts->firstItem() + $index}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    <a class="text-blue-500" href="{{route('home.show', $item->slug)}}" target="_blank">{{$item->judul}}</a>
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {!!str()->limit($item->body, 100)!!}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->kategori->nama}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->user->name}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->created_at->format('d-m-Y')}}
                </td>

                <td class="flex px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300 items-center">
                <flux:button size="sm" class="text-xs" :href="route('article.edit', $item->slug)">Edit</flux:button>
   
                <button type="button" class="ml-2 px-3 py-2 text-xs font-medium text-center inline-flex  text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800" @click = "$dispatch('sweetalert-delete', {get_id: {{$item->id}} })">Delete</button>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

    <div class="my-4 mx-4">
        {{$posts->links()}}
    </div>
        </div>
    </div>
    
</div>
