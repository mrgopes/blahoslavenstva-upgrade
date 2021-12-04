<template>
    <a :href="challenge.link" class="challenge-toast" target="_blank">
        <div>
        <p v-if="challenge.title != null"><strong>{{ challenge.title }}</strong></p>
        <p v-else><strong>Týždenná výzva</strong></p>
        Končí o {{ get_date_string(new Date((challenge.end + " 23:59:59").replace(/-/g, "/"))) }}
        </div>
    </a>
</template>

<script>

import '../../css/challenge.css'

export default {
    name: "Challenge",
    props: ['challenge'],
    methods: {
        get_date_string(date) {
            let distance = date - new Date().getTime();
            let final = ""
            final += Math.floor(distance / (1000 * 60 * 60 * 24)) + "d "
            final += Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) + "h "
            final += Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)) + "m"
            return final;
        }
    }
}
</script>

<style scoped>

</style>
