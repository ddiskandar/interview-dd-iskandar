<template>
  <!-- Page Container -->
    <div id="page-container" class="flex flex-col w-full min-h-screen mx-auto bg-gray-100">
    <!-- Page Header -->
    <header id="page-header" class="flex items-center flex-none bg-white shadow-sm z-1">
        <div class="container px-4 mx-auto xl:max-w-7xl lg:px-8">
        <div class="flex justify-between py-4">
            <!-- Left Section -->
            <div class="flex items-center space-x-2 lg:space-x-6">
            <!-- Logo -->
            <Link href="/" class="inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-gray-700 group hover:text-indigo-600 active:text-gray-700">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 text-indigo-600 transition transform opacity-90 group-hover:scale-110 hi-solid hi-cube-transparent"><path fill-rule="evenodd" d="M9.504 1.132a1 1 0 01.992 0l1.75 1a1 1 0 11-.992 1.736L10 3.152l-1.254.716a1 1 0 11-.992-1.736l1.75-1zM5.618 4.504a1 1 0 01-.372 1.364L5.016 6l.23.132a1 1 0 11-.992 1.736L4 7.723V8a1 1 0 01-2 0V6a.996.996 0 01.52-.878l1.734-.99a1 1 0 011.364.372zm8.764 0a1 1 0 011.364-.372l1.733.99A1.002 1.002 0 0118 6v2a1 1 0 11-2 0v-.277l-.254.145a1 1 0 11-.992-1.736l.23-.132-.23-.132a1 1 0 01-.372-1.364zm-7 4a1 1 0 011.364-.372L10 8.848l1.254-.716a1 1 0 11.992 1.736L11 10.58V12a1 1 0 11-2 0v-1.42l-1.246-.712a1 1 0 01-.372-1.364zM3 11a1 1 0 011 1v1.42l1.246.712a1 1 0 11-.992 1.736l-1.75-1A1 1 0 012 14v-2a1 1 0 011-1zm14 0a1 1 0 011 1v2a1 1 0 01-.504.868l-1.75 1a1 1 0 11-.992-1.736L16 13.42V12a1 1 0 011-1zm-9.618 5.504a1 1 0 011.364-.372l.254.145V16a1 1 0 112 0v.277l.254-.145a1 1 0 11.992 1.736l-1.735.992a.995.995 0 01-1.022 0l-1.735-.992a1 1 0 01-.372-1.364z" clip-rule="evenodd"></path></svg>
                <span class="hidden sm:inline-block">Inertia</span>
            </Link>
            <!-- END Logo -->

            <!-- Desktop Navigation -->
            <nav class="flex items-center space-x-2">
                <Link
                    href="/"
                    class="px-3 py-2 text-sm font-medium hover:text-indigo-500 hover:bg-indigo-50 hover:border-indigo-50 active:bg-indigo-100 active:border-indigo-100 hover:rounded"
                    :class="{'text-indigo-500 border rounded border-indigo-50 bg-indigo-50' : $page.url === '/'}"
                >
                    <span>Dashboard</span>
                </Link>
                <Link
                    href="/contacts"
                    class="px-3 py-2 text-sm font-medium hover:text-indigo-500 hover:bg-indigo-50 hover:border-indigo-50 active:bg-indigo-100 active:border-indigo-100 hover:rounded"
                    :class="{'text-indigo-500 border rounded border-indigo-50 bg-indigo-50' : $page.url.startsWith('/contacts')}"
                >
                    <span>Contacts</span>
                </Link>
            </nav>
            <!-- END Desktop Navigation -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="flex items-center space-x-1 lg:space-x-2">
            <!-- User Dropdown -->
            <div class="relative inline-block">
                <Link class="text-sm font-semibold leading-5 text-gray-800 hover:text-gray-800" href="/logout" method="delete" as="button">Logout</Link>
            </div>
            <!-- END User Dropdown -->

            </div>
            <!-- END Right Section -->
        </div>

        </div>
    </header>
    <!-- END Page Header -->

    <!-- Page Content -->
    <main id="page-content" class="flex flex-col flex-auto max-w-full">
        <!-- Page Section -->
        <div class="container p-4 mx-auto xl:max-w-7xl lg:p-8">
        <slot></slot>
        </div>
        <!-- END Page Section -->
    </main>
    <!-- END Page Content -->
    </div>
    <!-- END Page Container -->
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
  }
}
</script>
