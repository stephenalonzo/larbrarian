<x-middleware>
    <h1 class="font-semibold text-2xl">{{ ucwords(Route::currentRouteName()) }}</h1>
    <form action="" method="post" class="flex flex-col items-start space-y-4 w-full">
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="">Student ID</label>
            <input type="email" name="" id="" class="p-2 rounded-sm w-full border-0">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="">Password</label>
            <input type="password" name="" id="" class="p-2 rounded-sm w-full border-0">
        </div>
        <button type="submit" class="px-4 py-2 rounded-sm bg-stone-900 text-stone-300">Login</button>
        <span>Don't have an account? Register <a href="/register" class="font-semibold">here</a>.</span>
    </form>
</x-middleware>