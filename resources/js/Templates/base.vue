<template>
    <div>
        <Challenge :challenge="challenge" v-if="challenge !== null && challenge !== undefined"/>
         <slot />
    </div>
</template>

<script>

import Challenge from "../Components/Challenge";

export default {
    name: "base",
    components: {
        Challenge
    },
    props: ['challenge']
}
</script>

<style scoped>

</style>
