@props(['title' => '' , 'footerLinks' => ''])

<x-base :title="$title">
    {{-- <x-slot name="title">Home</x-slot> --}}
    <x-header />
    {{ $slot }}
    
</x-base>

