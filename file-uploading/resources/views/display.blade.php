<div>
    {{-- <img src="url('storage/app/private/avatars/.'{{ $file }})" alt="" srcset=""> --}}
    <img src="{{ Storage::url( $file) }}" alt="user_image">
    {{ Storage::url($file) }}
</div>