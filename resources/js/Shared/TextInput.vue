<template>
    <div :class="$attrs.class">
        <label v-if="label" class="font-medium">{{ label }}</label>
        <input ref="input" v-bind="{ ...$attrs, class: null }" class="block w-full px-3 py-2 leading-6 border border-gray-200 rounded focus:border-indigo-500" :class="{ error: error }" :type="type" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)">
        <p v-if="error" class="text-sm text-red-600">
            {{ error }}
        </p>
    </div>
</template>

<script>
export default {
  inheritAttrs: false,
  props: {
    type: {
      type: String,
      default: 'text',
    },
    error: String,
    label: String,
    modelValue: String,
  },
  emits: ['update:modelValue'],
}
</script>
