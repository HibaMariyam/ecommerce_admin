<div class="p-4">
    <form >
        <div >
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
                <input id="email" type="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" wire:model="email">
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="mt-4 ">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-1 ">
                <input id="password" type="password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" wire:model="password">
                @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
      <button class=" text-red-500 mt-5" wire:click.prevent="login">Login</button>
        <!-- <div class="mt-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Log in
            </button>
        </div> -->
    </form>
</div>

