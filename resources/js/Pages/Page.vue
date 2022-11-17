<template>
    <App>
        <section-wrapper :id="'default-page'" v-if="loaded">
            <div class="container ">
                <h1 class="text-xl">{{ title }}</h1>
                <div class="space-y-4" v-html="content"></div>
            </div>
        </section-wrapper>
    </App>
</template>

<script>
import { onBeforeMount, ref} from 'vue';
import SectionWrapper from '../Components/SectionWrapper.vue';
export default {
  components: { SectionWrapper },
  props: ["title", "content",'testdata'],
    setup(props) {
        // provide('custom_field',props.custom_field);

        const loaded = ref(false);


        onBeforeMount(() => {

        });
        return {
            loaded
        }
    },
    mounted() {
        // this.$api.Posts.getPost().then((data) => {
        // });

        this.$nextTick(() => (this.loaded = true));

    },
};
</script>
