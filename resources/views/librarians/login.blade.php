<x-middleware>
    <h1 class="font-semibold text-2xl">{{ ucwords(Route::currentRouteName()) }}</h1>
    <form action="/login/admin/authenticate" method="POST" class="flex flex-col items-start space-y-4 w-full">
        @csrf
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="p-2 rounded-sm w-full border-0">
        </div>
        @error('email')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="p-2 rounded-sm w-full border-0">
        </div>
        @error('password')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
        <button type="submit" class="px-4 py-2 rounded-sm bg-stone-900 text-stone-300">Login</button>
        <span>Not a librarian? Login as a student <a href="/login/student" class="font-semibold">here</a>.</span>
    </form>
</x-middleware>