@if (session()->has('flash_message'))
    <script>

     swal({
         title: "{{session('flash_message.title')}}",
         text: "{{session('flash_message.message')}}",
         type: "{{session('flash_message.level')}}",
         confirmButton: false,
         timer: 1500
     });

    </script>
@endif


@if (session()->has('flash_message_overlay'))
    <script>

     swal({
         title: "{{session('flash_message_overlay.title')}}",
         text: "{{session('flash_message_overlay.message')}}",
         type: "{{session('flash_message_overlay.level')}}",
         confirmButtonText: 'OK'
     });

    </script>
@endif

