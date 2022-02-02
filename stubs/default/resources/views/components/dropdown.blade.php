@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}
@endphp

<div class="relative" data-controller="dropdown">
    <div>
        {{ $trigger }}
    </div>

    <div class="absolute hidden z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
        data-dropdown-target="menu"
        data-transition-enter-active="transition ease-out duration-200"
        data-transition-enter-from="transform opacity-0 scale-95"
        data-transition-enter-to="transform opacity-100 scale-100"
        data-transition-leave-active="transition ease-in duration-75"
        data-transition-leave-from="transform opacity-100 scale-100"
        data-transition-leave-to="transform opacity-0 scale-95">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
