

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import MainLayout from '@/Layouts/MainLayout.vue'
import { ZiggyVue } from 'ziggy'
import { InertiaProgress } from '@inertiajs/progress'
import '../css/app.scss'
import VueClickAway from "vue3-click-away";
import mitt from 'mitt'


InertiaProgress.init({
    delay: 0,
    color: '#29d',
    includeCSS: true,
    showSpinner: true,
})

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue')


        const page = await pages[`./Pages/${name}.vue`]()

        page.default.layout = page.default.layout || MainLayout

        return page
    },
    // function () {}
    // {el: xxx, App: xxx, props: xxx}
    setup({ el, App, props, plugin }) {
        const appInstance = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueClickAway);
        const emitter = mitt();
        // ... and assigning it as a global Vue property
        appInstance.provide('emitter', emitter)
        appInstance.mount(el);
    },
})
