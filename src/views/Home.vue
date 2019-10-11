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
        background: rgb(13, 33, 58)
</style>
