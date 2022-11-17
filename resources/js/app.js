import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import SvgVue from "svg-vue3";
import api from "./Api";
import mixins from "./mixins";
import AppLayout from "./Layouts/App.vue";
import LazyLoadDirective from "./Directives/LazyLoadDirective";
import ClickOutside from "./Directives/ClickOutside";
import { MCDHelpers } from "./utils/MCDUtilities";
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';
import LazyImage from "./Components/LazyImage.vue";

import 'vue-universal-modal/dist/index.css';
import VueUniversalModal from 'vue-universal-modal';

window.axios = require("axios");
window.axios.defaults.headers.common["X-WP-Nonce"] = window.settings.nonce;

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Mangcoding";

    createInertiaApp({
        title: (title) => `${title} - ${appName}`,
        resolve: (name) => require(`./Pages/${name}.vue`),
        mixins: [mixins],
        setup({ el, app, props, plugin }) {
            const createdApp = createApp({
                render: () => h(app, props),
                mounted() {
                    createdApp.config.globalProperties.$images =
                        this.$page.props.images;

                    createdApp.config.globalProperties.$siteInfo =
                    this.$page.props.site;

                    createdApp.config.globalProperties.$bb_ajax_nonce = window.settings.bb_ajax_nonce;
                    MCDHelpers.forceExternalLinks();
                    MCDHelpers.vueFixWpPlugins(document.querySelector("#app"));

                },
            })
                .use(plugin)
                .use(SvgVue)
                .use(VueUniversalModal, {
                    teleportTarget: '#modals',
                })
                .component("LazyImage", LazyImage)
                .component("App", AppLayout)
                .component('v-select', vSelect)
                .directive("lazyload", LazyLoadDirective)
                .directive("click-outside", ClickOutside);

            createdApp.config.globalProperties.$api = api;
            createdApp.config.globalProperties.$mixins = mixins.methods;
            createdApp.config.globalProperties.$mixinsData = mixins.data;
            createdApp.mount(el);
            return createdApp;
        },
    });

    InertiaProgress.init({ color: "#4B5563" });
