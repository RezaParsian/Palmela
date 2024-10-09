@extends('layouts.main')

@section('content')
    <section class="py-36" x-data="data">
        <div>
            <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false"
                 @click.self="modalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
                 role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                <!-- Modal Dialog -->
                <div x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                     x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
                     class="flex w-1/3 flex-col gap-4 overflow-hidden rounded-md border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900
                      dark:text-neutral-300">
                    <!-- Dialog Header -->
                    <div class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20">
                        <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white">Exchange</h3>
                        <button @click="modalIsOpen = false" aria-label="close modal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Dialog Body -->
                    <div class="px-4 py-8">
                        <template x-if="exchange">
                            <form :action='url' method="post">
                                @csrf
                                @method('put')

                                <div class="my-3">
                                    <label for="rate" class="font-Hel_Med text-[18px] text-palmela-800">Exchange Rate</label>

                                    <input type="number" step="0.1" name="rate" id="rate" class="mt-3 border-palmela-300 focus:outline-none" required x-model="exchange.rate">

                                    @error('symbol')
                                    <small class="text-rose-500">{{$message}}</small>
                                    @enderror
                                </div>

                                <button class="rounded-lg bg-palmela-400 w-full p-3 font-semibold text-black text-sm my-6 hover:bg-palmela-100 hover:text-palmela-900">
                                    Update
                                </button>

                            </form>
                        </template>
                    </div>
                    <!-- Dialog Footer -->
                    <div
                        class="flex flex-col-reverse justify-between gap-2 border-t border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20 sm:flex-row sm:items-center md:justify-end">
                        <button @click="modalIsOpen = false" type="button"
                                class="cursor-pointer whitespace-nowrap rounded-md px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-600 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:text-neutral-300 dark:focus-visible:outline-white">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-3 md:px-0">
            @if(session('msg'))
                <div class="mx-auto w-1/3 m-7">
                    <x-alert-success-component>
                        <x-slot name="title">
                            {{session('msg')}}
                        </x-slot>
                    </x-alert-success-component>
                </div>
            @endif

            <div class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300">
                <table class="w-full text-left text-sm text-neutral-600">
                    <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900">
                    <tr>
                        <th scope="col" class="p-4">#</th>
                        <th scope="col" class="p-4">From</th>
                        <th scope="col" class="p-4">To</th>
                        <th scope="col" class="p-4">Rate</th>
                        <th scope="col" class="p-4 w-5"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-300 even:[&_tr]:bg-black/5">
                    @foreach($exchanges as $exchange)
                        <tr>
                            <td class="p-4">{{$exchange->id}}</td>
                            <td class="p-4">{{$exchange->from->name}} ({{$exchange->from->symbol}})</td>
                            <td class="p-4">{{$exchange->to->name}} ({{$exchange->to->symbol}})</td>
                            <td class="p-4">{{number_format($exchange->rate)}}</td>
                            <td class="p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.4rem" height="1.4rem" viewBox="0 0 24 24" class="cursor-pointer" @click="openModal({{$exchange}})">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/>
                                    </g>
                                </svg>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{$exchanges->links('pagination::default')}}
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        function data() {
            return {
                modalIsOpen: false,
                exchange: null,
                url: '',
                openModal(exchange) {
                    this.modalIsOpen = true;
                    this.exchange = exchange;
                    this.url = '{{route('currencies.exchange.update','xxx')}}'.replace('xxx', exchange.id);
                }
            }
        }
    </script>
@endsection
