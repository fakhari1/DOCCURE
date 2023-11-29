@if($errors->any())
    <div class="text-center mb-4">
        <div class="alert alert-danger w-75 mx-auto">
            @foreach($errors->all() as $error)
                <p class="font-size-15 m-0 p-0">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

