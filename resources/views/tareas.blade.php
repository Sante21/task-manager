<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <!-- component -->
        <div>
            <div class="w-full flex justify-between items-center mb-4 mt-4 pl-3 p-2 border-b-gray-200">
                <div>
                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Lista de tareas</h3>
                    <p class="text-slate-500 dark:text-stone-300">Revisa todas las tareas</p>
                </div>
                <div class="mx-3">
                    <a href="tareas/create">
                        <button
                            class="flex select-none items-center gap-2 rounded cursor-pointer bg-slate-800 dark:bg-white py-3 px-4 text-xs font-semibold text-white dark:text-slate-800 shadow-md shadow-slate-900/10 transition-all hover:shadow-xs hover:shadow-slate-900/20 dark:hover:shadow-gray-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" stroke-width="2" class="w-4 h-4">
                                <path
                                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                </path>
                            </svg>
                            Nueva tarea
                        </button>
                    </a>
                </div>
            </div>

            <div
                class="relative flex flex-col w-full text-gray-700 bg-white dark:bg-neutral-800 shadow-md rounded-lg bg-clip-border">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead>
                        <tr class="border-b border-slate-300 bg-slate-50 dark:bg-neutral-950">
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                Titulo
                                <!-- <p
                                    class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                    </svg>
                                </p> -->
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                Estado
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                Cliente
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                Responsable
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                Prioridad
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                Fecha Limite
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">
                                <p
                                    class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tareas as $tarea)
                            <x-tabla-tareas title="{{ $tarea->title }}" id="{{ $tarea->id }}"
                                desc="{{ $tarea->description }}" priority="{{ $tarea->priority }}" tag="{{ $tarea->tag }}"
                                status="{{ $tarea->status }}" date="{{ $tarea->limit_date }}">
                                <x-slot name="client">
                                    @foreach ($tarea->clientes as $cliente)
                                        {{ $cliente->name }}
                                    @endforeach
                                </x-slot>
                                <x-slot name="faviconC">
                                    @foreach ($tarea->clientes as $cliente)
                                        {{ $cliente->image }}
                                    @endforeach
                                </x-slot>
                                <x-slot name="mail">
                                    @foreach ($tarea->clientes as $cliente)
                                        {{ $cliente->email }}
                                    @endforeach
                                </x-slot>
                                <x-slot name="responsable">
                                    @foreach ($tarea->responsables as $responsable)
                                        {{ $responsable->name }}
                                    @endforeach
                                </x-slot>
                                <x-slot name="faviconR">
                                    @foreach ($tarea->responsables as $responsable)
                                        {{ $responsable->image }}
                                    @endforeach
                                </x-slot>
                                <x-slot name="cargo">
                                    @foreach ($tarea->responsables as $responsable)
                                        {{ $responsable->cargo }}
                                    @endforeach
                                </x-slot>
                            </x-tabla-tareas>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-center p-3">
                {{ $tareas->links() }}
                <!-- <p class="block text-sm text-slate-500">
                    Page 1 of 10
                </p>
                <div class="flex gap-1">
                    <button
                        class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        Previous
                    </button>
                    <button
                        class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        Next
                    </button>
                </div> -->
            </div>
        </div>
    </div>
</x-layouts.app>