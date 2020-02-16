<template>
    <header>
        <Logo />
    </header>
</template>

<script>
import Logo from '@/components/Logo.vue'
export default {
    name: 'SiteHeader',
    components: {
        Logo
    }
}
</script>
<style lang="sass">
    header
        padding: 10px
        background: rgba(0, 0, 0, 0.1)
        text-align: center

    a
        padding: 10px
        display: inline-block
        text-decoration: none

        &:hover
            text-decoration: underline
</style>
