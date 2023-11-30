<div>
    <form wire:submit="save" class="flex flex-col gap-2">
        @csrf
        <div class="flex flex-col gap-2 w-[18rem]">
            <label for="username" class="tracking-widest uppercase text-xs font-medium">Usuario:</label>
            <input id="username" wire:model="user" class="simple-input">
            @error('user')
            <div wire:transition class="flex flex-row gap-2 text-[#9F2241]">
                <x-heroicon-o-exclamation-triangle class="w-4" />
                <span class="text-xs font-medium">{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="flex flex-col gap-2 w-[18rem]">
            <label for="username" class="tracking-widest uppercase text-xs font-medium">Contraseña:</label>
            <input id="username" wire:model="password" class="simple-input">
            @error('password')
            <div wire:transition class="flex flex-row gap-2 text-[#9F2241]">
                <x-heroicon-o-exclamation-triangle class="w-4" />
                <span class="text-xs font-medium">{{$message}}</span>
            </div>
            @enderror
        </div>
        <button class="submit-button-icon" type="submit">
            <span class="font-medium self-center">Iniciar sesión</span>
            <x-heroicon-m-arrow-right class="w-4 self-center" />
        </button>
    </form>
</div>
