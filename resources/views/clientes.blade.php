<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <!-- component -->
        <div>
            <div class="w-full flex justify-between items-center mb-4 mt-4 pl-3 p-2 border-b-gray-200">
                <div>
                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Clientes</h3>
                    <p class="text-slate-500 dark:text-stone-300">Todos los clientes.</p>
                </div>
                <div class="mx-3">
                    <!-- <a href="clientes/create"> -->
                    <button onclick="openModal()"
                        class="flex select-none items-center gap-2 rounded cursor-pointer bg-slate-800 dark:bg-white py-3 px-4 text-xs font-semibold text-white dark:text-slate-800 shadow-md shadow-slate-900/10 transition-all hover:shadow-xs hover:shadow-slate-900/20 dark:hover:shadow-gray-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" stroke-width="2" class="w-4 h-4">
                            <path
                                d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                            </path>
                        </svg>
                        Nuevo cliente
                    </button>
                    <!-- </a> -->
                </div>
            </div>

            <div
                class="relative flex flex-col w-full text-gray-700 bg-white dark:bg-neutral-800 shadow-md rounded-lg bg-clip-border">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead>
                        <tr class="border-b border-slate-300 bg-slate-50 dark:bg-neutral-950">
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">Logo
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">Nombre
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">Telefono
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">Email
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100">Servicio
                            </th>
                            <th class="p-4 text-sm font-normal leading-none text-slate-500 dark:text-slate-100"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <x-tabla-clientes name="{{ $cliente->name }}" phone="{{ $cliente->phone }}"
                                mail="{{ $cliente->email }}" id="{{ $cliente->id }}" service="{{ $cliente->service }}"
                                image="{{ $cliente->image }}">
                            </x-tabla-clientes>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="modalForm" class="fixed inset-0 bg-black/50 flex justify-center items-center z-50 hidden">
        <div class="max-w-md w-full bg-white dark:bg-neutral-900 rounded-xl shadow-lg p-8">
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">Nuevo cliente</h2>
            <form class="space-y-4" action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">
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

                <!-- Campo Nombre -->
                <div>
                    <label for="name"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Nombre</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all"
                        placeholder="Nombre">
                </div>

                <!-- Campo Email -->
                <div>
                    <label for="email"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all"
                        placeholder="cliente@email.com" />
                </div>

                <!-- Campo Telefono -->
                <div>
                    <label for="phone"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Telefono</label>
                    <input type="text" name="phone" id="phone"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all"
                        placeholder="+34 654 32 10 98" />
                </div>

                <!-- Campo Servicio -->
                <div>
                    <label for="service"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Service</label>
                    <select name="service" id="service"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona el servicio</option>
                        <option value="Redes" class="text-gray-900">Redes</option>
                        <option value="Web" class="text-gray-900">Web</option>
                        <option value="Redes y Web" class="text-gray-900">Redes y Web</option>
                    </select>
                </div>

                <!-- Campo Logo -->
                <div class="w-full mb-8 mt-8" id="drop-area">
                    <label id="label"
                        class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center justify-center rounded-xl border-2 border-dashed border-blue-500 p-6 text-center"
                        htmlFor="image">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>

                        <h2 class="mt-4 text-xl font-medium text-gray-700 dark:text-slate-200 tracking-wide">Favicon del
                            cliente</h2>
                        <p class="mt-2 text-gray-500 dark:text-slate-400 tracking-wide">Sube o arrastra tu archivo PNG,
                            JPG, JPEG o GIF.</p>

                        <input id="image" type="file" class="hidden" name="image"
                            accept="image/jpeg, image/png, image/jpg, image/gif" />
                    </label>
                </div>

                <!-- Boton de Añadir Cliente -->
                <button type="submit"
                    class="w-full bg-neutral-600 hover:bg-neutral-700 hover:shadow-lg text-white py-2.5 mt-4 font-medium transition-colors duration-150 ease-linear rounded-lg shadow outline-none focus:outline-none cursor-pointer">
                    Añadir cliente
                </button>
            </form>
        </div>
    </div>

    <script>
        let urlDel;
        let tableRow = document.querySelectorAll("TR");

        for (const tr of tableRow) {
            console.log(tr.td);
        }

        document.addEventListener('click', () => {
            urlDel = document.getElementById('formDel');
            console.log(urlDel);
        })

        function openModal() {
            document.getElementById('modalForm').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modalForm').classList.add('hidden');
        }

        const dropArea = document.getElementById("drop-area");
        const label = document.getElementById("label");
        const fileInput = document.getElementById("image");

        // Prevenir comportamiento por defecto
        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            label.classList.add("border-solid", "bg-gray-100");
        });

        dropArea.addEventListener("dragleave", () => {
            label.classList.remove("border-solid", "bg-gray-100");
        });

        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            label.classList.remove("border-solid", "bg-gray-100");

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                // Creamos un objeto FileList de manera programática para simular un cambio
                const fileList = new DataTransfer();
                fileList.items.add(files[0]); // Añadimos el archivo al DataTransfer

                // Asignamos el nuevo FileList al input
                fileInput.files = fileList.files;

                // Opcional: para mostrar el nombre del archivo seleccionado
                const fileName = files[0].name;
                dropArea.querySelector("p").textContent = `Archivo seleccionado: ${fileName}`;
            }
        });

        // Opcional: Para mostrar el nombre del archivo seleccionado
        fileInput.addEventListener("change", () => {
            const fileName = fileInput.files[0] ? fileInput.files[0].name : "No se ha seleccionado ningún archivo";
            dropArea.querySelector("p").textContent = `Archivo seleccionado: ${fileName}`;
        });
    </script>
</x-layouts.app>