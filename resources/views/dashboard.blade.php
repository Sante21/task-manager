<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-auto overflow-rounded-xl rounded-xl border border-neutral-200 dark:border-neutral-700 p-2">
                <div class="flex gap-2 text-xl font-medium text-gray-700 dark:text-white mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>

                    <h2>Listado de clientes</h2>
                </div>

                @foreach ($clients as $client)
                    <div class="flex items-center gap-2 text-gray-700 dark:text-white mt-2 mb-2">
                        <img src="{{ asset($client->image) }}" alt="Favicon {{$client->name}}" class="w-10 h-10 object-cover rounded" />

                        <p class="text-m font-medium text-gray-700 dark:text-white">{{ $client->name }}</p>
                    </div>

                @endforeach


                <!-- <ul class="pl-2 mt-2">
                    <li></li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                    <li>Novaproin</li>
                </ul> -->

            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern
                    class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div
            class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>