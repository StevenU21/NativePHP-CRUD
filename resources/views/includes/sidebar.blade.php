<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
            PHP Desktop
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span
                    class="{{ Route::is('dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ Route::is('dashboard') ? 'text-gray-800 dark:text-gray-100' : '' }}"
                    href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt w-5 h-5"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3">
                <span
                    class="{{ Route::is('categories.index') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }}"
                    aria-hidden="true"></span>
                <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ Route::is('categories.index') ? 'text-gray-800 dark:text-gray-100' : '' }}"
                    href="{{ route('categories.index') }}">
                    <i class="fas fa-tags w-5 h-5"></i>
                    <span class="ml-4">Categories</span>
                </a>
            </li>
            <!-- Components Dropdown -->
            <li class="relative px-6 py-3" x-data="{ isOpen: false }">
                <button
                    class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none"
                    @click="isOpen = !isOpen" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fas fa-cogs w-5 h-5"></i>
                        <span class="ml-4">Components</span>
                    </span>
                    <i class="fas" :class="{ 'fa-chevron-down': !isOpen, 'fa-chevron-up': isOpen }"></i>
                </button>
                <ul x-show="isOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 dark:text-gray-400">
                    <li class="px-6 py-2">
                        <a class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ route('forms') }}">
                            <i class="fas fa-file-alt w-5 h-5"></i>
                            <span class="ml-4">Forms</span>
                        </a>
                    </li>
                    <li class="px-6 py-2">
                        <a class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ route('cards') }}">
                            <i class="fas fa-id-card w-5 h-5"></i>
                            <span class="ml-4">Cards</span>
                        </a>
                    </li>
                    <li class="px-6 py-2">
                        <a class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ route('charts') }}">
                            <i class="fas fa-chart-pie w-5 h-5"></i>
                            <span class="ml-4">Charts</span>
                        </a>
                    </li>
                    <li class="px-6 py-2">
                        <a class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ route('buttons') }}">
                            <i class="fas fa-mouse-pointer w-5 h-5"></i>
                            <span class="ml-4">Buttons</span>
                        </a>
                    </li>
                    <li class="px-6 py-2">
                        <a class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ route('modals') }}">
                            <i class="fas fa-window-maximize w-5 h-5"></i>
                            <span class="ml-4">Modals</span>
                        </a>
                    </li>
                    <li class="px-6 py-2">
                        <a class="inline-flex items-center w-full transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="{{ route('tables') }}">
                            <i class="fas fa-table w-5 h-5"></i>
                            <span class="ml-4">Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="px-6 my-6">
            <button
                class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <i class="fas fa-heart mr-2"></i>Mamala Windows Forms, PHP Forever 💘🥵🥵🥵
            </button>
        </div>
    </div>
</aside>
