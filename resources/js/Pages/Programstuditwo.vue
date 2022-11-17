
<template>
    <div>
        <Headertwo />
        <div class="programstudi2">
            <div class="info relative">
                <img class="w-full img-fluid absolute lg:h-auto sm:h-auto"
                    :src="$attrs.images + 'default/backgroundbanner.png'">
                <div class="container md:px-0">
                    <div class="flex">
                        <div class="-pt-20 lg:pt-16 relative">
                            <p class="text-black text-base lg:text-2xl pt-[20px] lg:pt-[30px] font-semibold relative">
                                <small>Jurusan - Jurusan SMKN 1 Cibadak</small>
                            </p>
                            <div class="flex items-center">
                                <h1 class="text-black lg:text-4xl text-2xl lg:pt-5 pt-2 font-bold">
                                    Program Studi
                                </h1>
                                <svg-vue icon="Vectorps" class="w-7 lg:w-[60px] pl-3 lg:pl-5 pt-5 lg:pt-[5%]"></svg-vue>
                                <!-- <img class="w-9 lg:w-12 pl-3 lg:pl-5 pt-2 lg:pt-6" src="../assets/image/Vector ps.svg"
                                    alt="" /> -->
                            </div>
                            <h1 class="mt-5 lg:mt-24 font-bold text-xs lg:text-base text-[#0E1422] hover:text-[#949494]">
                                Home&emsp;&ensp;/&emsp;&ensp;Program Studi
                            </h1>
                        </div>
                        <div class="ml-[10%] md:ml-[39%]">
                            <h1
                                class="text-black text-xs lg:text-2xl font-bold absolute lg:pt-[110px] pt-[32px] ml-auto">
                                Pengawasan Mutu Hasil Pertanian / Agriteknologi Pertanian
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-0 mt-[4%] mb-[4%] lg:mt-[3%] lg:mb-[3%]">
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
            <!-- End slider -->
            <div class="container md:px-0">
                <h1 class="text-black lg:text-4xl text-2xl lg:pt-2 pt-3 font-bold">
                    Profile Jurusan
                </h1>

                <div class="lg:pt-10 pt-5 grid lg:grid-cols-2 grid-cols-1">
                    <div class="">
                        <p class="text-black text-xs lg:text-lg lg:max-w-xl font-medium lg:mr-5 mr-0">
                            <small>
                                <p>
                                    Program Studi Keahlian Teknologi Pengolahan Hasil Pertanian
                                    mengadakan program diklat dan keahlian guna menghasilkan
                                    tenaga kerja unggulan yang memiliki sikap, pengetahuan serta
                                    keterampilan yang baik untuk beradaptasi dalam berbagai
                                    bidang pekerjaan di tingkat menengah. Program pelatihan yang
                                    ditawarkan antara lain:
                                </p>
                                <br>
                                <p>
                                    Pengolahan komoditas serealia dan kacang-kacangan <br />
                                    Pengolahan komoditas umbi-umbian <br />
                                    Pengolahan buah dan sayur <br />
                                    Pengolahan ikan, telur, susu dan daging <br />
                                    Pengolahan produk nata de coco, cocktail cup, minuman <br />
                                    SMK Negeri 1 Cibadak khususnya Program studi keahlian
                                    Teknologi pengolah hasil pertanian melalui unit Bogasari
                                    baking Centre (BBC) dan didukung dengan fasilitas
                                    laboratorium uji mutu memberikan pelayanan konsultasi mulai
                                    dari analisa bahan sampai potensi bisnis bagi para industry
                                    makanan dan minuman (Usaha Kecil Menengah), industry minuman
                                    dalam kemasan dan industry lainnya yang relevan. Selain itu
                                    memiliki 4 unit peralatan produksi yang didesain seperti
                                    pabrik mini (pilot plan), yaitu unit roti, makanan ringan,
                                    minuman dan pengalengan. Produk-produk unggulan yang
                                    dihasilkan dari program studi Teknologi Pengolahan Hasil
                                    Pertanian adalah:
                                </p>
                                <br>
                                <pre class="font-sans">
        •  Roti
        •  Yogurt
        •  Cordyal sirup
        •  Sari Buah
        •  Selai buah
        •  Nata de coco </pre>

                                <p>Program Studi Keahlian Teknologi Pengolahan Hasil Pertanian dilengkapi dengan
                                    berbagai peralatan standar pengolahan roti, peralatan pengolahan makanan ringan,
                                    peralatan pengolahan ikan dan daging (pengalengan), peralatan pengolahan minuman
                                    dan peralatan pengujian mutu yang di instalasi dalam satu unit bangunan khusus
                                    dan terintegrasi untuk pelatihan, produksi dan pengujian. Pada pengelola partner
                                    IGI SMK Negeri 1 Cibadak telah dididik berbagai jenis pelatihan khususnya
                                    manajemen pengembangan, kewirausahaan, skunting, produksi, pengujian mutu dan
                                    pemasaran.
                                    <br> Program studi keahlian Teknologi Pengolahan Hasil pertanian menjalin
                                    kerjasama dengan beberapa institusi dan perusahaan dalam bidang agriindustri,
                                    antara lain:
                                </p>
                                <br>
                                <p>
                                <pre class="font-sans">
        •  Indofood Sukses Makmur Tbk
        •  Bogasari Baking Centre (BBC)
        •  Lembaga Sertifikasi THP Institut Pertanian Bogor
        •  Mum Bakery and Cake House, Brunei Darussalam
        •  Bogasari PT
        •  Indolakto PT
        •  Milkco PT
        •  Zehat International PT
