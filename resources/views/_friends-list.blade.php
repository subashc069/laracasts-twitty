<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="flex items-center text-sm mb-4">
                <img 
                    class="rounded-full mr-4" 
                    src="{{ $user->avatar}}" 
                    alt="user avatar"
                >
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</div>
