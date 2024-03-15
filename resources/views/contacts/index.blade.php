@extends('layouts.app')

@section('title', 'Login - Contacts')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">
        Login - Contacts
    </h1>

    @forelse ($contacts as $contact)
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <ul class="flex flex-row justify-center">
                    <li class="flex flex-row gap-3">
                        <div class="flex flex-row gap-3">
                            <span class="text-blue-700 font-bold">Contact name:</span>
                            {{ $contact->name }}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    @empty
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <p class="text-red-500 text-2xl">No notes found</p>
            </div>
        </div>
    @endforelse

@endsection
