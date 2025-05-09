<div>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
<flux:heading class="mx-4 my-4" size="xl">Data Penyetor Zakat</flux:heading>

<flux:text class="mt-2 mx-4 my-4">Informasi Data Pembayaran Zakat Fitrah</flux:text>
<div class="flex gap-6 my-4 mx-4 w-3/4">
    <flux:button variant="primary" icon:trailing="document" target="_blank" :href="route('laporan.cetak')">{{ __('Cetak Data') }}</flux:button>
          
    <flux:input wire:model.live.debounce.500ms="search" icon="magnifying-glass" type="text" autofocus autocomplete="search" placeholder="Search"/>

    <flux:input wire:model.live.debounce.500ms="date" icon="magnifying-glass" type="date" autofocus autocomplete="search"  placeholder="Date"/>

</div>

<div class="overflow-x-auto">
<x-sweetalert-delete />
<table class="w-full mx-4 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-3 py-4">No</th>
                <th class="px-3 py-4">Tanggal</th>
                <th class="px-3 py-4">Nama</th>
                <th class="px-3 py-4">Jumlah Jiwa</th>
                <th class="px-3 py-4">Bayar Berupa</th>
                <th class="px-3 py-4">Beras</th>
                <th class="px-3 py-4">Uang</th>
                <th class="px-3 py-4">Infaq</th>
                <th class="px-3 py-4">Sedekah</th>
                <th class="px-3 py-4">Amil</th>
                <th class="px-3 py-4">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($zakat as $index => $item)
            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$zakat->firstItem() + $index}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->created_at->format('d-m-Y')}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->nama}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->jiwa}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->bayar}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{number_format($item->beras)}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{number_format($item->uang)}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{number_format($item->infaq)}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">
                    {{$item->sedekah}}
                </td>
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300">{{$item->user->name}}</td>
                
                <td class="px-3 py-4 bg-primary-100 text-primary-800 text-xs rounded dark:bg-primary-900 dark:text-primary-300 flex items-center justify-center">

                    <button href="{{route('zakat.edit', $item->id)}}" wire:navigate type="button" class="mr-2 px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Edit
                        </button>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800" @click = "$dispatch('sweetalert-delete', {get_id: {{$item->id}} })">
                        Delete
                        </button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div class="my-4 mx-4">
        {{$zakat->links()}}
    </div>
</div>
</div>

</div>