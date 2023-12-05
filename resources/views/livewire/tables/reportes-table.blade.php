<div class="w-full">
    <div class="w-full">

    </div>
    <div class="w-full shadow-lg rounded-lg">
        <table class="w-full text-left">
            <thead>
            <th class="bg-gray-200 p-2">No. Reporte</th>
            <th class="bg-gray-200 p-2">Cliente</th>
            <th class="bg-gray-200 p-2">Status</th>
            <th class="bg-gray-200 p-2">Descripción</th>
            <th class="bg-gray-200 p-2">Creado</th>
            <th class="bg-gray-200 p-2">Cerrado</th>
            </thead>
            <tbody class="divide-y-[1px] divide-gray-400">
                @foreach([1,2,3,4,5,6,7,8,9,10] as $item)
                    <tr>
                        <td class="p-2">Reporte {{$item}}</td>
                        <td class="p-2">Cliente {{$item}}</td>
                        <td class="p-2">Activo</td>
                        <td class="p-2">Importante</td>
                        <td class="p-2">Fecha de creación</td>
                        <td class="p-2">Fecha si es que ya quedo solucionado el reporte</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="absolute bottom-5 right-5">
        <button wire:click="toggleCreateReporteModal" class="p-3 flex flex-row items-center bg-[#9F2241] text-white rounded-lg gap-2 hover:bg-[#691C32]">
            <span class="font-medium">Crear reporte</span>
            <x-heroicon-m-plus class="w-4" />
        </button>
    </div>

    @if($showCreateReporteModal)
        <div class="fixed inset-0 h-screen w-screen bg-black bg-opacity-50 flex flex-col justify-center items-center" wire:transition>
            <div class="w-[32rem] bg-white relative rounded-lg">
                <button class="absolute right-2 top-2" wire:click="toggleCreateReporteModal">
                    <x-heroicon-o-x-mark class="w-6" />
                </button>
                <div class="p-4">
                    <h1 class="text-2xl font-semibold mb-2">Crear reporte</h1>
                    <div class="w-full flex flex-col gap-2">
                        <label for="reportNumber" class="text-sm font-medium">Cliente:</label>
                        <input id="reportNumber" wire:model="" type="text" class="simple-input">
                        <label for="description" class="text-sm font-medium">Descripción:</label>
                        <input id="description" wire:model="" type="text" class="simple-input">
                        <label for="email" class="text-sm font-medium">Correo:</label>
                        <input id="email" wire:model="" type="text" class="simple-input">
                        <label for="phone" class="text-sm font-medium">Teléfono de contacto:</label>
                        <input id="phone" wire:model="" type="text" class="simple-input">
                    </div>
                    <div class="flex flex-row mt-2">
                        <button class="flex-1 bg-black text-white p-4">Cancelar</button>
                        <button class="flex-1 bg-[#9F2241] text-white p-4">Agregar reporte</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
