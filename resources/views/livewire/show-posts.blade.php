<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- component -->
        <div class="overflow-x-auto">

            <x-table>

                <div class="px-6 py-4 flex items-center">

                    {{-- <input type="text" name="" value="" wire:model="search"> --}}

                    <x-jet-input class="flex-1 mr-4" placeholder="Escriba que esta buscando" type="text"
                        wire:model="search" />

                        @livewire('create-post')
                </div>
                @if($data->count())

                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('id')">ID





                                   @if($sort == 'id')


                                @if($sort == 'asc')
                                


                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>

                                @else

                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>

                                

                                @endif





                                @else
                                <i class="fas fa-sort float-right mt-1"></i>


                                @endif
                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('title')">TITLE

                                @if($sort == 'title')


                                @if($sort == 'asc')
                                


                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>

                                @else

                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>

                                

                                @endif





                                @else
                                <i class="fas fa-sort float-right mt-1"></i>


                                @endif

                            </th>
                            <th class="cursor-pointer py-3 px-6 text-left" wire:click="order('content')">CONTENT







                                   @if($sort == 'content')


                                @if($sort == 'asc')
                                


                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>

                            @else

                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>

                                

                                @endif





                                @else
                                <i class="fas fa-sort float-right mt-1"></i>


                                @endif
                            </th>

                            <th class="cursor-pointer py-3 px-6 text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">


                        @foreach( $data as $item)

                        <tr class="border-b border-gray-200 hover:bg-gray-100">




                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    </div>
                                    <span>{{$item->id}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-1 text-center">
                                <div class="flex items-center ">
                                    {{$item->title}}
                                </div>
                            </td>


                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center ">
                                    {{-- {{$d->content}} --}}
                                </div>
                            </td>

                            <td>

                                {{-- @livewire('edit-post', ['post'=> $post], key($item->id)) --}}
                                <a  class="btn btn-green" wire:click="edit({{$item}})">

                                  <i  class="fas fa-edit"></i>  
                                </a>
                            </td>

                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        @endforeach
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/100/000000/vue-js.png" />
                                    </div>
                                    <span class="font-medium">Vue Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    </div>
                                    <span>Anita Rodriquez</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6"
                                            src="https://img.icons8.com/color/100/000000/angularjs.png" />
                                    </div>
                                    <span class="font-medium">Angular Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/3.jpg" />
                                    </div>
                                    <span>Taylan Bush</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Scheduled</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6"
                                            src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/laravel-64.png" />
                                    </div>
                                    <span class="font-medium">Laravel Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/4.jpg" />
                                    </div>
                                    <span>Tarik Novak</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Pending</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/git.png" />
                                    </div>
                                    <span class="font-medium">GIT Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/5.jpg" />
                                    </div>
                                    <span>Oscar Howard</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/nodejs.png" />
                                    </div>
                                    <span class="font-medium">NodeJS Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/6.jpg" />
                                    </div>
                                    <span>Melisa Moon</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Scheduled</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6"
                                            src="https://img.icons8.com/color/48/000000/javascript.png" />
                                    </div>
                                    <span class="font-medium">JavaScript Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/women/7.jpg" />
                                    </div>
                                    <span>Cora Key</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Pending</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/php.png" />
                                    </div>
                                    <span class="font-medium">PHP Project</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full"
                                            src="https://randomuser.me/api/portraits/men/8.jpg" />
                                    </div>
                                    <span>Kylan Dorsey</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/women/2.jpg" />
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125"
                                        src="https://randomuser.me/api/portraits/men/3.jpg" />
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @else
                <div class="px-6 py-4">

                    No exite ningun registro coincidente
                </div>

                @endif




            </x-table>
        </div>
    </div>




<x-jet-dialog-modal wire:model="open_edit">

        <x-slot name='title'>
            Editar El Post
        </x-slot>

        <x-slot name='content'>



            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">¡ Imagen cargando...!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>

            </div>

            @if($image)

            <img class="mb-4" src="{{ $image->temporaryUrl()}}">

            @else

            <img src="{{Storage::url($post->image)}}" alt="">
            @endif


            <div class="mb-4">

                <x-jet-label value="Titulo del post" />
                <x-jet-input wire:model="post.title" type="text" class="w-full" />

            </div>


            <div>

                <x-jet-label value="Contenido del post" />
                <textarea wire:model="post.content" rows="6" class="form-control w-full"></textarea>




            </div>


            <div>

                <input type="file" wire:model="image" id="{{ $identificador }}">
                <x-jet-input-error for="image"/>

            </div>
        </x-slot>


        <x-slot name='footer'>


            <x-jet-secondary-button wire:click="$set('open_edit', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>


    </x-jet-dialog-modal>
</div>
