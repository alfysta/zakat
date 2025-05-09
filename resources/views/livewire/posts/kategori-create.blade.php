<div>
    
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

        <div class="flex flex-col gap-6 my-3">
    <x-auth-header title="{{$page_meta['title']}}" description="{{$page_meta['description']}}" />

    <!-- Session Status -->
    <x-sweetalert/>

<form wire:submit="{{$page_meta['method']}}" class="mx-3 flex w-1/2  flex-col gap-5">
        <flux:input
            wire:model="nama"
            :label="__('Nama Kategori')"
            icon="user"
            type="text"
            required
            autofocus
            autocomplete="Nama Kategori"
            placeholder="Nama Kategori"
        />

        <div class="items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-1/4">{{ $page_meta['submit'] }}</flux:button>
        </div>
    </form>
</div>
    </div>


        
</div>
