<template>
    <div>hey</div>
    <Link href="/">home</Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
    props: ["test"],
};
</script>

<style scoped>

</style>
