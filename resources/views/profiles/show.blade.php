@extends('layouts.app')

@section('content')
    <header class="mb-6" style="position: relative">
        <img 
            src="{{ asset('images/default-profile-banner.jpg') }}" 
            alt="profile-banner"
            class="mb-2"
        >
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-lg mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs" >Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs" >Follow Me</a>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus doloremque enim suscipit accusantium facere omnis expedita accusamus neque voluptates officia ullam, modi, earum harum quaerat dicta. Dolore odio molestias quod!</p>
        <img 
            src="{{ $user->avatar }}" 
            alt="user avatar"
            class="rounded-full mr-4" 
            style="position: absolute; top:134px; width: 150px; left:calc(50% - 75px);"
        >
    </header>

    <hr>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
