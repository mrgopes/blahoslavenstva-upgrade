<template>
    <button class="notification-toast" v-on:click="notifyMe">
        <FontAwesomeIcon :icon="['fas', 'bell']"/>
    </button>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import '../../css/notifications.css'

export default {
    name: "Notifications",
    components: {
        FontAwesomeIcon
    },

    methods: {
        notifyMe() {
            // Let's check if the browser supports notifications
            if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
            }

            // Let's check whether notification permissions have already been granted
            else if (Notification.permission === "granted") {
                // If it's okay let's create a notification
                var notification = new Notification("Hi there!");
                console.log(notification)
            }

            // Otherwise, we need to ask the user for permission
            else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(function (permission) {
                    // If the user accepts, let's create a notification
                    if (permission === "granted") {
                        var notification = new Notification("Hi there!");
                    }
                });
            }

            // At last, if the user has denied notifications, and you
            // want to be respectful there is no need to bother them any more.
        }
    }
}
</script>

<style scoped>

</style>
