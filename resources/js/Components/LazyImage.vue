<template>
    <figure v-lazyload class="image__wrapper" :class="lazyClass" :style="{ 'max-width': width, 'max-height': height, height: height }">
        <div class="image__spinner w-full h-full absolute inline-flex items-center justify-center">
            <svg class="animate-spin h-8 w-8 text-slate-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
        </div>

        <img class="image__item" :height="height" :width="width" :class="animation ? 'animation ' + className : className" :data-url="src" :alt="alt" />
    </figure>
</template>

<script>
    export default {
        name: "LazyImage",
        props: {
            lazyClass: {
                type: String,
                default: null,
            },
            className: {
                type: String,
                default: null,
            },
            src: {
                type: String,
                required: true,
            },
            alt: {
                type: String,
                required: true,
            },
            height: {
                type: String,
                default: "100%",
            },
            width: {
                type: String,
                default: "inherit",
            },
            animation:{
                type:Boolean,
                default: false,
            }
        },
    };

</script>

<style lang="scss" scoped>
    .image {
        &__wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background: transparent;
            transition: all 0.7s ease-in-out;

            &.loaded {
                .image {
                    &__item {
                        visibility: visible;
                        opacity: 1;
                        border: 0;
                    }

                    &__spinner {
                        display: none;
                        width: 100%;
                    }
                }
            }
        }

        &__item {
            width: 100%;
            transition: all 0.7s ease-in-out;
            opacity: 0;
            visibility: hidden;
        }
    }
    .image__wrapper{
        overflow: hidden;
    }
    .animation.image__item:hover{
        transform: scale(1.1);
    }

</style>
