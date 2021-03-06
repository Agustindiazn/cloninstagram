{{-- Avatar --}}
<div class="container-avatar">
    {{-- {{$user->id}} --}}
    <img src="{{ route('user.avatar', Auth::user()->image) }}" class="avatar" >
</div>    
