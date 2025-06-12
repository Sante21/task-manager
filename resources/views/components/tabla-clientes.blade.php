<tr class="hover:bg-slate-50 dark:hover:bg-neutral-800 dark:bg-neutral-900">
    <td class="p-4 border-b border-slate-200 py-5">
        <img src="{{ asset($image) }}" alt="" class="w-13 h-13 object-cover rounded" />

    </td>
    <td class="p-4 border-b border-slate-200 py-5">
        <p class="block font-semibold text-sm text-slate-800 dark:text-slate-50">{{$name}}</p>
    </td>
    <td class="p-4 border-b border-slate-200 py-5">
        <p class="text-sm text-slate-500 dark:text-slate-200">{{$phone}}</p>
    </td>
    <td class="p-4 border-b border-slate-200 py-5">
        <p class="text-sm text-slate-500 dark:text-slate-200">{{$mail}}</p>
    </td>
    <td class="p-4 border-b border-slate-200 py-5">
        <p class="text-sm text-slate-500 dark:text-slate-200">{{ $service }}</p>
    </td>
    <td class="p-4 border-b border-slate-200 py-5">
        <div class="flex justify-end gap-4">
            <a href="clientes/{{ $id }}/edit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
            </a>
            <form action="{{ route('clientes.destroy', $id) }}" method="POST" id="formDel">
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

<script>

    function confirmation(e) {
        e.preventDefault();
        const urlToRedirect = urlDel.action;
        console.log(urlToRedirect);
        swal({
            title: "¿Seguro que quieres eliminar este Cliente?",
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