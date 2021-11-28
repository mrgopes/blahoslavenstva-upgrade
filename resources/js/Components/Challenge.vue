<template>
    <a :href="challenge.link" class="challenge-toast" target="_blank">
        <div>
        <p v-if="challenge.title != null"><strong>{{ challenge.title }}</strong></p>
        <p v-else><strong>Týždenná výzva</strong></p>
        Končí o {{ get_date_string(new Date((challenge.end + " 23:59:59").replace(/-/g, "/")) - new Date()) }}
        </div>
    </a>
</template>

<script>

import '../../css/challenge.css'

export default {
    name: "Challenge",
    props: ['challenge'],
    methods: {
        get_date_string(difference) {
            var final = ""
            final += Math.floor(difference / 86400000) - 1 + "d "
            final += (parseInt((difference % 86400000) / 3600000)) + "h "
            final += parseInt(((difference % 86400000) % 3600000) / 60000) + "m"
            return final;
        }
    }
}
</script>

<style scoped>

</style>
