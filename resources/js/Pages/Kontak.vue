<template>
    <div class="">
        <Headertwo />
        <div class="info relative">
            <img class="w-full img-fluid absolute lg:h-auto sm:h-auto"
                :src="$attrs.images + 'default/backgroundbanner.png'">
            <!-- <img class="w-full img-fluid absolute lg:h-auto sm:h-auto" src="../assets/image/Frame 171.svg" alt="" /> -->
            <div class="container -pt-20 lg:pt-[50px] relative md:px-0">
                <p class="text-black text-base lg:text-2xl pt-5 lg:pt-[40px] font-semibold">
                    <small>Kirim Pesan Ke Admin SMKN 1 Cibadak</small>
                </p>
                <div class="flex items-center">
                    <h1 class="text-black lg:text-4xl text-2xl lg:pt-5 pt-3 font-bold">
                        Kontak
                    </h1>
                    <svg-vue icon="Vector2" class="w-9 lg:w-[48px] pl-3 lg:pl-auto lg:pt-6"></svg-vue>
                    <!-- <img class="w-7 lg:w-12 pl-3 lg:pl-5 pt-5 lg:pt-8" src="../assets/image/Vector2.svg" alt="" /> -->
                </div>
            </div>
            <h1
                class="container md:px-0 mt-10 lg:mt-[8%] font-bold text-xs lg:text-base text-[#0E1422] hover:text-[#949494]">
                Home&emsp;&ensp;/&emsp;&ensp;Kontak
            </h1>
        </div>
        <div class="container md:px-0">
            <div class="lg:flex flex-row gap-[80px]">
                <div class="lg:w-1/2">
                    <h3 class="font-bold text-start lg:text-4xl text-2xl mt-5 lg:mt-10">
                        Kirim Pesan
                    </h3>
                    <div class="text-sm lg:text-base font-medium">
                        <div class="mt-5 lg:mt-8">
                            <form class="form" action="">
                                <div class="form-control">
                                    <label class="form-control__label py-2" for="">Name*</label>
                                    <input class="form-control__input" type="text">
                                </div>
                                <div class="form-control">
                                    <label class="form-control__label py-2" for="">Email*</label>
                                    <input class="form-control__input" type="text">
                                </div>
                                <div class="form-control">
                                    <label class="form-control__label py-2" for="">Subjek*</label>
                                    <input class="form-control__input" type="text">
                                </div>
                                <div class="form-control lg:mr-0 mr-0">
                                    <label class="form-control__label py-2" for="">Pesan*</label>
                                    <textarea name="" id="" cols="10" rows="10"></textarea>
                                </div>
                                <!-- <img class="lg:w-48 lg:h-20 w-18 h-12 my-7" src="../assets/image/kode.jpeg" alt="" /> -->
                                <img class="lg:w-48 lg:h-20 w-18 h-12 my-7" :src="$attrs.images + 'default/kode.jpeg'">
                                <div class="form-control">
                                    <label class="form-control__label py-2" for="">Masukan kata diatas*</label>
                                    <input class="form-control__input" type="text">
                                </div>
                                <div class="my-7 place-items-center">
                                    <button
                                        class="bg-[#32B9B9] text-white hover:bg-[#1f6463] text-base font-bold py-2.5 px-[40px] lg:ml-auto mr-0 flex">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <h3 class="font-bold text-start lg:text-4xl text-2xl mr-9 lg:mr-12 mt-5 lg:mt-12 mb-5 lg:mb-7">
                        Alamat
                    </h3>

                    <p class="flex md:justify-start mb-4 text-xs lg:text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 lg:h-8 mr-[6px] lg:mr-[6px] lg:mb-2"
                            viewBox="0 0 20 30" fill="currentColor">
                            <path fillRule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clipRule="evenodd" />
                        </svg>
                        <a href="#"
                            class="no-underline border-b border-solid border-transparent hover:text-[#909797] text-xs lg:text-sm font-medium">Jl.
                            Al-Muwahhiddin, Karangtengah, Cibadak, Kab. Sukabumi.
                            <br>Sukabumi 43351
                        </a>
                    </p>
                    <p class="flex md:justify-start mb-4 text-xs lg:text-sm font-medium">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                            class="lg:w-[16px] w-[14px]  mr-3" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        (0266) 532510
                    </p>
                    <p class="flex md:justify-start mb-6 lg:mb-10 text-xs lg:text-sm font-medium">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                            class="lg:w-[16px] w-[14px] mr-3" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg>
                        smkn1_cibadak@yahoo.co.id
                    </p>
                    <!-- <img style="width: -webkit-fill-available" src="../assets/image/image 15.svg" class="img-fluid" alt="Responsive image" /> -->
                    <img class="img-fluid" :src="$attrs.images + 'default/imagepeta.png'">
                </div>
            </div>
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

<style lang="css">
.form .form-control {
    display: block;
}

.form .form-control .form-control__label {
    display: block;
}

.form .form-control .form-control__input {
    display: block;
    background-color: #F5F5F5;
    width: 100%;
    height: 50px;
    border-radius: 7px;

}

.form .form-control textarea {
    background-color: #F5F5F5;
    border-radius: 7px;
    width: 100%;
    height: 253px;
}
</style>