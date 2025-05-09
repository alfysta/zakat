<div>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
<flux:heading class="mx-4 my-4" size="xl">Data Penerima Zakat Fitrah</flux:heading>

<flux:text class="mt-2 mx-4 my-4">Informasi Daftar Penerima Zakat Fitrah</flux:text>

<div class="flex gap-6 my-4 mx-4 w-3/4">
    <flux:button variant="danger" icon:trailing="document-plus" :href="route('penerima.input')" wire:navigate>{{ __('Input Data') }}</flux:button>
          
    <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" type="text" autofocus autocomplete="search" placeholder="Search"/>

</div>


</div>

<div class="overflow-x-auto">
    <x-delete.penerima-delete />
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-zinc-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-2">
                        #
                    </th>
                    <th scope="col" class="px-4 py-2">
                        Nama Penerima
                    </th>
                    <th scope="col" class="px-4 py-2">
                        Kategori
                    </th>
                    <th scope="col" class="px-4 py-2">
                        Alamat
                    </th>
                    <th scope="col" class="px-4 py-2">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($penerima_zakat as $index => $item)
                <tr class="bg-white border-b dark:bg-zinc-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-4 py-2">
                    {{$penerima_zakat->firstItem() + $index}}
                </td>
                <th scope="row" class="flex items-center px-4 py-2 text-gray-900 whitespace-nowrap dark:text-white">
                <span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full">
                            <span class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                            {{$item->avatar()}}
                            </span>
                </span>
                        <div class="ps-3">
                            <div class="font-semibold">{{$item->nama_penerima}}</div>
                            <div class="font-sm text-gray-500">{{$item->kategori->kategori}}</div>
                        </div>  
                    </th>
                    <td class="px-4 py-2">
                    {{$item->kategori->kategori}}
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> {{$item->alamat}}
                        </div>
                    </td>
                    <td class="px-4 py-2">
                        
                    <button href="{{route('penerima.edit', $item->id)}}" wire:navigate type="button" class="mr-2 px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Edit
                    </button>

                    <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-red-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800" @click = "$dispatch('sweetalert-delete', {get_id: {{$item->id}} })">
                        Delete
                        </button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

    <div class="my-4 mx-4">
        {{$penerima_zakat->links()}}
    </div>
        </div>
    </div>
    
</div>