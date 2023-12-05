<div class="flex flex-col fixed w-screen">
    <div class="w-full p-3 bg-white border-b-[1px] border-b-gray-300 fixed flex flex-row justify-between">
        <livewire:logos.logo1 width="40" />
        <button wire:click="openCloseSessionButton" wire:click.away="offCloseSessionButton">
            <x-heroicon-m-user class="w-6" />
        </button>
        @if($closeSessionButton)
            <button wire:click="logout" class="flex flex-row justify-between gap-2 hover:bg-gray-200 items-center absolute right-2 top-16 border-[1px] border-gray-400 bg-white rounded p-2" wire:transition>
                <x-heroicon-m-arrow-left-on-rectangle class="w-4" />
                <span>Cerrar sesión</span>
            </button>
        @endif
    </div>
    <livewire:menus.left-menu />
</div>
