<x-layouts.app :title="__('Dashboard')">
<flux:heading  size="xl">Data Zakat Fitrah</flux:heading>



<div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">
      
      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
        <flux:icon.banknotes variant="solid" class="size-10 text-amber-500 dark:text-amber-300" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Zakat Uang</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-xl dark:text-white">Rp. {{number_format($uang)}}</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Rp. 25.000
            </span>
            Per Jiwa
          </p>
        </div>

        
      </div>

      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
        <flux:icon.folder-arrow-down variant="solid" class="size-10 text-amber-500 dark:text-red-600" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Zakat Beras</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-xl dark:text-white">{{$beras}} Kg</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              2.5 Kg
            </span>
            Per Jiwa
          </p>
        </div>
        
      </div>
      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <div class="w-full">
        <flux:icon.credit-card variant="solid" class="size-10 text-blue-500 dark:text-blue-500" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Infaq</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-xl dark:text-white">Rp. {{number_format($infaq)}}</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Rp. 2.000
            </span>
            Per Jiwa
          </p>
        </div>
        
      </div>

      
      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
        <flux:icon.currency-dollar variant="solid" class="size-10 text-amber-500 dark:text-amber-300" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Sedekah Uang</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-xl dark:text-white">Rp. {{number_format($sedekah_uang)}}</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Sukarela  
            </span>
            dan Ikhlas
          </p>
        </div>        
      </div>
</div>

      <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-4 2xl:grid-cols-4">
      
      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
        <flux:icon.briefcase variant="solid" class="size-10 text-amber-500 dark:text-amber-300" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Sedekah Beras</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-xl dark:text-white">{{$sedekah_beras}} Kg</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Sukarela  
            </span>
            dan Ikhlas
          </p>
        </div>

        
      </div>

      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
        <flux:icon.users variant="solid" class="size-10 text-amber-500 dark:text-red-600" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Jumlah Jiwa</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-xl dark:text-white">{{$jiwa}} Orang</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Total
            </span>
           Pembayar Zakat
          </p>
        </div>
        
      </div>
      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
      <div class="w-full">
        <flux:icon.user variant="solid" class="size-10 text-blue-500 dark:text-blue-500" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Jumlah KK</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">{{$kk}} KK</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Total
            </span>
            Kepala Keluarga
          </p>
        </div>
        
      </div>

      
      <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <div class="w-full">
        <flux:icon.user-group variant="solid" class="size-10 text-amber-500 dark:text-amber-300" />
          <h3 class="text-2xl font-bold text-green-500 dark:text-green-500 my-8">Penerima Zakat</h3>
          <span class="text-2xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">{{$penerima}} Orang</span>
          <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              Sesuai
            </span>
            Kategori
          </p>
        </div>        
      </div>
   
    
</x-layouts.app>
