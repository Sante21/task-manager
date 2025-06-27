<x-layouts.app>
    <!-- component -->
    <style>
        .-z-1 {
            z-index: -1;
        }

        .origin-0 {
            transform-origin: 0%;
        }

        input:focus~label,
        input:not(:placeholder-shown)~label,
        textarea:focus~label,
        textarea:not(:placeholder-shown)~label,
        select:focus~label,
        select:not([value='']):valid~label {
            /* @apply transform; scale-75; -translate-y-6; */
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-scale-x: 0.75;
            --tw-scale-y: 0.75;
            --tw-translate-y: -1.5rem;
        }

        input:focus~label,
        select:focus~label {
            /* @apply text-black; left-0; */
            --tw-text-opacity: 1;
            color: rgba(0, 0, 0, var(--tw-text-opacity));
            left: 0px;
        }
    </style>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white dark:bg-neutral-900 rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">Nueva Tarea</h2>
            <form id="form" class="space-y-4" action="{{ route('tareas.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <!-- Errores generales -->
                @if ($errors->any())
                    <div class="bg-red-200 p-4 rounded-lg mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-600">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Título de la
                        tarea</label>
                    <input type="text" name="title" id="title"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all"
                        placeholder="Título">
                </div>

                <div>
                    <label for="description"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Descripción de la
                        Tarea</label>
                    <textarea name="description" id="description"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all"
                        placeholder="Despcripción"></textarea>
                </div>

                <div>
                    <label for="priority"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Prioridad</label>
                    <select name="priority" id="priority" onclick="this.setAttribute('value', this.value);"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona la prioridad</option>
                        <option value="baja">Baja</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                    </select>
                </div>

                <div>
                    <label for="cliente_tarea"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Cliente</label>
                    <select name="cliente_tarea" id="cliente_tarea" onclick="this.setAttribute('value', this.value);"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona el cliente</option>
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->name}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div>
                    <label for="responsable_tarea"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Responsable</label>
                    <select name="responsable_tarea" id="responsable_tarea" onclick="this.setAttribute('value', this.value);"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona un responsable</option>
                        @foreach($responsables as $responsable)
                            <option value="{{$responsable->id}}">{{$responsable->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="tag"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Etiqueta</label>
                    <select name="tag" id="tag"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona la etiqueta</option>
                        <option value="redes">Redes</option>
                        <option value="web">Web</option>
                        <option value="newsletter">Newsletter</option>
                    </select>
                </div>

                <div>
                    <label for="status"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Estado</label>
                    <select name="status" id="status"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona el estado</option>
                        <option value="sin empezar">Sin empezar</option>
                        <option value="pausa">Pausa</option>
                        <option value="en progreso">En progreso</option>
                        <option value="listo">Listo</option>
                    </select>
                </div>

                <div>
                    <label for="limit_date" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Fecha
                        límite</label>
                    <input type="date" name="limit_date" id="limit_date"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                </div>

                <button id="button" type="submit"
                    class="w-full bg-neutral-600 hover:bg-neutral-700 hover:shadow-lg text-white py-2.5 mt-4 font-medium transition-colors duration-150 ease-linear rounded-lg shadow outline-none focus:outline-none cursor-pointer">
                    Crear Tarea
                </button>
            </form>
        </div>
    </div>

    <script>
        'use strict'

        document.getElementById('button').addEventListener('click', toggleError)
        const errMessages = document.querySelectorAll('#error')

        function toggleError() {
            // Mostrar mensaje de error
            errMessages.forEach((el) => {
                el.classList.toggle('hidden')
            })

            // Highlight input and label with red
            const allBorders = document.querySelectorAll('.border-gray-200')
            const allTexts = document.querySelectorAll('.text-gray-500')
            allBorders.forEach((el) => {
                el.classList.toggle('border-red-600')
            })
            allTexts.forEach((el) => {
                el.classList.toggle('text-red-600')
            })
        }
    </script>
</x-layouts.app>