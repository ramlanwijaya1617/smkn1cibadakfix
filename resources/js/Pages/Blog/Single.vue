<template>
    <App>
        <div class="single bg-secondary relative">
            <div class="container py-8">
                <span class="line"></span>
                <svg-vue
                    icon="logo"
                    class="absolute right-0 top-0 h-full"
                ></svg-vue>
                <div
                    class="content flex flex-col gap-[27px] w-full md:w-[90%] py-16 relative z-30"
                >
                    <a :href="$page.props.site.url" class="arrow flex gap-3 items-center">
                        <!-- <svg-vue icon="icon/arrow-left" class="w-6 h-6"></svg-vue> -->
                        <p class="paragraph-2 text-white">All Post</p>
                    </a>
                    <div class="chisp gap-3 flex">
                        <a
                            v-for="(item, index) in post.categories" :key="index"
                            :href="item.permalink"
                            class="paragraph-2 bg-light text-altblack py-1 px-3 rounded-full"
                            >{{ item.title }}</a
                        >
                        <span
                            class="paragraph-2 bg-light text-altblack py-1 px-3 rounded-full"
                            >{{ post.date }}</span
                        >
                    </div>
                    <div>
                        <h1
                            class="leading-9 lg:text-[50px] font-bold text-white lg:leading-snug"
                            :class="{'xl:text-[76px] xl:leading-[91.2px]':post.title.length <= 70 }"
                        >
                            {{ post.title }}
                        </h1>
                        <p
                            class="text-white leading-6 paragraph mt-[27px] font-normal"
                        >
                            {{ post.excerpt }}
                        </p>
                    </div>
                </div>

                <span class="line"></span>
            </div>
        </div>
        <!-- Class Dulu -->
        <div class="container flex mx-auto py-10 sm:py-14 md:py-20 lg:py-28 gap-5">
            <main class="content-main-wrapper w-full lg:w-3/4 mx-auto">
                <div class="content-main paragraph" v-html="post.content"></div>
            </main>
        </div>

        <div class="bg-primary py-10 md:py-28">
            <div class="container">
                <h1 class="heading-1 py-6 md:py-10 text-white">Next article</h1>
                <div
                    class="articles-feed grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5"
                    v-if="data"
                >
                    <a
                        v-for="(items, i) in data.posts.nodes"
                        :key="i"
                        :href="items.link"
                        class="flex flex-col gap-5 border-b md:border-b-0 border-neutral pb-5"
                    >
                        <LazyImage
                            :alt="items.title"
                            :src="
                                items.featuredImage
                                    ? items.featuredImage.node.mediaItemUrl
                                    : $images + '/news-1.jpeg'
                            "
                            style="height: 300px;"
                            class-name="object-cover w-full"
                        />
                        <article class="article-detail">
                            <span
                                class="date text-sm block mt-5 mb-3 text-neutral"
                                >{{ customdate(items.date) }}</span
                            >
                            <h1
                                class="heading-3 text-white"
                                v-html="items.title"
                            ></h1>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </App>
</template>
<script>

import { useQuery } from "villus";
import { NEW_ARTICLE } from "../../Graphql/posts";
import dateFormat from "dateformat";
import { computed, ref } from "vue";
export default {
    props: ["post"],
    setup(props) {
        const variables = computed(() => {
            return {
                notIn: props.post.id,
            };
        });

        const { data, isFetching } = useQuery({
            query: NEW_ARTICLE,
            variables: variables,
            cachePolicy: "network-only",
        });

        return {
            data,
            isFetching,
        };
    },
    methods: {
        customdate(tempdate) {
            let postDate = new Date(tempdate);
            return dateFormat(postDate, "mmmm dd, yyyy");
        },
    },
};
</script>

<style lang="scss" scoped>
.line {
    @apply h-[0.5px] w-full bg-white flex relative z-20;
}
</style>

<style lang="scss">
// .content-main-wrapper h1 {
//     @apply lg:px-24 xl:px-[200px];
// }

.content-main {
    // p {
    //     @apply text-base leading-normal sm:text-lg md:text-xl text-neutral-70 sm:leading-[30px] pb-7;
    // }

    // pre {
    //     @apply mb-7;
    // }
    // .alignleft {
    //     float: left;
    //     padding-right: 20px;
    // }
    // .alignright {
    //     float: right;
    //     padding-left: 20px;
    // }
    // ul {
    //     list-style-type: disc;
    //     @apply pl-10;
    //     li {
    //         @apply text-base leading-normal text-neutral-70 sm:text-lg md:text-xl pl-2.5;
    //     }
    // }
}
</style>
