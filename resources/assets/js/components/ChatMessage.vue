<template lang="html">
    <div>
        <p>{{ message }}</p>
        <small>{{ user }}</small>
    </div>
</template>

<script>
export default {
    data(){
        return {
            message: "This is some message text",
            user: "Fabio"
        }
    }
}
</script>

<style lang="css">
</style>