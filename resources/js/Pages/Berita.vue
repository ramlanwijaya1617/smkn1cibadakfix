<template>
    <div class="">
       <Headertwo />
        <div class="info relative">
            <img class="w-full img-fluid absolute lg:h-auto sm:h-auto"
                    :src="$attrs.images + 'default/backgroundbanner.png'">
            <!-- <img class="w-full img-fluid absolute lg:h-auto sm:h-auto" src="../assets/image/Frame 171.svg" alt="Responsive image" /> -->
            <div class="container md:px-0 -pt-20 lg:pt-10 relative">
                <p class="text-black text-base lg:text-2xl pt-5 lg:pt-[50px] font-semibold">
                    <small>Kunjungi beberapa berita kami</small>
                </p>
                <div class="flex items-center md:pt-[2%]">
                    <h1 class="text-black text-2xl lg:pt-5 md:pt-3 pt-auto lg:text-4xl font-bold">
                        Berita
                    </h1>
                    <svg-vue icon="Vector berita" class="w-7 lg:w-[60px] pl-3 lg:pl-5 pt-5 lg:pt-[2%]"></svg-vue>
                    <!-- <img class="w-7 md:w-10 lg:w-12 pl-3 lg:pl-5 md:pt-3 pt-2 lg:pt-6"
                        src="../assets/image/Vector berita.svg" alt="" /> -->
                </div>
                <h1 class="mt-10 md:mt-24 lg:mt-[6%] font-bold text-xs lg:text-base text-[#0E1422] hover:text-[#949494]">
                    Home&emsp;&ensp;/&emsp;&ensp;Berita
                </h1>
            </div>

        </div>
        <div class="container md:px-0 pt-10">
            <div class="flex flex-wrap items-center">
                <div class="w-full md:w-1/2">
                    <div class="flex gap-10">
                        <h1 class=" font-bold text-xl lg:text-2xl">
                            Kategori
                        </h1>

                        <button
                            class="bg-[#32B9B9] text-white hover:bg-[#1f6463] lg:text-base text-sm lg:py-2 py-1 px-4 mr-auto flex rounded-3xl">
                            Semua Berita
                            <div class="ml-2">
                                <svg width="24" height="24" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Search -->
                <div class="w-full md:w-1/2">
                    <div class="flex justify-end">
                        <input type="text" class="outline-none px-4 py-2 bg-[#F5F5F5] hover:bg-[#ebe9e9] rounded-l-lg"
                            placeholder="Search..." />
                        <button class="px-2 lg:px-3 items bg-[#F5F5F5] hover:bg-[#ebe9e9] rounded-r-lg">
                            <svg-vue icon="searce tombol" class="sm:mr-3 lg:mr-0 ml-10 h-6"></svg-vue>
                            <!-- <img src="../assets/image/searce tombol.svg" class="sm:mr-3 lg:mr-0 ml-10 h-6" alt="" /> -->
                            <!-- <svg class="w-5 h-5 lg:w-6 lg:h-6 text-t [#d4cece]" fill="currentColor">
                                <path
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                <path />
                            </svg> -->
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Search -->
            <div>
                <h1 class="mt-5 lg:mt-10 font-bold text-xl lg:text-2xl">
                    Hot news
                </h1>
            </div>

            <div class="flex justify-center lg:mt-10 mt-5 mb-6 bg-[#F5F5F5] rounded-lg">
                <div class="flex flex-col lg:flex-row">
                    <div
                        class="flex flex-col p-[20px] md:pl-[33px] md:pr-[40px] md:pb-[64px] md:pt-[63px] justify-start mt-auto">
                        <h5
                            class="text-black text-xl lg:text-2xl font-semibold lg:font-bold lg:mb-10 mb-4 hover:text-[#33b3b3]">
                            Cargo Udara Sebagai Lorem ipsum dolor sit amet, consectetur
                        </h5>
                        <p class="text-[#646464] text-sm lg:text-lg -mb-2 lg:mb-4 max-w-4xl">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus dolor nulla, vel
                            iaculis felis suscipit vitae. Donec imperdiet ex sed tortor aliquam congue. Pellentesque at
                            luctus nulla, at ultricies dolor.
                        </p>
                        <div class="flex justify-between lg:text-sm text-xs text-[#969696] lg:mt-16 mt-6">
                            <p>1, Mar 2021</p>
                            <p>Admin</p>
                        </div>
                    </div>
                    <img class="hover:animate-pulse w-auto lg:w-[45%] h-[100%]"
                        :src="$attrs.images + 'default/imageinformasi.png'">
                    <!-- <img class="hover:animate-pulse" src="../assets/image/unsplash_berita.svg"
                        alt="" /> -->
                </div>
            </div>

           
            <div>
                <h1 class="mt-5 lg:mt-10 pb-5 lg:pb-0 pt-3 ml-auto  font-bold text-xl lg:text-2xl">
                    Berita Sekolah
                </h1>
            </div>

            <div class="lg:flex gap-4 lg:gap-[60px]">
                <div class="flex flex-col lg:py-10 lg:w-2/3">
                    <div class="grid md:grid-cols-2 gap-[45px] pb-7">
                        <div v-for="n in 6" :key="n" class="rounded overflow-hidden row">
                            <img class="hover:animate-pulse w-[100%]" :src="$attrs.images + 'default/imageberita.png'">
                            <!-- <img class="hover:animate-pulse w-[100%]" src="../assets/image/berita 6.svg" alt="" /> -->
                            <div class="px-auto lg:py-4 text-justify">
                                <div class="font-semibold lg:font-bold lg:text-2xl text-base my-2 hover:text-[#33b3b3]">
                                    Belajar Dirumah
                                </div>
                                <p class="text-[#969696] lg:text-sm text-xs text-left">
                                    Lorem ipsum dolor sit amet, consectetur Maecenas et velit sem.
                                    Sambutan Kepala Sekolah SMP Negeri 1 Cibadak
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

                <div class="W-1/3 lg:ml-5 lg:mt-4">
                    <h1 class=" font-bold text-xl">
                        Umum
                    </h1>
                    <div class="flex flex-col lg:flex-row rounded justify-between mt-4">
                        <img class="w-auto h-auto lg:w-40 lg:h-32 hover:animate-pulse"
                            :src="$attrs.images + 'default/imageumum1.png'">
                        <!-- <img class="w-24 h-20 lg:w-40 lg:h-32 hover:animate-pulse" src="../assets/image/mobil.svg"
                            alt="" /> -->
                        <div class="lg:ml-2 ml-0 py-2 justify-between">
                            <p class="text-black text-xs lg:text-sm lg:ml-1 lg:w-44 w-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vitae enim
                            </p>
                            <div class="flex justify-between lg:text-sm text-xs text-[#747272] mt-3 lg:ml-2">
                                <p>Admin</p>
                                <p>1 jan, 2021</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row rounded justify-between mt-3">
                        <img class="w-auto h-auto lg:w-40 lg:h-32 hover:animate-pulse"
                            :src="$attrs.images + 'default/imageumum2.png'">
                        <!-- <img class="w-24 h-20 lg:w-40 lg:h-32 hover:animate-pulse" src="../assets/image/gambar2.svg"
                            alt="" /> -->
                        <div class="lg:ml-2 ml-0 py-2 justify-between">
                            <p class="text-black text-xs lg:text-sm lg:ml-1 lg:w-44 w-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vitae enim
                            </p>
                            <div class="flex justify-between text-sm text-[#747272] mt-3 lg:ml-2">
                                <p>Admin</p>
                                <p>23 Mar, 2021</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row rounded justify-between mt-3">
                        <img class="w-auto h-auto lg:w-40 lg:h-32 hover:animate-pulse"
                            :src="$attrs.images + 'default/imageumum3.png'">
                        <!-- <img class="w-24 h-20 lg:w-40 lg:h-32 hover:animate-pulse" src="../assets/image/gambar 3.svg"
                            alt="" /> -->
                        <div class="lg:ml-2 ml-0 py-2 justify-between">
                            <p class="text-black text-xs lg:text-sm lg:ml-1 lg:w-44 w-auto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                vitae enim
                            </p>
                            <div class="flex justify-between lg:text-sm text-xs text-[#747272] mt-3 lg:ml-2">
                                <p>Admin</p>
                                <p>13 Mar, 2021</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container md:px-0 mt-[6%] mb-[10%] md:mt-[0] md:mb-[0]">
            <button
                class="bg-[#06918D] text-white hover:bg-[#1f6463] text-base font-bold flex mx-auto md:px-[56px] md:py-[16px] px-[25px] py-[9px]">
                Load more
            </button>
        </div>
        <Footer />
    </div>
</template>
<script>
import Footer from "./Footer.vue";
import Headertwo from "./Headertwo.vue";
export default {
    components: {
    Headertwo,
    Footer
}
}
</script>