<div class="w-full">
    <div class="w-full">

    </div>
    <div class="w-full shadow-lg rounded-lg">
        <table class="w-full text-left">
            <thead>
            <th class="bg-gray-200 p-2">Nombre</th>
            <th class="bg-gray-200 p-2">Correo</th>
            <th class="bg-gray-200 p-2">Teléfono</th>
            <th class="bg-gray-200 p-2">Estatus</th>
            <th class="bg-gray-200 p-2">Creado</th>
            </thead>
            <tbody class="divide-y-[1px] divide-gray-400">
            @foreach([1,2,3,4,5,6,7,8,9,10] as $item)
                <tr>
                    <td class="p-2">Nombre del cliente {{$item}}</td>
                    <td class="p-2">Correo del cliente {{$item}}</td>
                    <td class="p-2">Teléfono del cliente {{$item}}</td>
                    <td class="p-2">Estatus del cliente {{$item}}</td>
                    <td class="p-2">Fecha de creación del cliente {{$item}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="absolute bottom-5 right-5">
        <button wire:click="toggleCreateClientModal" class="p-3 flex flex-row items-center bg-[#9F2241] text-white rounded-lg gap-2 hover:bg-[#691C32]">
            <span class="font-medium">Crear cliente</span>
            <x-heroicon-m-plus class="w-4" />
        </button>
    </div>

    @if($showCreateClientModal)
        <div class="fixed inset-0 h-screen w-screen bg-black bg-opacity-50 flex flex-col justify-center items-center" wire:transition>
            <div class="w-[32rem] bg-white relative rounded-lg">
                <button class="absolute right-2 top-2" wire:click="toggleCreateClientModal">
                    <x-heroicon-o-x-mark class="w-6" />
                </button>
                <div class="p-4">
                    <h1 class="text-2xl font-semibold mb-2">Crear cliente</h1>
                    <div class="w-full flex flex-col gap-2">
                        <label for="reportNumber" class="text-sm font-medium">Nombre:</label>
                        <input id="reportNumber" wire:model="" type="text" class="simple-input">
                        <label for="email" class="text-sm font-medium">Correo:</label>
                        <input id="email" wire:model="" type="text" class="simple-input">
                        <label for="description" class="text-sm font-medium">Teléfono del cliente:</label>
                        <input id="description" wire:model="" type="text" class="simple-input">
                        <label for="description" class="text-sm font-medium">Estatus del cliente:</label>
                        <input id="description" wire:model="" type="text" class="simple-input">
                    </div>
                    <div class="flex flex-row mt-2">
                        <button class="flex-1 bg-black text-white p-4">Cancelar</button>
                        <button class="flex-1 bg-[#9F2241] text-white p-4">Agregar cliente</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
