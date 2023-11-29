@if(session()->has('success_msg'))
    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            Swal.fire({
                title: "عملیات موفق!",
                text: "{{ session('success_msg') }}",
                icon: "success",
                confirmButtonText: 'باشه'
            });
        });
    </script>
@endif

@if(session()->has('error_msg'))
    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            Swal.fire({
                title: "خطا در عملیات!",
                text: "{{ session('error_msg') }}",
                icon: "error",
                confirmButtonText: 'باشه'
            });
        });
    </script>
@endif
