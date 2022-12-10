<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('record.store') }}">
            @csrf

            <!-- Weight -->
            <div>
                <x-label for="weight" :value="__('Weight')" />

                <x-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight')" required autofocus />
            </div>

            <!-- Height -->
            <div>
                <x-label for="height" :value="__('Height')" />

                <x-input id="height" class="block mt-1 w-full" type="text" name="height" :value="old('height')" required autofocus />
            </div>

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
    </x-auth-card>
</x-guest-layout>
