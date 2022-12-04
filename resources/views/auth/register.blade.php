<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Height -->
            <div class="mt-4">
                <x-label for="height" :value="__('Height')" />

                <x-input id="height" class="block mt-1 w-full"
                                type="text"
                                name="height"
                                :value="old('height')"
                                required
                                />
            </div>

            <!-- Store Height -->
            <div class="mt-4">
                <x-checkbox id="store_height" class="mt-1"
                                type="checkbox"
                                name="store_height"
                                :value="old('store_height')"
                                required
                                message="Store Height"
                                />
            </div>

            <!-- Store Weight -->
            <div class="mt-4">
                <x-checkbox id="store_weight" class="mt-1"
                                type="checkbox"
                                name="store_weight"
                                :value="old('store_weight')"
                                message="Store Weight"
                                />
            </div>

            <!-- Sex -->
            @php
              $lists = [['id'=> 0, 'name' => "Unkown"],
                        ['id'=> 1, 'name' => "Man"],
                        ['id'=> 2, 'name' => "Woman"],
                        ['id'=> 9, 'name' => "Other"],
                       ]
            @endphp
            <div class="mt-4">
                <x-label for="sex" :value="__('Sex')" />
                <x-dropdown-list id="sex"
                                 name="sex"
                                 :value="old('sex')"
                                 required
                                 :lists="$lists">
                </x-dropdown-list>
            </div>

            <!-- Birthday -->
            <div class="mt-4">
                <x-label for="birthday" :value="__('Birthday')" />
                   <x-input id="date" class="block mt-1 w-full"
                                type="date"
                                name="date"
                                :value="old('birthday')"
                                required />
            </div>

            <!-- Image -->
            <div class="mt-4">
                <x-label for="image" :value="__('Image')" />
                   <x-input id="image" class="block mt-1 w-full"
                                type="file"
                                name="image"
                                :value="old('image')"
                                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
