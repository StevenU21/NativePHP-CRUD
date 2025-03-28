<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu" aria-label="Menu">
            <i class="fas fa-bars w-6 h-6"></i>
        </button>
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
        </div>
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
                <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme"
                    aria-label="Toggle color mode">
                    <template x-if="!dark">
                        <i class="fas fa-sun w-5 h-5"></i>
                    </template>
                    <template x-if="dark">
                        <i class="fas fa-moon w-5 h-5"></i>
                    </template>
                </button>
            </li>
            <!-- Profile menu -->
            <li class="relative">
                <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                    @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                    aria-haspopup="true">
                    <img class="object-cover w-8 h-8 rounded-full"
                        src="https://lh3.googleusercontent.com/ogw/AF2bZyincSVrNzgq9dYQnzynGd2UHkPGxCMAWKZogxxCVA0Mqg=s64-c-mo"
                        alt="" aria-hidden="true" />
                </button>
            </li>
        </ul>
    </div>
</header>
