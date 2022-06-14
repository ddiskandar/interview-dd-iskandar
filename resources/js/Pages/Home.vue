<template>
    <Head title="Welcome" />
    <h1 class="text-xl font-bold text-gray-700 mb-1">
        Dashboard
    </h1>
    <h2 class="text-sm text-gray-500 font-medium">
        Welcome <span class="text-indigo-600 hover:text-indigo-400">{{ name }}</span>, everything seems great!
    </h2>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import Layout from '../Shared/Layout';

export default {
    layout: Layout,
    components: {
      Head,
    },
    props : {
        name: String,
    }
};

</script>
