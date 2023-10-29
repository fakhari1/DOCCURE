@if($errors->any())
    <div class="text-center mb-4">
        <div class="alert alert-danger w-75 mx-auto">
            @foreach($errors->all() as $error)
                <p class="font-size-15 m-0 p-0">{{ $error }}</span>
            @endforeach
        </div>
    </div>
@endif

@if(session()->has('success_msg'))
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            {{ session('success_msg') }}
        </div>
    </div>
@endif




