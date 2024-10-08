<div class="relative w-full overflow-hidden rounded-md border border-green-500 bg-white text-neutral-600" role="alert">
    <div class="flex w-full items-center gap-2 bg-green-500/10 p-4">
        <div class="bg-green-500/15 text-green-500 rounded-full p-1" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-2">
            <h3 class="text-sm font-light text-green-500">{{$title}}</h3>
            <p class="text-xs font-light sm:text-sm">{{$slot}}</p>
        </div>
    </div>
</div>
