<template>
    <!-- Page Container -->
<div id="page-container" class="flex flex-col w-full min-h-screen mx-auto bg-gray-100">
  <!-- Page Content -->
  <main id="page-content" class="flex flex-col flex-auto max-w-full">
    <div class="relative flex items-center justify-center w-full min-h-screen p-4 mx-auto overflow-hidden max-w-10xl lg:p-8">
      <!-- Patterns Background -->
      <div class="absolute top-0 right-0 w-32 h-32 text-gray-300 transform translate-x-16 translate-y-16 pattern-dots-md lg:w-48 lg:h-48"></div>
      <div class="absolute bottom-0 left-0 w-32 h-32 text-gray-300 transform -translate-x-16 -translate-y-16 pattern-dots-md lg:w-48 lg:h-48"></div>
      <!-- END Patterns Background -->

      <!-- Sign Up Section -->
      <div class="relative w-full py-6 lg:py-0 md:w-8/12 lg:w-6/12 xl:w-4/12">
        <!-- Header -->
        <div class="mb-8 text-center">
          <p class="text-gray-500">
            Create your own app in one single step
          </p>
        </div>
        <!-- END Header -->

        <!-- Sign Up Form -->
        <div class="flex flex-col overflow-hidden bg-white rounded shadow-sm">
          <div class="w-full p-5 lg:p-6 grow">
            <form onsubmit="return false;" class="space-y-6">
                <div class="space-y-1">
                  <label for="name" class="font-medium">Name</label>
                  <input class="block w-full px-5 py-3 leading-6 border border-gray-200 rounded focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" type="text" id="name" name="name" placeholder="Enter your first name">
                </div>
                <div class="space-y-1">
                  <label for="email" class="font-medium">Domain</label>
                  <input class="block w-full px-5 py-3 leading-6 border border-gray-200 rounded focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" type="email" id="email" name="email" placeholder="Enter your Domain">
                </div>
                <div class="flex items-center">
                  <input type="checkbox" id="remember_me" name="remember_me" class="w-4 h-4 text-indigo-500 border border-gray-200 rounded focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                  <span class="ml-2"> I accept <a href="javascript:void(0)" class="text-gray-600 underline hover:text-gray-500">terms &amp; conditions</a></span>
                </div>
                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 space-x-2 font-semibold leading-6 text-white bg-indigo-700 border border-indigo-700 rounded focus:outline-none hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                  Create Account
                </button>
              </form>
          </div>
        </div>
        <!-- END Sign Up Form -->

      </div>
      <!-- END Sign Up Section -->
    </div>
  </main>
  <!-- END Page Content -->
</div>
<!-- END Page Container -->
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Head,
    },
};
</script>
