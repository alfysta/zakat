<div>

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

        <div class="flex flex-col gap-6 my-3">
    <x-auth-header title="{{$page_meta['title']}}" description="{{$page_meta['description']}}" />


    <!-- Session Status -->
    <x-sweetalert/>

    <form wire:submit="{{$page_meta['method']}}" class="mx-4 flex w-1/2 h-1/2 flex-col gap-5">
        <flux:input
            wire:model="nama_penerima"
            :label="__('Nama Penerima Zakat')"
            icon="user"
            type="text"
            required
            autofocus
            autocomplete="Nama Penerima Zakat"
            placeholder="Nama Penerima Zakat"
        />

        <div class="relative">
            <flux:input wire:model="alamat" icon="users" :label="__('Alamat')" type="text" required autocomplete="Alamat" :placeholder="__('Alamat')"
            />
        </div>
        <div class="relative">
            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kategori</label>
            <select id="kategori" wire:model="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Pilih Kategori</option>
                @foreach($kategori as $item)
                    <option value="{{$item->id}}">{{$item->kategori}}</option>
                @endforeach
            </select>
        </div>


        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ $page_meta['submit'] }}</flux:button>
        </div>
    </form>
</div>
    </div>



</div>
