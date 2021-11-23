<template>
    <div class="background flex items-center justify-center">
        <div class="text-center" v-if="!date">
            <h1 class="notfound-title">
                Pre zvolený deň žiaľ neexistuje žiadny upgrade :(
            </h1>
            <Link href="/" class="btn-nf">
                Zobraziť dnešný upgrade
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
import '../../css/app.css'
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
