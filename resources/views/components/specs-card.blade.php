<div class="flex items-center justify-between gap-4 border-b-2 border-primary">
    <p class="pb-4 capitalize text-primary">{{ $title }}</p>
    <p class="capitalize">{{ $value }}
        @if ($unit ?? '')
            {{ $unit }}
        @endif
    </p>
</div>
