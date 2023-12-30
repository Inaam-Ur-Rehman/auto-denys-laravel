<div class="relative border-2 border-primary rounded-3xl h-48 flex justify-center items-center font-bold text-2xl  shadow-xl">
    <div
        class="max-w-[90%] text-center"

    >
       {!! $comment !!}
    </div>
    <img
        src="{{ $image}}"
        alt="Handshake"
        width={50}
        height={50}
        class="object-cover border-2 border-primary rounded-full absolute -bottom-6 p-1 bg-white left-1/2 transform -translate-x-1/2"
    />
</div>
