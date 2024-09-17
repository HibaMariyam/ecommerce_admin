<div class="p-4 flex justify-between">
    @if(auth()->user())
    <h1 class="text-3xl">Hello <span class="font-bold">{{ auth()->user()->name }} !</span></h1>
    @endif
    <button wire:click="logout" class="text-red-500">Logout</button>
</div>
