<template>
    <div class="background flex items-center justify-center">
        <div class="text-center" v-if="!date">
            <h1 class="title mb-3">
                Vitaj, milovaný!
            </h1>
            <p class="mb-10 text-gray-700">
                Pokiaľ by si chcel dostávať pravidelné upozornenia, klikni SEM :)
            </p>
            <Link :href="'/' + new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate() + '/pismo'" class="btn-nf">
                Hor sa do modlitby!
            </Link>
        </div>
        <div class="text-center" v-else>
            <h1 class="notfound-title">
                Pre dnešný deň žiaľ neexistuje žiadny upgrade. Skús to zajtra! :)
            </h1>
        </div>
    </div>
</template>

<script>
import '../../css/welcome.css'
import '../../css/navbar.css'
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
    props: ["date"],
};
</script>

<style scoped>

</style>
