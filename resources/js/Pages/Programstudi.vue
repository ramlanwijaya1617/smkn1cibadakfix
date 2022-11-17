<template>
    <div>
        <Headertwo />
        <div class="programstudi1">
            <div class="info relative">
                <img class="w-full img-fluid absolute lg:h-auto sm:h-auto"
                    :src="$attrs.images + 'default/backgroundbanner.png'">
                <div class="container md:px-0">
                    <div class="-pt-20 lg:pt-[50px] relative">
                        <p class="text-black text-base lg:text-2xl pt-5 lg:pt-14 font-semibold">
                            <small>Jurusan - Jurusan SMKN 1 Cibadak</small>
                        </p>
                        <div class="flex items-center">
                            <h1 class="text-black text-2xl lg:pt-5 pt-3 lg:text-4xl font-bold">
                                Program Studi
                            </h1>
                            <svg-vue icon="Vectorps" class="w-7 lg:w-[60px] pl-3 lg:pl-5 pt-5 lg:pt-[1%]"></svg-vue>
                        </div>
                        <h1 class="mt-8 lg:mt-[80px] font-bold text-xs lg:text-base text-[#0E1422] hover:text-[#949494]">
                            Home&emsp;&ensp;/&emsp;&ensp;Program Studi
                        </h1>
                        <h1 class="text-black lg:pt-8 pt-5 mb-4 lg:mb-6 lg:text-4xl text-2xl font-bold">
                            Jurusan - Jurusan di SMKN 1 Cibadak
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Jurusan -->
            <section class="overflow-hidden">
                <div class="container md:px-0 flex-col h-full w-full">
                    <div class="">
                        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-col-1 gap-6">
                            <a v-for="(item, index) in prodi" :key="index"
                                class="w-full relative rounded-lg rounded-b-2xl overflow-hidden">
                                <img class="block object-cover object-center w-full h-full"
                                    :src="$attrs.images + 'default/Frame1.png'">
                                <a href="/Programstuditwo"
                                    style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.8) 100%);"
                                    class="absolute bottom-0 left-0 w-full hover:text-[#67f5f5] no-underline px-6 pb-6 text-white font-semibold">{{ item.title }}
                                </a>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Jurusan -->
            <Footer />
        </div>
    </div>
</template>
<script>
// import Footer from "../components/Footer.vue"
import Footer from "./Footer.vue";
import Headertwo from "./Headertwo.vue";
export default {
    data() {
        return {
            prodi: [
                {
                    "image": "../assets/image/fto1.svg",
                    "title": "Pengawasan Mutu Hasil Pertanian / Agriteknologi Pertanian",
                },
                {
                    "title": "Agribisnis Pengolahan Hasil Pertanian / Agriteknologi Pertanian",
                },
                {
                    "title": "Agribisnis Tanaman Pangan dan Holtikultura / Agribisnis Pertanian",
                },
                {
                    "title": "Agribisnis Ternak Ruminansia / Agribisnis Ternak",
                },
                {
                    "title": "Agribisnis Ternak Unggas / Agribisnis Ternak",
                },
                {
                    "title": "Agribisnis Perikanan Air Tawar / Agribisnis Perikanan",
                },
                {
                    "title": "Multimedia / Desain Komunikasi Visual",
                },
                {
                    "title": "Agroindustri / Agriteknologi Pertanian",
                },
            ]
        };
    },
    components: { Headertwo, Footer }
}
</script>
