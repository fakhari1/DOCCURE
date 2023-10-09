@if($errors->any())
    <div class="text-center">
        <div class="btn bg-danger w-75">
            @foreach($errors->all() as $error)
                <p class="text-white font-size-15">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

@if(session()->has('success_msg'))
    <div class="text-center">
        <div class="btn bg-success w-50">
            <p class="text-white font-size-15 my-0">{{ session('success_msg') }}</p>
        </div>
    </div>
@endif




