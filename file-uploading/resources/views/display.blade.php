<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>image display</title>
</head>

<body>
    <div>

        {{-- working --}}

        <img src="{{ asset('storage/' . $file) }}" style="width: auto; height: 100px;">

        {{-- non working --}}

        {{-- <img src="{{ Storage::disk('public')->url($file) }}" alt="user_image"> --}}

        {{-- <img src="{{ Storage::get('$file') }}" alt="user_image"> --}}

        {{-- <img src="{{ Storage::url('$file') }}" alt="user_image"> --}}

    </div>
</body>

</html>