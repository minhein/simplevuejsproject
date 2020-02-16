<template>
    <section class="home">
        <PromotionVideo />
    </section>
</template>
<script>
import PromotionVideo from '@/components/PromotionVideo.vue'
export default {
    name: 'Home',
    components: {
        PromotionVideo
    }
}
</script>

<style scoped lang="sass">
    .home
        background-color: rgb(13, 33, 58)
        padding-top: 0
        background-image: url('../assets/images/hello-world.png')
        background-size: contain
        background-position: 50% 50%
        min-height: calc(100vh - 180px)
</style>
