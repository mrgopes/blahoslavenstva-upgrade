<template>
    <div class="navbar flex items-center">
        <div class="flex-1 text-2xl pl-5">
            <Link :href="leftlink" v-if="leftlink !== undefined">
                <FontAwesomeIcon :icon="['fas', 'arrow-left']" />
            </Link>
        </div>
        <div class="flex-none text-center">
            <p>
                {{ new Date(date).getDate() }}. {{ new Date(date).getMonth() +1 }}. {{ new Date(date).getFullYear() }}
            </p>
            <h1 class="title">
                {{ title }}
            </h1>
        </div>
        <div class="flex-1 text-2xl pr-5 text-right">
            <Link :href="rightlink" v-if="rightlink !== undefined">
                <FontAwesomeIcon :icon="['fas', 'arrow-right']"/>
            </Link>
        </div>
    </div>
    <!--hr class="navbar-bottom"/-->
</template>

<script>
import '../../css/navbar.css'
import { Link } from "@inertiajs/inertia-vue3";
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome';

export default {
    name: "Navbar",

    components: {
        FontAwesomeIcon,
        Link
    },

    props: {
        title: String,
        leftlink: String,
        rightlink: String,
        date: String,
    },

    methods: {
        getTitle(num) {
            switch (num) {
                case 0:
                    return "Písmo";
                case 1:
                    return "..";
                default:
                    return "error";
            }
        }
    }
}
</script>

<style scoped>

</style>
