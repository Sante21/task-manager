<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <!-- component -->
        <div>
            <!-- component -->
            <div class="w-full flex justify-between items-center mb-3 mt-4 pl-3">
                <div>
                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Responsables</h3>
                    <p class="text-slate-500 dark:text-stone-300">Todos los responsables.</p>
                </div>
                <div class="mx-3">
                    <div class="w-full max-w-sm min-w-[200px] relative">
                        <div class="relative flex gap-2.5">
                            <button
                                class="flex select-none items-center gap-2 rounded bg-slate-800 dark:bg-white py-2.5 px-4 w-80 text-xs font-semibold text-white dark:text-slate-800 shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" stroke-width="2" class="w-4 h-4">
                                    <path
                                        d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                    </path>
                                </svg>
                                Nuevo responsable
                            </button>
                            <input
                                class="bg-white w-full pr-11 h-10 pl-3 py-2 placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
                                placeholder="Busca por Responsable..." />
                            <button
                                class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded "
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                    stroke="currentColor" class="w-8 h-8 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md ">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Rol</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cargo</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach ($responsables as $responsable)
                            <x-registroResponsables name="{{ $responsable->name }}" cargo="{{ $responsable->cargo }}"
                                mail="{{$responsable->user->email}}" rol="{{$responsable->user->rol}}">
                            </x-registroResponsables>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.app>