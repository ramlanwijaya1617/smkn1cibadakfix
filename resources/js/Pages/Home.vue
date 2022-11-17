<template>
    <App>
        <div class="">
            <!-- Jumbotron -->
            <div class="relative">
                <div class="w-full h-full absolute bg-black z-40 opacity-30">
                </div>
                <img class="sm:h-64 h-full w-full sm:w-full lg:w-full lg:h-full absolute sm:object-cover sm:object-center lg:object-cover lg:object-center"
                    :src="$attrs.images + 'default/Rectangle20.png'">
                <div class="content relative z-50 pb-[72px] lg:py-72">
                    <div class="">
                        <h1
                            class="font-bold lg:text-5xl text-3xl text-center sm:text-center lg:text-center pt-10 text-white lg:text-white xl:text-white">
                            Selamat Datang</h1>
                        <h1 class="font-bold text-2xl lg:text-4xl xl:text-5xl text-center mt-1 lg:pt-6 text-white">di
                            Web
                            SMKN 1
                            Cibadak Kabupaten Sukabumi</h1>
                    </div>
                    <div class="text-sm text-center lg:mt-5xl lg:pt-7 text-white">
                        <p>Sukseskan BLUD SMKN 1 Cibadak! Bersama-sama membangun SMK, untuk membentuk generasi penerus
                            mandiri,
                            cermat, sigap,<br>siap kerja dan siap usaha</p>
                    </div>
                </div>
            </div>
            <!-- End Jumbotron -->
            <!-- Pengumuman -->
            <div class="info bg-[#13A2A2]">
                <div class="container text-center lg:pt-8 pt-7 lg:pb-10 pb-7 md:px-0">
                    <h1 class="text-white text-base lg:text-lg mb-3 font-semibold lg:font-bold">Pengumuman</h1>
                    <p class="text-white text-sm lg:text-base text-center lg:mx-64 mx-auto"><small>Sukseskan BLUD SMKN 1
                            Cibadak! Bersama- sama membangun SMK, untuk membentuk generasi penerus mandiri, cermat,
                            sigap,siap kerja dan siap usaha</small></p>
                </div>
            </div>
            <!-- End Pengumuman -->

            <!-- Info -->
            <div class="">
                <div class="pt-8 lg:pt-8 pb-8 bg-[#F9F9F9]">
                    <div class="container flex grid-cols-2 justify-center md:px-0">
                        <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-8">
                            <img class="gallery1 object-center rounded-lg my-auto"
                                :src="$attrs.images + 'default/image16.png'">
                            <img class="gallery1 object-center rounded-lg my-auto"
                                :src="$attrs.images + 'default/image17.png'">
                            <img class="gallery1 object-center rounded-lg my-auto"
                                :src="$attrs.images + 'default/image18.png'">
                            <img class="gallery1 object-center rounded-lg my-auto"
                                :src="$attrs.images + 'default/image16.png'">
                            <img class="gallery1 object-center rounded-lg my-auto"
                                :src="$attrs.images + 'default/image17.png'">
                            <img class="gallery1 object-center rounded-lg my-auto"
                                :src="$attrs.images + 'default/image18.png'">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Info -->

            <!-- Card -->
            <div class="container mt-2 lg:mt-0 md:px-0">
                <div class="flex justify-center lg:mt-16 mb-6 -mt-20">
                    <div class="flex flex-col lg:flex-row md:w-[100%]">
                        <div class="flex flex-col justify-start mt-28 mb-8 lg:mb-0">
                            <h5
                                class="text-black lg:text-4xl text-3xl font-semibold  lg:font-bold mb-5 hover:text-[#33b3b3]">
                                SMK Negeri
                                1 Cibadak</h5>
                            <p class="faragraf1 text-[#646464] lg:text-sm text-xs -mb-2 lg:mb-4 leading-7">
                                Video detail SMKN 1 Cibadak Lorem ipsum dolor sit amet, consectetur adipiscing
                                ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                        <img class="lg:w-auto lg:h-[351px] lg:ml-[80px] hover:animate-pulse"
                            :src="$attrs.images + 'default/image2.png'">
                    </div>
                </div>
                <div class="flex justify-center mt:10 lg:mt-0 mb-6">
                    <div class="flex flex-col lg:flex-row md:w-[100%]">
                        <img class=" w-auto lg:h-[351px] rounded-2xl hover:animate-pulse mb-7 lg:mb-0"
                            :src="$attrs.images + 'default/image1.png'">
                        <div class="flex flex-col justify-start lg:mt-16 lg:ml-24">
                            <h5
                                class="faragraf2 text-black leading-relaxed lg:text-4xl text-3xl font-semibold lg:font-bold mb-5 hover:text-[#33b3b3]">
                                Sambutan
                                Kepala Sekolah
                                SMKN 1 Cibadak</h5>
                            <p class="faragraf3 text-[#646464] lg:text-sm text-xs mb-4">
                                Puji dan syukur mari kita panjatkan kehadirat Allah SWT. Yang senantiasa dengan sifat
                                kasih
                                dan sayangnya banyak memberikan nikmat”
                            </p>
                            <p class="text-end lg:pt-5 pt-2 text-[#646464] text-xs">Drs. Juanda, M.Si</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card Berita -->
            <div class="container md:px-0">
                <div class="grid grid-cols-2 lg:pt-20 pt-8 pb-8">
                    <h1 class="font-bold text-start text-4xl text-[#0E1422]">Berita</h1>
                    <p class="text-end text-[#646464] text-xs justify-self-end"> Berikut ini merupakan berita berita yang ada di Smk
                        Negeri 1 Cibadak </p>
                </div>
                <!-- Search -->
                <div class="flex">
                    <input type="text"
                        class="outline-none px-4 py-2 w-338px h-48px bg-[#F5F5F5] hover:bg-[#F5F5F5] rounded-l-lg "
                        placeholder="Search...">
                    <button class="items pl-[5%] pr-[1%] bg-[#F5F5F5] hover:bg-[#F5F5F5] rounded-r-lg">

                        <!-- <img src="../assets/image/searce tombol.svg" class="sm:mr-3 ml-10 h-6" alt="" /> -->
                        <svg class="w-6 h-6 text-[#B6B6B6]" fill="currentColor">
                            <path
                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            <path />
                        </svg>
                    </button>
                </div>
                <!-- End Search -->
            </div>

            <div class="container pt-10 lg:pb-10 pb-0 md:px-0">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 lg:gap-8 gap-2">
                    <div v-for="n in 6" :key="n" class="lg:w-[100%] rounded overflow-hidden row lg:mr-auto">
                        <img class="w-full hover:animate-pulse" :src="$attrs.images + 'default/imageberita.png'">
                        <div class="px-auto py-4 ">
                            <div class="font-semibold lg:font-bold lg:text-2xl text-xl mb-2 text-[#0E1422] hover:text-[#33b3b3]">
                                Belajar
                                Dirumah
                            </div>
                            <p class="text-[#969696] text-sm lg:w-[74%] w-[auto]">
                                Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem. Sambutan Kepala Sekolah
                                SMP
                                Negeri 1 Cibadak
                            </p>
                            <div class="flex justify-between">
                                <p class="lg:text-sm text-xs text-end [#3b3a3a] pt-3 hover:text-[#646464]">
                                    20 Juni 2022
                                </p>
                                <p class="lg:text-sm text-xs text-start [#3b3a3a] pt-3 hover:text-[#646464]">
                                    Arsali12
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Berita -->

            <!-- Banner -->
            <div class="container md:px-0 pb-10 lg:pb-16 mt-5">
                <button
                    class="bg-[#06918D] text-white hover:bg-[#1f6463] text-base font-bold lg:py-2.5 py-2 lg:px-8 px-6 flex mx-auto pb-3">
                    See more
                </button>
            </div>
            <div class="info relative">
                <img class="w-full h-full absolute" :src="$attrs.images + 'default/imagebanner.png'">
                <div class=" container text-center relative p-8 lg:p-28 px-0">
                    <h1 class="banner text-white text-2xl lg:text-3xl mb-5 font-normal mx-auto">“ Satu-satunya cara
                        untuk
                        melakukan pekerjaan hebat
                        adalah CINTAI apa yang anda lakukan “</h1>
                    <p class="text-white text-sm lg:text-base  italic font-semibold"><small>STEVE JOBS</small></p>
                    <p class="text-black text-sm lg:text-base  italic font-bold"><small>Mantan CEO Apple Inc.</small>
                    </p>
                </div>
            </div>
            <!-- End Banner -->

            <!-- Gallery -->
            <div class="galery font-bold text-center lg:mb-3 mb-0 lg:mt-16 mt-10">
                <h1 class="md:text-4xl text-[35px] text-[#0E1422]">Gallery</h1>
            </div>
            <section class="overflow-hidden">
                <div class="container md:px-0">
                    <div class="card1 grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 pt-5">
                        <div class="w-full">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery1.png'">
                        </div>
                        <div class="w-full ">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery3.png'">
                        </div>
                        <div class="w-full ">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery2.png'">
                        </div>
                        <div class="w-full">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery1.png'">
                        </div>
                        <div class="w-full ">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery3.png'">
                        </div>
                        <div class="w-full ">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery2.png'">
                        </div>
                        <div class="w-full">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery1.png'">
                        </div>
                        <div class="w-full ">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery3.png'">
                        </div>
                        <div class="w-full ">
                            <img class="gallery block object-center w-full h-full hover:scale-95 duration-300"
                                :src="$attrs.images + 'default/imagegalery2.png'">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Gallery -->
        </div>

    </App>
</template>
<script>
import Headertwo from "./Headertwo.vue";
export default {
    components: {
        Headertwo
    }
}
</script>
<style>
.gallery1 {
    filter: grayscale(73%) sepia(51%) saturate(80%) opacity(73%) contrast(80%) invert(9%);
    -webkit-filter: grayscale(73%) sepia(51%) saturate(80%) opacity(73%) contrast(80%) invert(9%);
    -moz-filter: grayscale(73%) sepia(51%) saturate(80%) opacity(73%) contrast(80%) invert(9%);
    transition: 0.5s;
    width: 100%;
}

.gallery1:hover {
    filter: none;
}

.faragraf1 {
    line-height: 26px;
}

.faragraf2 {
    line-height: 1.5;
}

.faragraf3 {
    line-height: 26px;
}

/* .banner {
    @apply sm:text-28px xl:text-4xl xl:leading-60px;
}

.galery {
    @apply sm:text-28px xl:text-40px;
} */

.card1 {
    gap: 24px;
}
</style>


