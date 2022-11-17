<template>
    <div>
        <Headertwo />
        <div class="programstudi3">
            <div class="info relative">
                <img class="w-full img-fluid absolute lg:h-auto sm:h-auto"
                    :src="$attrs.images + 'default/backgroundbanner.png'">
                <div class="container md:px-0 -pt-20 lg:pt-[30px] relative">
                    <p class="text-black text-base lg:text-2xl pt-5 lg:pt-16 font-semibold">
                        <small>Organisasi SMKN 1 Cibadak</small>
                    </p>
                    <div class="flex items-center">
                        <h1 class="text-black lg:text-4xl text-2xl lg:pt-5 pt-2 font-bold">
                            Organinsasi
                        </h1>
                        <svg-vue icon="logoorganisasi" class="w-7 lg:w-[60px] pl-3 lg:pl-5 pt-5 lg:pt-[2%]"></svg-vue>
                        <!-- <img class="w-7 lg:w-12 pl-3 lg:pl-5 pt-5 lg:pt-6" src="../assets/image/logoorganisasi.svg"
                            alt="" /> -->
                    </div>
                    <h1 class="mt-10 lg:mt-24 font-bold text-xs lg:text-base text-[#0E1422] hover:text-[#949494]">
                        Home&emsp;&ensp;/&emsp;&ensp;Organisasi&emsp;&ensp;/&emsp;&ensp;Dewan
                        Guru
                    </h1>
                </div>
            </div>
            <div class="container md:px-0">
                <h1 class="text-black lg:text-4xl text-2xl lg:pt-8 pt-5 mb-6 font-bold ml-0 lg:ml-auto">
                    Dewan Guru
                </h1>
                <div class="mt-5 lg:mt-7 mx-0 lg:mx-auto lg:mb-20">
                    <table class="table-auto w-full text-sm lg:text-base font-medium">
                        <thead>
                            <tr class="h-10 lg:h-14">
                                <th
                                    class="text-white w-10 lg:w-20 text-start pl-3 lg:pl-0 pr-[1%] bg-[#13A1A1] text-sm lg:text-lg">
                                    No
                                </th>
                                <th class="text-white text-left bg-[#13A1A1] text-sm lg:text-lg">
                                    Nama
                                </th>
                                <th class="text-white text-left bg-[#13A1A1] text-sm lg:text-lg">
                                    Pendidikan
                                </th>
                                <th class="text-white text-left bg-[#13A1A1] text-sm lg:text-lg">
                                    Bidang Tugas
                                </th>
                                <th class="bg-[#13A1A1]"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(list, index) in listDaftarSiswa" :key="index"
                                class="lg:text-sm text-xs h-10 lg:h-14">
                                <td class="pl-3 lg:pl-6">{{ index + 1 }}</td>
                                <td class="">{{ list.nama }}</td>
                                <td class="">{{ list.pendidikan }}</td>
                                <td class="">{{ list.bidangtugas }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <Footer />
        </div>
    </div>
</template>

<script>
import Footer from "./Footer.vue";
import Headertwo from "./Headertwo.vue";
export default {
    components: {
        Headertwo,
        Footer
    },

    data() {
        return {
            listDaftarSiswa: [
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
                {
                    nama: "Inda Laela, S.Ag.",
                    pendidikan: "S1/IAIN Sunan Gunung Djati/1988",
                    bidangtugas: "Guru PAI",
                },
                {
                    nama: "Drs. Juanda, M.Si",
                    pendidikan: "S2/STIAMI Jakarta/2005",
                    bidangtugas: "Kepala Sekolah, Guru Biologi",
                },
            ],
        };
    },
};
</script>
<style lang="css" scoped>
table tr {
    @apply bg-[#edffff];
}

table tr:nth-child(even) {
    background-color: #72DFDF !important;
}

table tr:nth-last-child(1) {
    @apply border-b-4 border-[#13A1A1];
}
</style>