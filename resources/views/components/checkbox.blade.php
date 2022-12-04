@props(['message' => 'このメッセージはデフォルトです。',
        'id',
        'name'
       ])
<input type="hidden" value="0" id="{{$id}}" name="{{$name}}">
<input type="checkbox" value="1" id="{{$id}}" name="{{$name}}"
       {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
<label class="font-medium text-sm text-gray-700">
    {{ $message }}
</label>
