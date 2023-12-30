@props(['testi'])
<div class="flex flex-col gap-6">
    <p>{!! $testi->comment !!}</p>
    <div class="flex justify-between items-center">
        <div class="flex items-center gap-2">
            <img src={{Storage::disk('public')->url($testi->image)}} alt={{$testi->name}} width={{80}} height={{80}} />
            <div>
                <p class="font-extrabold text-primary">{{$testi->name}}</p>
                <p class="text-primary">{{$testi->type}}</p>
            </div>
        </div>
        <img src={{asset('images/quote.svg')}} alt={{$testi->name}} width={{80}} height={{80}} />
    </div>
</div>
