<template>
    <Head title="Create Contact" />

    <div class="md:flex md:space-x-5">
        <div class="text-center md:flex-none md:w-1/3 md:text-left">
            <h3 class="flex items-center justify-center mb-1 space-x-2 font-semibold md:justify-start">
                <span>Create new contact</span>
            </h3>
            <p class="mb-5 text-sm text-gray-500"></p>
        </div>
        <div class="flex flex-col overflow-hidden bg-white rounded shadow-sm md:w-2/3">
            <div class="w-full p-5 lg:p-6 grow">
                <form @submit.prevent="store" class="space-y-6">
                    <div class="space-y-6 sm:space-y-0 sm:flex sm:space-x-3">
                        <text-input v-model="form.first_name" :error="form.errors.first_name" class="space-y-1 grow" label="First name" />
                        <text-input v-model="form.last_name" :error="form.errors.last_name" class="space-y-1 grow" label="Last name" />
                    </div>
                    <div class="space-y-6 sm:space-y-0 sm:flex sm:space-x-3">
                        <text-input v-model="form.email" :error="form.errors.email" type="email" class="space-y-1 grow" label="Email" />
                        <text-input v-model="form.phone" :error="form.errors.phone" class="space-y-1 grow" label="Phone" />
                    </div>
                    <div class="space-y-1">
                        <text-input v-model="form.address" :error="form.errors.address" class="space-y-1 grow" label="Address" />
                    </div>
                    <div class="space-y-6 sm:space-y-0 sm:flex sm:space-x-3">
                        <text-input v-model="form.city" :error="form.errors.city" class="space-y-1 grow" label="City" />
                        <text-input v-model="form.region" :error="form.errors.region" class="space-y-1 grow" label="Region" />
                    </div>
                    <div class="space-y-6 sm:space-y-0 sm:flex sm:space-x-3">
                        <text-input v-model="form.country" :error="form.errors.country" class="space-y-1 sm:w-2/3" label="Country" />
                        <text-input v-model="form.postal_code" :error="form.errors.postal_code" class="space-y-1 sm:w-1/3" label="Postal" />
                    </div>
                    <primary-button :loading="form.processing" type="submit">Create Contact</primary-button>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '../../../../../../resources/js/Shared/Layout'
import TextInput from '../../../../../../resources/js/Shared/TextInput'
import PrimaryButton from '../../../../../../resources/js/Shared/PrimaryButton'

export default {
    components: {
        Head,
        TextInput,
        PrimaryButton
    },
    layout: Layout,
    data() {
        return {
            form: this.$inertia.form({
                first_name: '',
                last_name: '',
                email: '',
                phone: '',
                address: '',
                city: '',
                region: '',
                country: '',
                postal_code: '',
            }),
        }
    },
    methods: {
        store() {
            this.form.post('/contact')
        },
    },
}
</script>