</pre>
                        </p>
                        <p>Beberapa perusahaan/industry telah bekerjasama pada kegiatan pengujian antara lain
                            dijelaskan pada tabel di bawah ini. </p><br>

                        <p>Tabel 19. Daftar Perusahaan/industri yang menggunakan Jasa Pengujian di Laboratorium
                            Pengawasan Mutu SMK Negeri I Cibadak
                        </p>
                        </small>
                        </p>
                    </div>
                    <div class="mt-[5%] lg:mt-0">
                        <img class="hover:animate-pulse lg:ml-[62px] col-span-2 lg:max-w-xl md:w-[100%]"
                            :src="$attrs.images + 'default/imageps1.png'">
                        <img class="hover:animate-pulse lg:ml-[62px] col-span-2 lg:max-w-xl md:w-[100%] pt-10"
                            :src="$attrs.images + 'default/imageps2.png'">
                    </div>
                </div>
            </div>

            <div class="container md:px-0">
                <div class="mt-5 lg:mt-14 lg:mb-20">
                    <table class="table-auto w-full text-sm lg:text-base font-medium">
                        <thead>
                            <tr class="h-10 lg:h-14 text-left">
                                <th class="text-white text-start pl-3 lg:pl-4 bg-[#13A1A1] text-sm lg:text-lg">
                                    Asal Contoh
                                </th>
                                <th class="text-white text-start bg-[#13A1A1] text-sm lg:text-lg">
                                    Jenis Sample
                                </th>
                                <th class="text-white text-start bg-[#13A1A1] text-sm lg:text-lg">
                                    Tahun
                                </th>
                                <th class="text-white text-start bg-[#13A1A1] text-sm lg:text-lg">
                                    Jenis Analisa
                                </th>
                                <th class="bg-[#13A1A1]"></th>
                            </tr>
                        </thead>
                        <tbody class="lg:text-sm text-xs">
                            <tr class="h-10 lg:h-14">
                                <td class="pl-3 lg:pl-4 bg-[#EDFFFF]">PT. Alam aneka aroma</td>
                                <td class="bg-[#EDFFFF]">Asam asetat</td>
                                <td class="bg-[#EDFFFF]">2007</td>
                                <td class="bg-[#EDFFFF]">Derajat asam</td>
                            </tr>
                            <tr class="h-10 lg:h-14">
                                <td class="pl-3 lg:pl-4 bg-[#72DFDF]">Dinas Peternakan Kab. Sukabumi</td>
                                <td class="bg-[#72DFDF]">Daging ayam</td>
                                <td class="bg-[#72DFDF]">2007</td>
                                <td class="bg-[#72DFDF]">Fomalin</td>
                            </tr>
                            <tr class="h-10 lg:h-14">
                                <td class="pl-3 lg:pl-4 bg-[#EDFFFF]">
                                    Disperindag Kab. Sukabumi
                                </td>
                                <td class="mr-20 bg-[#EDFFFF]">Ikan asin, manisan</td>
                                <td class="mr-20 bg-[#EDFFFF]">2007</td>
                                <td class="mr-20 bg-[#EDFFFF]">Formalin</td>
                            </tr>
                            <tr class="h-10 lg:h-14">
                                <td class="pl-3 lg:pl-4 bg-[#72DFDF]">Balai Penelitian Kelapa</td>
                                <td class="bg-[#72DFDF]">Kelapa parut</td>
                                <td class="bg-[#72DFDF]">2008</td>
                                <td class="bg-[#72DFDF]">Lemak, Serat kasar</td>
                            </tr>
                            <tr class="h-10 lg:h-14">
                                <td class="pl-3 lg:pl-4 bg-[#EDFFFF]">
                                    PT. Alam Aneka Aroma
                                </td>
                                <td class="mr-20 bg-[#EDFFFF]">Gula merah</td>
                                <td class="mr-20 bg-[#EDFFFF]">2008</td>
                                <td class="mr-20 bg-[#EDFFFF]">Kadar Gula</td>
                            </tr>
                            <tr class="h-10 lg:h-14">
                                <td class="pl-3 lg:pl-4 bg-[#72DFDF] border-b-2 lg:border-b-4 border-[#13A1A1]">
                                    PT. Alam Aneka Aroma
                                </td>
                                <td class="bg-[#72DFDF] border-b-2 lg:border-b-4 border-[#13A1A1]">
                                    Asam asetat
                                </td>
                                <td class="bg-[#72DFDF] border-b-2 lg:border-b-4 border-[#13A1A1]">
                                    2008
                                </td>
                                <td class="bg-[#72DFDF] border-b-2 lg:border-b-4 border-[#13A1A1]">
                                    Derajat asam
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <Footer />
        </div>
    </div>
</template>

<style>
.carousel__prev {
    left: 1%;
}

.carousel__next {
    right: 1% !important;
    background-color: #32B9B9;
    border-radius: initial !important;
}

.add {
    display: flex;
    gap: 23px;
    margin-left: 8%;
    margin-right: 8%;
    margin-top: 3%;
}
</style>



<script >
import { defineComponent } from 'vue'
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel'

import Headertwo from "./Headertwo.vue";
import Slider from "./Slider.vue";
import Footer from "./Footer.vue";

import 'vue3-carousel/dist/carousel.css'
export default defineComponent({
    name: 'basic',
    components: {
        Carousel,
        Slide,
        Pagination,
        Navigation,

        Headertwo,
        Slider,
        Footer
    },
    data: () => ({
        // DataCarousel: [
        //     {
        //         im
        //     }
        // ],
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
