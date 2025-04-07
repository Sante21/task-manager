<tr>
    <td class="p-4 border-b border-slate-200">
        <div class="flex flex-col">
            <p class="text-sm font-semibold text-slate-700 truncate max-w-xs">
                {{$title}}
            </p>
        </div>
    </td>
    <td class="p-4 border-b border-slate-200">
        <div class="flex flex-col">
            <p class="text-sm font-semibold text-slate-700 truncate max-w-xs">
                {{$desc}}
            </p>
        </div>
    </td>
    <td class="p-4 border-b border-slate-200">
        <div class="flex items-center gap-3">
            <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg"
                alt="{{$client}}" class="relative inline-block h-9 w-9 !rounded-full object-cover object-center" />
            <div class="flex flex-col">
                <p class="text-sm font-semibold text-slate-700">
                    {{$client}}
                </p>
                <p class="text-sm text-slate-500">
                    {{$mail}}
                </p>
            </div>
        </div>
    </td>
    <td class="p-4 border-b border-slate-200">
        <div class="flex flex-col">
            <p class="text-sm font-semibold text-slate-700">
                {{ $responsable }}
            </p>
            <p class="text-sm text-slate-500">
                {{ $cargo }}
            </p>
        </div>
    </td>
    <td class="p-4 border-b border-slate-200">
        <div class="w-max">
            @if ($status == "Sin empezar")
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-300">
                    <span class="">{{ $status }}</span>
                </div>
            @elseif ($status == 'Pausa')
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-300">
                    <span class="">{{ $status }}</span>
                </div>
            @elseif ($status == 'En progreso')
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-blue-900 uppercase rounded-md select-none whitespace-nowrap bg-blue-300">
                    <span class="">{{ $status }}</span>
                </div>
            @elseif ($status == 'Listo')
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                    <span class="">{{ $status }}</span>
                </div>
            @endif
        </div>
    </td>

    <!-- <td class="p-4 border-b border-slate-200">
        <div class="w-max">
            <select name="status" id="status" class="bg-gray-200 p-2 rounded-md text-xs font-bold uppercase">
                <option value="Sin empezar" @if($status == "Sin empezar") selected @endif
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-300">
                    Sin empezar
                </option>
                <option value="Pausa" @if($status == "Pausa") selected @endif
                class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-gray-900 uppercase rounded-md select-none whitespace-nowrap bg-gray-300">
                    Pausa
                </option>
                <option value="En progreso" @if($status == "En progreso") selected @endif
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-blue-900 uppercase rounded-md select-none whitespace-nowrap bg-blue-300">
                    En progreso
                </option>
                <option value="Listo" @if($status == "Listo") selected @endif
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                    Listo
                </option>
            </select>
        </div>
    </td> -->

    <td class="p-4 border-b border-slate-200">
        <p class="text-sm text-slate-500">
            {{$date}}
        </p>
    </td>
    <td class="p-4 border-b border-slate-200">
        <button
            class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    class="w-4 h-4">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                    </path>
                </svg>
            </span>
        </button>
    </td>
</tr>