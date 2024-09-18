@props(['active'=>false])
<a  class="{{$active?'bg-gray-200 text-white':'text-gray-300 hover:bg-gray-500 hover:text-white'}}rounded-md  px-3 py-2 text-sm font-medium" aria-current="{{$active?'page':false}}"{{$attributes}}>{{$slot}}</a>
