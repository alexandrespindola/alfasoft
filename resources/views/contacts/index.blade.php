@extends('layouts.app')

@section('title', 'Login - Contacts')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">
        Login - Contacts
    </h1>

    <div class="w-full">
        <div class="container mx-auto flex flex-row justify-center py-10">
            @component('components.button')
                @slot('buttonText', 'Create new contact')
                @slot('buttonRoute', route('contacts.create'))
            @endcomponent
        </div>
    </div>

    @forelse ($contacts as $contact)
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <ul class="flex flex-row justify-center">
                    <li class="flex flex-row gap-3">
                        <a href="{{ route('contacts.show', $contact->id) }}" class="flex flex-row self-center">
                            <div class="flex flex-row gap-3">
                                <span class="text-blue-700 font-bold">Contact title:</span>
                                {{ $contact->name }}
                            </div>
                        </a>
                        <a href="{{ route('contacts.edit', $contact->id) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2 flex flex-row gap-1">
                            EDIT
                            <span class="material-symbols-outlined" style="font-size: 20px">
                                edit_square
                            </span>
                        </a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit"
                                class="flex flex-row gap-1 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                                value="DELETE">
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    @empty
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <p class="text-red-500 text-2xl">No contacts found</p>
            </div>
        </div>
    @endforelse

@endsection
