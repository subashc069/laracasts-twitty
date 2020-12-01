<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea 
            name="body" 
            class="w-full"
            placeholder="What's up doc?"
        ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img 
                class="rounded-full mr-4" 
                src="{{ auth()->user()->avatar }}" 
                alt="your avatar" 
            >
            <button 
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" type="submit"
            >
                Tweet-a-roo!
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>