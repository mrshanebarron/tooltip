<template>
  <div
    class="relative inline-block"
    @mouseenter="trigger === 'hover' && (show = true)"
    @mouseleave="trigger === 'hover' && (show = false)"
    @click="trigger === 'click' && (show = !show)"
  >
    <slot></slot>

    <Transition name="tooltip">
      <div
        v-if="show"
        :class="['absolute z-50 px-3 py-2 text-sm text-white bg-gray-900 rounded-lg shadow-lg whitespace-nowrap', positionClass]"
      >
        {{ content }}
        <div :class="['absolute w-2 h-2 bg-gray-900 transform rotate-45', arrowClass]"></div>
      </div>
    </Transition>
  </div>
</template>

<script>
import { ref, computed } from 'vue';

export default {
  name: 'SbTooltip',
  props: {
    content: { type: String, default: '' },
    position: { type: String, default: 'top' },
    trigger: { type: String, default: 'hover' }
  },
  setup(props) {
    const show = ref(false);

    const positions = {
      top: 'bottom-full left-1/2 -translate-x-1/2 mb-2',
      bottom: 'top-full left-1/2 -translate-x-1/2 mt-2',
      left: 'right-full top-1/2 -translate-y-1/2 mr-2',
      right: 'left-full top-1/2 -translate-y-1/2 ml-2'
    };

    const arrows = {
      top: '-bottom-1 left-1/2 -translate-x-1/2',
      bottom: '-top-1 left-1/2 -translate-x-1/2',
      left: '-right-1 top-1/2 -translate-y-1/2',
      right: '-left-1 top-1/2 -translate-y-1/2'
    };

    const positionClass = computed(() => positions[props.position] || positions.top);
    const arrowClass = computed(() => arrows[props.position] || arrows.top);

    return { show, positionClass, arrowClass };
  }
};
</script>

<style scoped>
.tooltip-enter-active, .tooltip-leave-active { transition: opacity 0.15s ease; }
.tooltip-enter-from, .tooltip-leave-to { opacity: 0; }
</style>
