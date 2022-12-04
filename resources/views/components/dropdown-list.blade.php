@props(['lists'])

<select {{ $attributes->merge(['class' => 'w-full mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) }}>
  @foreach($lists as $list)
    @if(is_array($list))
      <option value="{{$list['id']}}">{{$list['name']}}</option>
    @else
        <option value="{{$list->id}}">{{$list->name}}</option>
    @endif
  @endforeach
</select>
