@props(['active' => false, 'type' => 'a'])

@if ($type === "a")
    <a class="{{ $active ? 'bg-gradient-to-r from-[#2563EB] to-[#56CCF2] text-white font-bold' : 'hover:bg-gradient-to-r from-[#2563EB] to-[#56CCF2]' }} m-2 rounded-lg group relative flex items-center space-x-4 px-4 py-3" 
        {{ $attributes }}
    >{{ $slot }}</a>
@elseif ($type === "summary")
    <summary class="{{ $active ? 'bg-gradient-to-r from-[#2563EB] to-[#56CCF2] text-white font-bold' : 'hover:bg-gradient-to-r from-[#2563EB] to-[#56CCF2]' }} cursor-pointer m-2 rounded-lg group relative flex items-center space-x-4 px-4 py-3" 
        {{ $attributes }}
    >{{ $slot }}</summary>
@endif