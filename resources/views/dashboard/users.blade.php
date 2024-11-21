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
                        <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white" x-text="user?.name"></h3>
                        <button @click="modalIsOpen = false" aria-label="close modal">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Dialog Body -->
                    <div class="px-4 py-8">
                        <template x-if="!user">
                            <form :action='url' method="post">
                                @csrf
                                <div class="my-3">
                                    <label for="name" class="font-Hel_Med text-[18px] text-white">Name</label>

                                    <input type="text" name="name" id="name" class="mt-3 border-palmela-300 focus:outline-none" required x-model="user.name">

                                    @error('name')
                                    <small class="text-rose-500">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="email" class="font-Hel_Med text-[18px] text-white">Email</label>

                                    <input type="text" name="email" id="email" class="mt-3 border-palmela-300 focus:outline-none" required
                                           x-model="user.email">

                                    @error('email')
                                    <small class="text-rose-500">{{$message}}</small>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="password" class="font-Hel_Med text-[18px] text-white">Password</label>

                                    <input type="password" name="password" step="0.1" id="password" class="mt-3 border-palmela-300 focus:outline-none"
                                           required
                                           x-model="user.password">

                                    @error('password')
                                    <small class="text-rose-500">{{$message}}</small>
                                    @enderror
                                </div>

                                <button class="rounded-lg bg-palmela-400 w-full p-3 font-semibold text-black text-sm my-6 hover:bg-palmela-100 hover:text-palmela-900">
                                    Save
                                </button>

                            </form>
                        </template>

                        <template x-if="user">
                            <form :action='url' method="post">
                                @csrf
                                @method('put')

                                <div class="my-3">
                                    <label for="name" class="font-Hel_Med text-[18px] text-white">Name</label>

                                    <input type="text" name="name" id="name" class="mt-3 border-palmela-300 focus:outline-none" required x-model="user.name">

                                    @error('name')
                                    <small class="text-rose-500">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <label for="email" class="font-Hel_Med text-[18px] text-white">Email</label>

                                    <input type="text" name="email" id="email" class="mt-3 border-palmela-300 focus:outline-none" required
                                           x-model="user.email">

                                    @error('email')
                                    <small class="text-rose-500">{{$message}}</small>
                                    @enderror
                                </div>


                                <div class="my-3">
                                    <label for="password" class="font-Hel_Med text-[18px] text-white">Password</label>

                                    <input type="password" name="password" step="0.1" id="password" class="mt-3 border-palmela-300 focus:outline-none"
                                           required
                                           x-model="user.password">

                                    @error('password')
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

            <div class="my-3">
                <button class="rounded-full bg-palmela-400 hover:bg-palmela-800 hover:text-white helvetica-medium py-2 px-4 text-[15px]" @click="addModal">
                    New User
                </button>
            </div>

            <div class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300">
                <table class="w-full text-left text-sm text-neutral-600">
                    <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900">
                    <tr>
                        <th scope="col" class="p-4">#</th>
                        <th scope="col" class="p-4">Name</th>
                        <th scope="col" class="p-4">Email</th>
                        <th scope="col" class="p-4 w-5"></th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-300 even:[&_tr]:bg-black/5">
                    @foreach($users as $user)
                        <tr>
                            <td class="p-4">{{$user->id}}</td>
                            <td class="p-4">{{$user->name}}</td>
                            <td class="p-4">{{$user->email}}</td>
                            <td class="p-4 flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.4rem" height="1.4rem" viewBox="0 0 24 24" class="cursor-pointer stroke-amber-500"
                                     @click="editModal({{$user}})">
                                    <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/>
                                    </g>
                                </svg>

                                @if(auth()->id()!==$user->id)
                                    <form action="{{route('users.destroy',$user->id)}}" method="post" onclick="this.submit()">
                                        @csrf
                                        @method('delete')
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.4rem" height="1.4rem" viewBox="0 0 24 24" class="cursor-pointer fill-red-600">
                                            <path d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z"/>
                                        </svg>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{$users->links('pagination::default')}}
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        function data() {
            return {
                modalIsOpen: false,
                user: null,
                url: '',
                addModal() {
                    this.modalIsOpen = true;
                    this.user = undefined;
                    this.url = '{{route('users.store')}}';
                },
                editModal(user) {
                    this.modalIsOpen = true;
                    this.user = user;
                    this.url = '{{route('users.update','xxx')}}'.replace('xxx', user.id);
                }
            }
        }
    </script>
@endsection
