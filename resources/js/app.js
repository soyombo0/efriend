import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from "@/Layouts/Layout.vue";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })

        let page = pages[`./Pages/${name}.vue`].default

        if (page.layout === undefined) {
            page.layout = Layout;
        }

        return pages[`./Pages/${name}.vue`]
    },
    title: title => `efriend`,
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
