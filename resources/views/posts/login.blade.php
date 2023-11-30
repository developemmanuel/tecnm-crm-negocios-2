@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="w-full p-2.5 border-b-[1px] border-b-gray-300 fixed flex flex-row">
        <livewire:logos.logo1 width="40" />
    </div>
    <div class="flex flex-col justify-center items-center h-screen">
        <h1 class="text-2xl font-medium mb-8">Iniciar sesión</h1>
        <livewire:forms.login />
    </div>
@endsection
