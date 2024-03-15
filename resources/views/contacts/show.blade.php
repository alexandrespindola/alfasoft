@extends('layouts.app')

@section('title', 'Show Contact')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">
        {{ $contact->name }}
    </h1>
    <div class="w-full">
        <div class="container mx-auto flex flex-row justify-center py-10">
            @component('components.button')
                @slot('buttonText', 'Back')
                @slot('buttonRoute', route('contacts.index'))
            @endcomponent
        </div>
    </div>
    <div class="w-full">
        <div class="container mx-auto py-4 text-center">
            <ul class="flex flex-row justify-center">
                <li class="flex flex-row gap-3">
                    <div class="flex flex-row gap-3">
                        <span class="text-blue-700 font-bold">Name:</span>
                        {{ $contact->name }}
                    </div>
                </li>
                <li class="flex flex-row gap-3">
                    <div class="flex flex-row gap-3">
                        <span class="text-blue-700 font-bold">E-mail:</span>
                        {{ $contact->email }}
                    </div>
                </li>
                <li class="flex flex-row gap-3">
                    <div class="flex flex-row gap-3">
                        <span class="text-blue-700 font-bold">Contact:</span>
                        {{ $contact->contact }}
                    </div>
                </li>
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
            </ul>
        </div>
@endsection
