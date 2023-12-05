<div class="bg-white h-screen w-[12rem] border-r-2 absolute mt-14">
    <ul>
        <li>
            <button wire:click="toggleReportes" class="p-2 hover:bg-gray-200 font-medium flex flex-row justify-between w-full">
                <span>Reportes</span>
                <x-heroicon-m-chevron-down class="w-4" />
            </button>
        </li>
        @if($reportes)
            <ul wire:transition>
                <li>
                    <a wire:navigate href="{{route('reportes')}}" class="pt-2 pb-2 pl-4 pr-2 hover:bg-gray-200 flex flex-row justify-between w-full">
                        <span>Lista de reportes</span>
                        <x-heroicon-o-arrow-right class="w-4" />
                    </a>
                </li>
            </ul>
        @endif
        <li>
            <button wire:click="toggleUsuarios" class="p-2 hover:bg-gray-200 font-medium flex flex-row justify-between w-full">
                <span>Clientes</span>
                <x-heroicon-m-chevron-down class="w-4" />
            </button>
        </li>
        @if($usuarios)
            <ul wire:transition>
                <li>
                    <a wire:navigate href="{{route('clientes')}}" class="pt-2 pb-2 pl-4 pr-2 hover:bg-gray-200 flex flex-row justify-between w-full">
                        <span>Lista de clientes</span>
                        <x-heroicon-o-arrow-right class="w-4" />
                    </a>
                </li>
            </ul>
        @endif
    </ul>
</div>
