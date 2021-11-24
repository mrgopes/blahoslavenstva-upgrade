<template>
    <div>
        <Challenge :challenge="challenge" v-if="challenge !== null && challenge !== undefined"/>
        <!-- Notifications/-->
         <slot />
    </div>
</template>

<script>

import Challenge from "../Components/Challenge";
import Notifications from "../Components/Notifications";

export default {
    name: "base",
    components: {
        Notifications,
        Challenge
    },
    props: ['challenge']
}
</script>

<style scoped>

</style>
