<script setup lang="ts">
import { ref } from 'vue'

interface Props {
  text: string
  position?: 'top' | 'bottom' | 'left' | 'right'
  delay?: number
  arrow?: boolean
}

const props = withDefaults(defineProps<Props>(), {
  position: 'top',
  delay: 0,
  arrow: true,
})

const show = ref(false)
let timeout: ReturnType<typeof setTimeout>

function onMouseEnter() {
  timeout = setTimeout(() => { show.value = true }, props.delay)
}

function onMouseLeave() {
  clearTimeout(timeout)
  show.value = false
}

const positionClasses: Record<string, string> = {
  top: 'bottom-full left-1/2 -translate-x-1/2 mb-2',
  bottom: 'top-full left-1/2 -translate-x-1/2 mt-2',
  left: 'right-full top-1/2 -translate-y-1/2 mr-2',
  right: 'left-full top-1/2 -translate-y-1/2 ml-2',
}

const arrowClasses: Record<string, string> = {
  top: 'top-full left-1/2 -translate-x-1/2 -mt-1',
  bottom: 'bottom-full left-1/2 -translate-x-1/2 -mb-1',
  left: 'left-full top-1/2 -translate-y-1/2 -ml-1',
  right: 'right-full top-1/2 -translate-y-1/2 -mr-1',
}
</script>

<template>
  <div class="relative inline-block" @mouseenter="onMouseEnter" @mouseleave="onMouseLeave">
    <slot />
    <Transition
      enter-active-class="transition ease-out duration-150"
      enter-from-class="opacity-0 scale-95"
      enter-to-class="opacity-100 scale-100"
      leave-active-class="transition ease-in duration-100"
      leave-from-class="opacity-100 scale-100"
      leave-to-class="opacity-0 scale-95"
    >
      <div
        v-show="show"
        :class="['absolute z-50 px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm whitespace-nowrap', positionClasses[position]]"
      >
        {{ text }}
        <div v-if="arrow" :class="['absolute w-2 h-2 bg-gray-900 transform rotate-45', arrowClasses[position]]" />
      </div>
    </Transition>
  </div>
</template>
