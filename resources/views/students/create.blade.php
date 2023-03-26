<x-middleware>
    <h1 class="font-semibold text-2xl">{{ ucwords(Route::currentRouteName()) }}</h1>
    <form action="" method="post" class="flex flex-col items-start space-y-4 w-full">
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="p-2 rounded-sm w-full border-0">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="p-2 rounded-sm w-full border-0">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="p-2 rounded-sm w-full border-0">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="school">School Name</label>
            <input type="text" name="school" id="school" class="p-2 rounded-sm w-full border-0">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="grade">Grade</label>
            <select name="grade" id="grade" class="p-2 rounded-sm w-full border-0">
                <option selected>What grade are you in?</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="p-2 rounded-sm w-full border-0">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="password_confirmation">Re-enter Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="p-2 rounded-sm w-full border-0">
        </div>
        <button type="submit" class="px-4 py-2 rounded-sm bg-stone-900 text-stone-300">Register</button>
        <span>Already have an account? Login <a href="/login/student" class="font-semibold">here</a>.</span>
    </form>
</x-middleware>