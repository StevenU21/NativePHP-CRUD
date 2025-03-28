<div>
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show"
            class="relative mb-4 text-sm font-medium text-green-700 bg-green-100 rounded-lg dark:bg-green-700 dark:text-green-100 px-4 py-3">
            <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            <button @click="show = false" class="absolute top-0 right-0 mt-2 mr-2 text-green-700 dark:text-green-100">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif

    @if (session('updated'))
        <div x-data="{ show: true }" x-show="show"
            class="relative mb-4 text-sm font-medium text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-700 dark:text-blue-100 px-4 py-3">
            <i class="fas fa-info-circle mr-2"></i> {{ session('updated') }}
            <button @click="show = false" class="absolute top-0 right-0 mt-2 mr-2 text-blue-700 dark:text-blue-100">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif

    @if (session('deleted'))
        <div x-data="{ show: true }" x-show="show"
            class="relative mb-4 text-sm font-medium text-red-700 bg-red-100 rounded-lg dark:bg-red-700 dark:text-red-100 px-4 py-3">
            <i class="fas fa-times-circle mr-2"></i> {{ session('deleted') }}
            <button @click="show = false" class="absolute top-0 right-0 mt-2 mr-2 text-red-700 dark:text-red-100">
                <i class="fas fa-times"></i>
            </button>
        </div>
    @endif
</div>
