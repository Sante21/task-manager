<x-layouts.app>
    <!-- component -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white dark:bg-neutral-900 rounded-xl shadow-lg p-8">

            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">Nuevo Responsable</h2>
            <form id="form" class="space-y-4" action="{{ route('responsables.store') }}" method="post"
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
                    <label for="name"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Nombre</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all"
                        placeholder="Título">
                </div>

                <div>
                    <label for="cargo"
                        class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Cargo</label>
                    <select name="cargo" id="cargo" onclick="this.setAttribute('value', this.value);"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona el cargo</option>
                        <option value="Web">Web</option>
                        <option value="Marketing">Marketing</option>
                        <option value="alta">Alta</option>
                    </select>
                </div>

                <!-- <div>
                    <label for="user_id" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Usuario</label>
                    <select name="user_id" id="user_id" onclick="this.setAttribute('value', this.value);"
                        class="w-full px-4 py-2 border text-gray-700 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-blue-600 outline-none transition-all">
                        <option value="" selected disabled>Selecciona el usuario</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div> -->

                <div class="w-full mb-8 mt-8" id="drop-area">
                    <label id="label"
                        class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center justify-center rounded-xl border-2 border-dashed border-blue-500 p-6 text-center"
                        htmlFor="image">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" strokeWidth="2">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>

                        <h2 class="mt-4 text-xl font-medium text-gray-700 dark:text-slate-200 tracking-wide">Foto del
                            responsable</h2>
                        <p class="mt-2 text-gray-500 dark:text-slate-400 tracking-wide">Sube o arrastra tu archivo PNG,
                            JPG, JPEG o GIF.</p>

                        <input id="image" type="file" class="hidden" name="image"
                            accept="image/jpeg, image/png, image/jpg, image/gif" />
                    </label>
                </div>

                <button id="button" type="submit"
                    class="w-full bg-neutral-600 hover:bg-neutral-700 hover:shadow-lg text-white py-2.5 mt-4 font-medium transition-colors duration-150 ease-linear rounded-lg shadow outline-none focus:outline-none cursor-pointer">
                    Crear Responsable
                </button>
            </form>
        </div>
    </div>

    <script>
        const dropArea = document.getElementById("drop-area");
        const label = document.getElementById("label")
        const fileInput = document.getElementById("image");

        // Prevenir comportamiento por defecto
        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            label.classList.add("border-solid", "bg-gray-100")
        });

        dropArea.addEventListener("dragleave", () => {
            label.classList.remove("border-solid", "bg-gray-100")
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