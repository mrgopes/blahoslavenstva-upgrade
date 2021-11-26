<template>
    <base>
        <Navbar :title="title" :leftlink="leftlink" :rightlink="rightlink"/>
        <div class="p-5">
            <div>
                {{ content }}
            </div>
            <div class="w-100 text-gray-500 text-center mt-10 text-sm">
                Práve čítaš neaktuálny upgrade zo dňa 24.11.2021. <Link href="/" class="text-blue-800 hover:underline">Prejsť na upgrade na dnešný deň.</Link>
            </div>
        </div>
    <base/>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import base from "../Templates/base";
import Navbar from "../Components/Navbar"

export default {
    layout: base,

    components: {
        Link,
        base,
        Navbar
    },
    props: ["title", "leftlink", "rightlink", 'content'],
};
</script>

<style scoped>

</style>
