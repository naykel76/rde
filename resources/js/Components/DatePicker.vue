<template>
  <datepicker v-model="picked" inputFormat="dd-MM-yyyy" />
</template>

<script>
import { ref, toRefs } from "vue";
import Datepicker from "vue3-datepicker";


export default {
  components: { Datepicker },
  props: ['current'],
  setup(props) {
    const picked = ref(new Date(props.current));
    return {
      picked,
    };
  },
};
</script>

