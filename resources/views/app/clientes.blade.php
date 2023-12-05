@extends('layouts.admin')
@section('title', 'Clientes')
@section('content')
    <h1 class="text-2xl font-medium mb-6">Clientes</h1>
    <livewire:tables.clientes-table />
@endsection
