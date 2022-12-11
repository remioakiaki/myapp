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
                                />
            </div>

            <!-- Not Store Height -->
            <div class="mt-4">
                <x-checkbox id="not_store_height" class="mt-1"
                                name="not_store_height"
                                message="Not Store Height"
                                />
            </div>

            <!-- Not Store Weight -->
            <div class="mt-4">
                <x-checkbox id="not_store_weight" class="mt-1"
                                name="store_weight"
                                message="Not Store Weight"
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
                   <x-input id="birthday" class="block mt-1 w-full"
                                type="date"
                                name="birthday"
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
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
