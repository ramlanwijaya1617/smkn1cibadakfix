<template>
    <transition name="fade" :duration="600" tag="section">
        <section class="section-wrapper" :id="id ? id : null">
            <slot />
        </section>
    </transition>
</template>
<script>
    export default {
        name: "SectionWrapper",
        props: {
            id: {
                type: String,
                default: false,
            },
        }

    }

</script>
<style lang="scss" scoped>

</style>
