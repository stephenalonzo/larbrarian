<x-layout>
    <div class="flex flex-row items-center space-x-6 w-full">
        <a href="#" class="p-4 bg-white h-32 flex flex-col items-center justify-center space-y-2 w-full">
            <span class="text-2xl font-semibold">Find a book</span>
            <i class="fa-solid fa-search text-lg"></i>
        </a>
        <a href="#" class="p-4 bg-white h-32 flex flex-col items-center justify-center space-y-2 w-full">
            <span class="text-2xl font-semibold">Return History</span>
            <i class="fa-regular fa-clock text-lg"></i>
        </a>
        <a href="#" class="p-4 bg-white h-32 flex flex-col items-center justify-center space-y-2 w-full">
            <span class="text-2xl font-semibold">Find student</span>
            <i class="fa-regular fa-user text-lg"></i>
        </a>
    </div>
    <form action="" method="post" class="flex flex-row items-center space-x-4 w-full">
        <input type="text" name="search" placeholder="Enter book ID" class="border border-gray-200 rounded-sm w-full">
        <button type="submit" class="px-4 py-2 rounded-sm bg-stone-900 text-stone-400">Search</button>
    </form>
    
</x-layout>