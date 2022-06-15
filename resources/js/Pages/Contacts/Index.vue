<template>
    <Head title="Contacts" />

    <div class="flex flex-col overflow-hidden bg-white rounded shadow-sm">
        <div class="w-full px-5 py-4 lg:px-6 bg-gray-50 sm:flex sm:justify-between sm:items-center">
            <div class="text-center sm:text-left">
                <h3 class="font-semibold">
                    Contacts
                </h3>
                <h4 class="text-sm text-gray-500">
                    Manage all your contact
                </h4>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:text-right">
                <Link href="\contacts\create" class="inline-flex items-center justify-center px-3 py-2 space-x-2 text-sm font-semibold leading-5 text-white bg-indigo-700 border border-indigo-700 rounded focus:outline-none hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                    <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 hi-solid hi-plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    <span>New Contact</span>
                </Link>
            </div>
        </div>

        <div class="w-full p-5 lg:p-6 grow">
            <div class="min-w-full overflow-x-auto bg-white border border-gray-200 rounded">
                <table class="min-w-full text-sm align-middle whitespace-nowrap">
                    <thead>
                    <tr class="border-b border-gray-200">
                        <th class="p-3 pl-6 text-sm font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100">
                            Name
                        </th>
                        <th class="p-3 text-sm font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100">
                            Email
                        </th>
                        <th class="p-3 text-sm font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100">
                            Phone
                        </th>
                        <th class="p-3 text-sm font-semibold tracking-wider text-left text-gray-700 uppercase bg-gray-100">
                            City
                        </th>
                        <th class="p-3 text-sm font-semibold tracking-wider text-center text-gray-700 uppercase bg-gray-100">
                            Actions
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-for="contact in contacts.data" :key="contact.id" class="border-t border-gray-200">
                        <td class="p-3 pl-6">
                            <p class="font-medium">
                                {{ contact.name }}
                            </p>
                        </td>
                        <td class="p-3 text-gray-500">
                            {{ contact.email }}
                        </td>
                        <td class="p-3 text-gray-500">
                            {{ contact.phone }}
                        </td>
                        <td class="p-3 text-gray-500">
                            {{ contact.city }}
                        </td>
                        <td class="p-3 text-right">
                            <div class="flex justify-center gap-3">
                                <Link class="inline-flex items-center justify-center px-2 py-1 space-x-2 text-sm font-semibold leading-5 text-gray-800 bg-white border border-gray-300 rounded shadow-sm focus:outline-none hover:text-gray-800 hover:bg-gray-100 hover:border-gray-300 hover:shadow focus:ring focus:ring-gray-500 focus:ring-opacity-25 active:bg-white active:border-white active:shadow-none"
                                    :href="`/contacts/${contact.id}/edit`">
                                    <svg class="inline-block w-4 h-4 hi-solid hi-pencil" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/></svg>
                                    <span>Edit</span>
                                </Link>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-full p-5 border-t lg:p-6 grow" v-if="contacts.links.length > 3">
            <div class="flex flex-wrap -mb-1">
            <template v-for="(link, key) in contacts.links">
                <div v-if="link.url === null" :key="key" class="px-4 py-3 mb-1 mr-1 text-sm leading-4 text-gray-400 border rounded" v-html="link.label" />
                <Link v-else :key="`link-${key}`" class="px-4 py-3 mb-1 mr-1 text-sm leading-4 border rounded focus:text-indigo-500 hover:bg-white focus:border-indigo-500" :class="{ 'bg-white': link.active }" :href="link.url" v-html="link.label" />
            </template>
            </div>
        </div>

    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Layout from '../../Shared/Layout';

export default {
    components: {
        Head,
        Link,
    },
    layout: Layout,
    props : {
        contacts : Object,
    },
}
</script>
