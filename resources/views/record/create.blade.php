<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Record Create') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('record.store') }}">
                            @csrf
                            <!-- Weight -->
                            <div>
                                <x-label for="weight" :value="__('Weight')" />

                                <x-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight')" required autofocus />
                            </div>

                            <!-- Height -->
                            @if(auth()->user()->not_store_height)
                            <div>
                                <x-label for="height" :value="__('Height')" />

                                <x-input id="height" class="block mt-1 w-full" type="text" name="height" :value="old('height')" required autofocus />
                            </div>
                            @endif
                            <!-- Comment -->
                            <div>
                                <x-label for="comment" :value="__('Comment')" />

                                <x-textarea id="comment" class="block mt-1 w-full" name="comment" :value="old('comment')" autofocus/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
