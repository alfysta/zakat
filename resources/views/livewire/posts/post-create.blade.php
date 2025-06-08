<div>

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
@endpush


@push('scripts')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
    onChange: function(contents, $editable) {
      @this.set('body', contents);
    }
  }
      });

    </script>
@endpush
<x-sweetalert />

<x-auth-header title="{{$page_meta['title']}}" description="{{$page_meta['description']}}" />
<form wire:submit="{{$page_meta['method']}}" class="mx-4 flex w-full h-full flex-col gap-5">
        <flux:input
            wire:model="judul"
            :label="__('Judul Artikel')"
            icon="user"
            type="text"
            required
            autofocus
            autocomplete="Judul Artikel"
            placeholder="Judul Artikel"
        />
        <div wire:ignore class="dark:bg-gray-200 dark:text-white" >
            <textarea id="summernote" wire:model ='body'>
              {{$post->body}}
            </textarea>
        </div>
       <div class="flex w-full flex-col gap-5 w-1/4">

        <div class="relative">
            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kategori</label>
            <select id="kategori" wire:model="kategori_id" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Kategori</option>
                @foreach($kategori as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
        </div>

        <flux:input type="file" wire:model="thumbnails" label="Thumbnails" />
        @if(is_string($thumbnails))
           <img class="w-100 rounded-lg" src="{{$post->images()}}">
        @elseif($thumbnails)
            <img class="w-100 rounded-lg" src="{{$thumbnails->temporaryUrl()}}">
         @endif


        {{-- @if($thumbnails)
            <img class="w-100 rounded-lg" src="{{$thumbnails->temporaryUrl()}}">
         @else
            <img class="w-100 rounded-lg" src="{{$post->images()}}">
        @endif --}}



       </div>
<div>
            <flux:button variant="primary" type="submit" class="w-1/5">{{ $page_meta['submit'] }}</flux:button>

</div>
    </form>


</div>
