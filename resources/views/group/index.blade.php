<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  @foreach ($groups as $group)
                    {{$group->name}}
                      <form method="POST"  action="{{route('belonging.attach',['user_id'=>Auth::id(),'group_id'=> $group->id])}}" enctype="multipart/form-data">
                      @csrf
                        <button type="submit" class="btn btn-primary btn-block mb-4">追加</button>
                      </form>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
