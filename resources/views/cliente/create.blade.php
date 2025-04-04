<x-layouts.app>
    <!-- component -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white dark:bg-neutral-900 rounded-xl shadow-lg p-8">
            
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">Nuevo cliente</h2>
            <form class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Nombre</label>
                    <input type="text"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="Nombre">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Email</label>
                    <input type="email"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="cliente@email.com" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-white mb-1">Telefono</label>
                    <input type="tel"
                        class="w-full px-4 py-2 border text-gray-900 dark:text-white border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                        placeholder="+34 654 32 10 98" />
                </div>
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors mt-4">
                    Añadir cliente
                </button>
            </form>
        </div>
    </div>
</x-layouts.app>