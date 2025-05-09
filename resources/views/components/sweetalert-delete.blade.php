<div 
x-data = "{open : false}"
x-show = "open"
    @sweetalert-delete.window="
    const get_id = event.detail.get_id; 
        Swal.fire({
            title: 'Apakah Anda Yakin ?',
            text: 'Menghapus data tersebut',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            })
            
            .then((result) => {
                    if (result.isConfirmed) {
                            $wire.zakatDelete(get_id).then(result=>{
                                Swal.fire({
                                title: 'Terhapus!',
                                text: 'Data Anda telah Terhapus',
                                icon: 'success'
});
                            })
                    }

            });
    "
>

</div>