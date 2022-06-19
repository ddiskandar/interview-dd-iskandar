<template>
    <div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
        <main id="page-content" class="flex flex-auto flex-col max-w-full">
            <div class="min-h-screen flex items-center justify-center relative overflow-hidden max-w-10xl mx-auto p-4 lg:p-8 w-full">
                <div class="pattern-dots-md text-gray-300 absolute top-0 right-0 w-32 h-32 lg:w-48 lg:h-48 transform translate-x-16 translate-y-16"></div>
                <div class="pattern-dots-md text-gray-300 absolute bottom-0 left-0 w-32 h-32 lg:w-48 lg:h-48 transform -translate-x-16 -translate-y-16"></div>

                <div class="py-6 lg:py-0 w-full md:w-8/12 lg:w-6/12 xl:w-4/12 relative">
                    <div class="flex flex-col rounded shadow-sm bg-white overflow-hidden">
                        <div class="sm:p-5 lg:px-10 lg:py-8">
                            <form @submit.prevent="login" class="space-y-6">
                                <text-input v-model="form.email" :error="form.errors.email" type="email" class="space-y-1" label="Email" />
                                <text-input v-model="form.password" :error="form.errors.password" type="password" class="space-y-1" label="Your New Password" />
                                <text-input v-model="form.password_confirmation" :error="form.errors.password_confirmation" type="password" class="space-y-1" label="Confirm Password" />
                                <div>
                                    <button type="submit" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none w-full px-4 py-3 leading-6 rounded border-indigo-700 bg-indigo-700 text-white hover:text-white hover:bg-indigo-800 hover:border-indigo-800 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import TextInput from '../../../../../../resources/js/Shared/TextInput'

export default {
  components: {
    Head,
    TextInput,
  },
  props: {
    token: String,
    email: String
  },
  data() {
    return {
      form: this.$inertia.form({
        token: this.token,
        email: this.email,
        password: '',
        password_confirmation: ''
      }),
    }
  },
  methods: {
    login() {
      this.form.post('/reset-password')
    },
  },
}
</script>
