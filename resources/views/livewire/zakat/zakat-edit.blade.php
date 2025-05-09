<div>
    
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

        <div class="flex flex-col gap-6 my-3">
    <x-auth-header :title="__('Input Data Zakat Fitrah')" :description="__('Silahkan Input data Penyetor Zakat Fitrah dengan Teliti')" />

    <!-- Session Status -->
    <x-sweetalert/>

    <form wire:submit="updateZakat()" class="mx-4 flex w-1/2 h-1/2 flex-col gap-5">
        <flux:input
            wire:model.="zakatID"
            hidden
        />
        <flux:input
            wire:model.lazy="nama"
            :label="__('Nama Penyetor Zakat')"
            icon="user"
            type="text"
            required
            autofocus
            autocomplete="Nama "
            placeholder="Nama Penyetor"
        />

        <div class="relative">
            <flux:input
                wire:model.lazy="jiwa"
                icon="users"
                :label="__('Jumlah Jiwa')"
                type="number"
                required
                autocomplete="current-password"
                :placeholder="__('Jumlah Jiwa')"
            />
        </div>
        <flux:radio.group wire:model.live.debounce.500ms="bayar" label="Jenis Bayar">
            <flux:radio value="beras" label="Beras" required/>
            <flux:radio value="uang" label="Uang" required/>
        </flux:radio.group>

        <div>
            @if($this->bayar == 'beras')
            <flux:input
                wire:model.lazy="beras"
                label="Anda membayar zakat fitrah dengan {{$this->bayar}}"
                required
                type="number"
                autocomplete="Beras"
                :placeholder="__('Beras (Kg)')"
            />
            @elseif($this->bayar)
            <flux:input
                wire:model.lazy="uang"
                icon="currency-dollar"
                label="Anda membayar zakat fitrah dengan {{$this->bayar}}"
                type="number"
                required
                autocomplete="Uang"
                :placeholder="__('Uang (Rp)')"
            />
            @endif
        </div>

        <div class="relative">
            <flux:input
                wire:model="infaq"
                :label="__('Jumlah Infaq')"
                icon="currency-dollar"
                type="number"
                required
                autocomplete="current-password"
                :placeholder="__('Jumlah Infaq')"
            />
        </div>

        <div>
            @if($this->bayar == 'beras')
            <flux:input
                wire:model.lazy="sedekah"
                label="Sedekah"
                type="number"
                required disabled
                value="{{$beras - 2.5 * $jiwa}}"
            />
            @elseif($this->bayar == 'uang')
            <flux:input
                wire:model.lazy="sedekah"
                icon="currency-dollar"
                label="Sedekah"
                type="number"
                required
                disabled
                autocomplete="Uang"
                value="{{$uang - 25000 * $jiwa}}"
            />
            @endif
        </div>
        <div>
        @if($this->bayar == 'beras')
        <p class="font-sm">Kewajiban Anda Membayar Zakat Fitrah adalah {{2.5*$jiwa}} Kg.</p>
        @elseif($this->bayar)
        <p class="font-sm">Kewajiban Anda Membayar Zakat Fitrah adalah Rp. {{number_format(25000*$jiwa)}}</p>
        @endif
        </div>

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Input') }}</flux:button>
        </div>
    </form>
</div>
    </div>


        
</div>