<template>
    <div class="text-gray-800">
        <Header />
        <main class="min-h-screen">
            <slot></slot>
        </main>
        <Footer />
    </div>
    
        <div id="modals"></div>
</template>

<script>
import Header from "../Components/Header";
import Footer from "../Pages/Footer.vue";
import SearchBar from "../Components/SearchBar.vue";

export default {
    components: {
        Header,
        Footer,
        SearchBar
    }
};
</script>
