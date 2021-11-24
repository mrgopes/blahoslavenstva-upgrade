import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import '../css/app.css'
import base from "./Templates/base";

import { library } from '@fortawesome/fontawesome-svg-core'
import {faArrowLeft, faArrowRight, faBell} from '@fortawesome/free-solid-svg-icons'

library.add(faArrowLeft)
library.add(faArrowRight)
library.add(faBell)

InertiaProgress.init()


createInertiaApp({
    resolve: name => {
        const page = require(`./Pages/${name}`).default
        page.layout = page.layout || base
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
