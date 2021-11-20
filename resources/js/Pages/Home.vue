<template>
    <base>
        <Navbar :title="title" :leftlink="leftlink" :rightlink="rightlink"/>
        <div class="p-5">
            <div>
                {{ content }}
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
