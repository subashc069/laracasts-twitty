<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach (range(1,8) as $index)
        <li class="flex items-center text-sm mb-4">
            <img class="rounded-full mr-4" src="https://i.pravatar.cc/40" alt="" srcset="">
            John Doe
        </li>
    @endforeach
</ul>