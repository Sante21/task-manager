<tr class="hover:bg-slate-50 dark:hover:bg-neutral-800 dark:bg-neutral-900">
    <td class="p-4 border-b border-slate-200 py-5">
        <!-- <img src="{{ asset('images/favicons/Favicon ' . $name . '.png') }}" alt="" -->
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
        <p class="text-sm text-slate-500 dark:text-slate-200">$9,000</p>
    </td>
    <td class="p-4 border-b border-slate-200 py-5">
        <div class="flex flex-row gap-2">
            <a href="clientes/{{ $id }}/edit">
                <button type="button"
                    class="text-slate-500 dark:text-slate-300 hover:text-slate-700 dark:hover:text-slate-50 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                    </svg>
                </button>
            </a>

            <form action="{{ route('clientes.destroy', $id) }}" method="POST">
                @csrf
                @method('DELETE') <!-- Esto simula un método DELETE -->
                <button type="submit"
                    class="text-slate-500 dark:text-slate-300 hover:text-slate-700 dark:hover:text-slate-50 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </form>
        </div>
    </td>
</tr>