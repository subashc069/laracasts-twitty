<div class="bg-blue-100 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="">
                <a class="flex items-center text-sm mb-4" href="{{ route('profile', $user) }}">
                    <img 
                        class="rounded-full mr-4" 
                        src="{{ $user->avatar}}" 
                        alt="user avatar"
                        width="50"
                        height="50"
                    >
                    <span>{{ $user->name }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
