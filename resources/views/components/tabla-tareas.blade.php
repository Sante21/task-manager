<tr class="hover:bg-slate-50 dark:hover:bg-neutral-800 dark:bg-neutral-900">
    <!-- Titulo -->
    <td class="p-4 border-b border-slate-200 py-5">
        <p class="block font-semibold text-sm text-slate-800 dark:text-slate-50">{{$title}}</p>
    </td>
    <!-- Descripción -->
    <!-- <td class="p-4 border-b border-slate-200 py-5">
        <p class="block font-semibold text-sm text-slate-500 dark:text-slate-200">{{$desc}}</p>
    </td> -->
    <!-- Estado -->
    <td class="p-4 border-b border-slate-200 py-5">
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
    <!-- Cliente -->
    <td class="p-4 border-b border-slate-200 py-5">
        <div class="flex items-center gap-3">
            <img src="{{ $faviconC }}" alt="{{$client}}"
                class="relative inline-block h-9 w-9 !rounded-full object-cover object-center" />
            <div class="flex flex-col">
                <p class="block font-semibold text-sm text-slate-800 dark:text-slate-50">{{$client}}</p>
                <p class="block text-sm text-slate-600 dark:text-slate-300">{{$mail}}</p>
            </div>
        </div>
    </td>
    <!-- Responsable -->
    <td class="p-4 border-b border-slate-200 py-5">
        <div class="flex items-center gap-3">
            <img src="{{ $faviconR }}" alt="{{$responsable}}"
                class="relative inline-block h-9 w-9 !rounded-full object-cover object-center" />
            <div class="flex flex-col">
                <p class="block font-semibold text-sm text-slate-800 dark:text-slate-50">
                    {{ $responsable }}
                </p>
                <p class="block text-sm text-slate-600 dark:text-slate-300">
                    {{ $cargo }}
                </p>
            </div>
        </div>
    </td>
    <!-- Prioridad -->
    <td class="p-4 border-b border-slate-200 py-5">
        <div class="w-max">
            @if ($priority == "alta")
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-red-900 uppercase rounded-md select-none whitespace-nowrap bg-red-300">
                    <span class="">{{ $priority }}</span>
                </div>
            @elseif ($priority == 'media')
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-orange-800 uppercase rounded-md select-none whitespace-nowrap bg-orange-200">
                    <span class="">{{ $priority }}</span>
                </div>
            @elseif ($priority == 'baja')
                <div
                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                    <span class="">{{ $priority }}</span>
                </div>
            @endif
        </div>
    </td>
    <!-- Fecha -->
    <td class="p-4 border-b border-slate-200 py-5">
        <p class="block text-sm text-slate-500 dark:text-slate-200">{{$date}}</p>
    </td>
    
    <!-- <td class="p-4 border-b border-slate-200">
        <div class="flex justify-end gap-4">
            <a href="clientes/edit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </a>
            <form action="/" method="POST" id="formDel">
                @csrf
                @method('DELETE')
                <button onclick="confirmation(e)" type="submit" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="h-6 w-6 icon-hover-stroke" x-tooltip="tooltip">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </form>
        </div>
    </td> -->

    <!-- Editar y eliminar -->
    <td class="p-4 border-b border-slate-200 py-5">
        <div class="flex justify-end gap-4">
            <a href="tareas/{{ $id }}/edit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </a>
            <form action="{{ route('tareas.destroy', $id) }}" method="POST" id="formDel">
                @csrf
                @method('DELETE') <!-- Esto simula un método DELETE -->
                <button onclick="confirmation(e)" type="submit" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="h-6 w-6 icon-hover-stroke" x-tooltip="tooltip">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </form>
        </div>
    </td>
</tr>

<!-- Script -->
<script>
    function confirmation(e) {
        e.preventDefault();
        const urlToRedirect = urlDel.action;
        console.log(urlToRedirect);
        swal({
            title: "¿Seguro que quieres eliminar esta Tarea?",
            text: "Si aceptas, no podrás revertir esta acción",
            icon: "warning",
            buttons: true,
            dangerMode: true
        })
            .then((willCancel) => {
                if (willCancel) {
                    window.location.href = urlToRedirect;
                }
            })
    }
</script>

<!-- Estilos -->
<style>
    .icon-hover-stroke {
        stroke: currentColor;
        transition: stroke 0.3s;
    }

    .icon-hover-stroke:hover {
        stroke: #23252a;
        transform: scale(1.06);
    }
</style>