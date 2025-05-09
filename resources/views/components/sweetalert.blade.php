<div 
x-data = "{open : false}"
x-show = "open"
    @sweetalert.window="
        Swal.fire({
            position: 'top-end',
            icon: event.detail.icon,
            title: event.detail.title,
            showConfirmButton: false,
            timer: 2000
            });
    "
>

</div>