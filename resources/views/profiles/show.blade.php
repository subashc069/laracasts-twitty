<x-app>

    <header class="mb-6 relative">
        <div class="relative">
            <img 
                src="{{ asset('images/default-profile-banner.jpg') }}" 
                alt="profile-banner"
                class="mb-2"
            >
            <img 
                src="{{ $user->avatar }}" 
                alt="user avatar"
                class="rounded-full mr-4 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" 
                width="150px"
                style="left: 50%"
            >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-lg mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @if (current_user()->is($user))
                    <a 
                        href="{{ $user->path('edit') }}" 
                        class="rounded-full border border-gray-300 py-2 px-4 mr-2 text-black text-xs" 
                        >
                        Edit Profile
                    </a>
                @endif
                <x-follow-button :user='$user'></x-follow-button>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus doloremque enim suscipit accusantium facere omnis expedita accusamus neque voluptates officia ullam, modi, earum harum quaerat dicta. Dolore odio molestias quod!</p>
        
    </header>


    @include('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>

