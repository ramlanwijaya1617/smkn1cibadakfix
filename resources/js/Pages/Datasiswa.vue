<template>
    <div>
        <Headertwo />
        <div class="datasiswa">
            <div class="info relative">
                <img class="w-full img-fluid absolute lg:h-auto sm:h-auto"
                    :src="$attrs.images + 'default/backgroundbanner.png'">
                <!-- <img class="w-full absolute lg:h-auto sm:h-auto" src="../assets/image/Frame 171.svg" alt="" /> -->
                <div class="container md:px-0">
                    <div class="flex">
                        <div class="-pt-20 lg:pt-16 relative ml-0">
                            <p class="text-black text-base lg:text-2xl pt-5 lg:pt-[30px] font-semibold">
                                <small>Data Siswa SMKN 1 Cibadak</small>
                            </p>
                            <div class="flex items-center mb-3">
                                <h1 class="text-black text-2xl lg:pt-5 pt-auto lg:text-4xl font-bold">
                                    Data Siswa
                                </h1>
                                <svg-vue icon="datasiswa" class="w-7 lg:w-[60px] pl-3 lg:pl-5 pt-5 lg:pt-[8%]"></svg-vue>
                                <!-- <img class="w-7 lg:w-12 ml-3 lg:pl-5 pt-5 lg:pt-6" src="../assets/image/datasiswa.svg"
                                    alt="" /> -->
                            </div>
                        </div>
                        <h1
                            class="text-black text-[14px] lg:text-[24px] font-bold relative lg:pt-[9%] lg:py-10 md:pt-8 pt-5   ml-[47%] lg:ml-auto">
                            Agribisnis Hasil Pertania ( X.A.3 )
                        </h1>
                    </div>
                 </div>
            </div>

            <div class="container md:px-0">
                <h1
                    class="mx-0 lg:mx-auto mt-auto md:mt-[11%] lg:mt-[85px] font-bold text-xs lg:text-base text-[#0E1422] hover:text-[#949494]">
                    Home&emsp;&ensp;/&emsp;&ensp;Data Siswa&emsp;&ensp;/&emsp;&ensp;AGRIBISNIS
                    HASIL PERTANIAN &emsp;&ensp;/&emsp;&ensp; X A 3X
                </h1>
                <h1 class="text-black text-2xl lg:pt-8 pt-5 mb-6 lg:text-4xl font-bold ml-0 lg:ml-auto">
                    Data kelas X A3
                </h1>
                <div class="mt-5 lg:mt-7 mx-0 lg:mx-auto">
                    <table class="table-auto w-full text-sm lg:text-base font-medium">
                        <tbody>
                            <tr class="h-10 lg:h-14 text-sm lg:text-lg text-white">
                                <td class="w-10 lg:w-20 text-start pl-3 lg:pl-4 bg-[#13A1A1]">
                                    No
                                </td>
                                <td class="bg-[#13A1A1]">NIS</td>
                                <td class="bg-[#13A1A1]">Nama Siswa</td>
                                <td class="bg-[#13A1A1]">Jenis Kelamin</td>
                            </tr>
                            <tr v-for="(list, index) in listDaftarSiswa" :key="index"
                                class="lg:text-sm text-xs h-10 lg:h-14">
                                <td class="pl-3 lg:pl-6">{{ index + 1 }}</td>
                                <td class="">{{ list.nis }}</td>
                                <td class="">{{ list.nama }}</td>
                                <td class="">{{ list.jenisKelamin }}</td>
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
    Footer,
    Headertwo
},

    data() {
        return {
            listDaftarSiswa: [
                {
                    nis: "10151609857",
                    nama: "AA Faisal Abdullah",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609858",
                    nama: "Ai Nuraeni",
                    jenisKelamin: "P",
                },
                {
                    nis: "10151609859",
                    nama: "Andhika Pratama",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609862",
                    nama: "Dian Angraeni Putri",
                    jenisKelamin: "P",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
                {
                    nis: "10151609861",
                    nama: "Daudy Sultan Syahbian",
                    jenisKelamin: "L",
                },
            ],
        };
    },
};
</script>

<style lang="css" scoped>
table tr {
    @apply bg-[#72DFDF];
}

table tr:nth-child(even) {
    background-color: #edffff !important;
}

table tr:nth-last-child(1) {
    @apply border-b-4 border-[#13A1A1];
}
</style>
