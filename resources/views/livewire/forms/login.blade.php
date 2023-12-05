<div>
    @if(session()->has('error'))
        <div class="flex flex-row justify-center items-center gap-2 mt-4 mb-4 text-[#9F2241]">
            <x-heroicon-o-exclamation-triangle class="w-4" />
            <span class="text-sm font-medium">{{session('error')}}</span>
        </div>
    @endif
    <form wire:submit="login" class="flex flex-col gap-2">
        @csrf
        <div class="flex flex-col gap-2 w-[18rem]">
            <label for="email" class="tracking-widest uppercase text-xs font-medium">Correo:</label>
            <input id="email" wire:model="email" type="text" class="simple-input">
            @error('email')
            <div wire:transition class="flex flex-row gap-2 text-[#9F2241]">
                <x-heroicon-o-exclamation-triangle class="w-4" />
                <span class="text-xs font-medium">{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="flex flex-col gap-2 w-[18rem]">
            <label for="username" class="tracking-widest uppercase text-xs font-medium">Contraseña:</label>
            <input id="username" type="password" wire:model="password" class="simple-input">
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
