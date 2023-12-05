@extends('layouts.admin')
@section('title', 'Inicio')
@section('content')
    <h1 class="text-2xl font-medium mb-6">Inicio</h1>
    <div class="grid grid-cols-2 gap-5">
        <div class="border-[1px] border-gray-400 rounded p-4 flex flex-col gap-2">
            <span>Reportes abiertos:</span>
            <h2 class="text-2xl font-medium">10</h2>
        </div>
        <div class="border-[1px] border-gray-400 rounded p-4 flex flex-col gap-2">
            <span>Reportes pendientes:</span>
            <h2 class="text-2xl font-medium">10</h2>
        </div>
        <div class="border-[1px] border-gray-400 rounded p-4 flex flex-col gap-2">
            <span>Reportes en progreso:</span>
            <h2 class="text-2xl font-medium">10</h2>
        </div>
        <div class="border-[1px] border-gray-400 rounded p-4 flex flex-col gap-2">
            <span>Reportes cerrados:</span>
            <h2 class="text-2xl font-medium">10</h2>
        </div>
    </div>
@endsection
