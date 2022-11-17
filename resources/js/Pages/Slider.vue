<template>
  <div class="container px-0 mt-[20px]">
    <Carousel :settings="settings" :breakpoints="breakpoints">
      <Slide v-for="slide in 10" :key="slide">
        <div class="px-3">
          <div class="flex flex-nowrap-0 relative">
            <img class="object-cover object-center w-full rounded-2xl"
              :src="$attrs.images + 'default/imageproramsttwo.png'">
            <div class="absolute w-full h-full p-6">
              <p class="text-base leading-4 lg:leading-5 text-white hover:text-[#67f5f5]">
                Pengawasan Mutu
                Hasil Pertanian / Agriteknologi Pertanian</p>
            </div>
          </div>
        </div>
      </Slide>
      <template #addons>
        <Navigation />
      </template>
    </Carousel>
  </div>

</template>
<style>
.carousel__prev,
.carousel__next {
  background-color: #32B9B9;
  border-radius: initial !important;
}
</style>

<script>
import { defineComponent } from 'vue'
import { Carousel, Navigation, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'
export default defineComponent({
  name: 'Breakpoints',
  components: {
    Carousel,
    Slide,
    Navigation,
  },
  data: () => ({
    // carousel settings
    settings: {
      itemsToShow: 1,
      snapAlign: 'center',
    },
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {
      // 700px and up
      700: {
        itemsToShow: 2,
        snapAlign: 'center',
      },
      // 1024 and up
      1024: {
        itemsToShow: 4,
        snapAlign: 'start',
      },
    },
  }),
})
</script>



