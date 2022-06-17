import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()

createInertiaApp({
    resolve: (name => {
        let parts = name.split('::')
        let type = false
        if (parts.length > 1) type = parts[0]
        if(type) {
            let nameVue = parts[1].split('.')[0]
            return require("../../Modules/" + parts[0] + "/Resources/assets/js/Pages/" + nameVue + ".vue").default
        }else {
            return require(`./Pages/${name}`).default
        }
    }),
    title: title => title ? `${title} - Interv Dd` : 'Interv Dd',
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
