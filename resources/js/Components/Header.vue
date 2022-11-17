<template>
    <!-- Navbar -->
    <div class="lg:absolute lg:left-1/2 lg:-translate-x-1/2 top-0 w-full z-[100] lg:bg-transparent bg-[#06918D] ">
        <nav class="container flex lg:px-0 lg:items-center  py-5 lg:py-10 justify-between ">
            <div class="w-full hidden lg:flex lg:items lg:w-auto text-right">
                <div class="text-sm lg:flex-grow">
                    <div class="initial ">
                        <a v-for="(item, index) in navigations1" :key="index" :href="item.link"
                            class="flex no-underline mt-2 mr-6 lg:inline-flex text-gray-100 hover:text-[#33b3b3] lg:mr-6 ">
                            {{ item.label }}
                            <svg v-if="item.icon == true" class="ml-5 w-5 h-5" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex lg:items-center text-white text-left lg:w-[23%] md:w-[38%] gap-[7%] ml-[5%]">
                <!-- <img src="../assets/image/image 111.svg" class="sm:mr-3 ml-10 h-12" alt="SMKN 1 Cibadak" /> -->
                <svg-vue icon="image 111" alt="logo" class="icon" width="50px" height="50px"></svg-vue>
                <span class="invisible lg:visible font-semibold text-xl tracking-tight ">SMKN 1 Cibadak</span>
            </div>

            <!-- Navbar Mobile -->
            <div class="flex lg:hidden flex-col">
                <div class="justify-end focus:outline-none text-white block lg:hidden">
                    <button class="click" @click="myFilter">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 mr-[22px] -ml-1 item-bold"
                            viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <div class="lg:text-right lg:w-full  lg:flex lg:item">
                    <div class="hilangkan" :class="{ active: isActive }">
                        <div class="flex justify-between py-[20px] bg-[#4f7c7c]">
                            <svg-vue icon="image 111" alt="logo" class="icon ml-[11%]" width="50px" height="50px"></svg-vue>
                            <!-- <img src="../assets/image/image 111.svg" class="sm:mr-3 ml-[56px] h-12" alt="SMKN 1 Cibadak" /> -->
                            <button class="click mr-[55px]" @click="myFilter">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true" width="24px" height="24px"
                                    class="block w-8 h-8 self-center text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="text-sm lg:flex-grow ml-[42px] mt-[21px]">
                            <a v-for="(item, index) in navigations2" :key="index" :href="item.link"
                                class="flex no-underline mt-2 lg:inline-flex text-gray-100 hover:text-[#33b3b3] lg:mr-6">
                                {{ item.label }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Navbar Mobile -->
            <div class="lg:text-right w-full hidden lg:flex lg:items lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a v-for="(item, index) in navigations" :key="index" :href="item.link"
                        class="flex no-underline mt-2 lg:inline-flex text-gray-100 hover:text-[#33b3b3] lg:mr-6">
                        {{ item.label }}
                        <svg v-if="item.icon == true" class="lg:ml-5 w-5 h-5" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->

</template>
<style>
.hilangkan {
    left: -100%;
    top: 0;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 99;
    transition: all .3s ease-in-out;
    /* display: none; */
    
}

.active {
    left: 0;
    top: 0;
    display: block;
    position: fixed;
    width: 100%;
    height: 100%;
    z-index: 99;
    transition: all .3s ease-in-out;
    background: #33b3b3;
}
</style>
<script>
export default {
    data() {
        return {
            isActive: false,
            navigations1: [
                {
                    "label": "Home ",
                    "link": "/",
                    "icon": false
                },
                {
                    "label": "Program Studi",
                    "link": "/Programstudi",
                    "icon": true
                },
                {
                    "label": "Data Siswa",
                    "link": "/Datasiswa",
                    "icon": true
                },
            ],
            navigations: [
                {
                    "label": "Organisasi",
                    "link": "/Organisasi",
                    "icon": true
                },
                {
                    "label": "Info",
                    "link": "/Info",
                    "icon": false
                },
                {
                    "label": "Berita",
                    "link": "/Berita",
                    "icon": false
                },
                {
                    "label": "Tentang",
                    "link": "/Tentang",
                    "icon": false
                },
                {
                    "label": "Kontak",
                    "link": "/Kontak",
                    "icon": false
                }
            ],
            navigations2: [
                {
                    "label": "Home ",
                    "link": "/",

                },
                {
                    "label": "Program Studi",
                    "link": "/Programstudi"

                },
                {
                    "label": "Data Siswa",
                    "link": "/Datasiswa"

                },
                {
                    "label": "Organisasi",
                    "link": "/Organisasi"

                },
                {
                    "label": "Info",
                    "link": "/Info"

                },
                {
                    "label": "Berita",
                    "link": "/Berita"

                },
                {
                    "label": "Tentang",
                    "link": "/Tentang"

                },
                {
                    "label": "Kontak",
                    "link": "/Kontak"

                }
            ]
        }
    },
    methods: {
        myFilter: function () {
            this.isActive = !this.isActive;
            // some code to filter users
        }
    }
}
</script>

