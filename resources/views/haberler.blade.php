@extends('layouts.app')

@section('title', 'Haberler - Haber Portalı')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tüm Haberler</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($haberler as $haber)
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
            <img src="{{ asset($haber['resim']) }}" alt="{{ $haber['baslik'] }}" class="w-full h-48 object-cover">
            <div class="p-4 flex-grow flex flex-col justify-between">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $haber['baslik'] }}</h2>
                <p class="text-gray-600 mb-4">{{ $haber['ozet'] }}</p>
                <div class="flex justify-between items-center">
                    <a href="{{ $haber['url'] }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300" target="_blank" rel="noopener noreferrer">Devamını Oku</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection