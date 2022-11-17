<template>
    <App>
        <div class="container mx-auto" >
            <h3 class="text-2xl my-10">All articles</h3>
            <div class="grid grid-flow-row grid-cols-4 gap-4 mb-10">
                <div v-for="(post, i) in posts" :key="i" class="mb-3">
                    <a :href="post.link">
                        <LazyImage
                            :src="post.image"
                            style="height: 300px"
                            class="object-cover"
                            v-if="post.image"
                        />
                        <h4 class="text-xl mt-3" v-html="post.title"></h4>
                        <p v-html="post.excerpt"></p>
                    </a>
                </div>
            </div>
            <div class="flex justify-center">
                <Link
                    class="bg-gray-800 font-bold px-6 py-4 rounded text-center text-white text-sm tracking-wide"
                    :class="{
                        'opacity-50 pointer-events-none': !pagination.prev_page,
                    }"
                    :href="`/blog/page/${pagination.prev_page}`"
                    preserve-scroll
                    >Prev</Link
                >
                <Link
                    class="bg-gray-800 duration-300 ml-4 font-bold px-6 py-4 rounded text-center text-white text-sm tracking-wide"
                    :class="{
                        'opacity-50 pointer-events-none':
                            pagination.next_page > pagination.total_pages,
                    }"
                    :href="`/blog/page/${pagination.next_page}`"
                    preserve-scroll
                    >Next</Link
                >
            </div>
        </div>
    </App>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import LazyImage from "../../Components/LazyImage.vue";
export default {
    props: ["posts", "pagination"],
    components: {
        Link,
        LazyImage,
    },
};
</script>
