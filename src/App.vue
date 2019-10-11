<template>
    <div id="app" :class="'page-'+$route.name">
        <SiteHeader/>
        <nav>
            <router-link to="/">Home</router-link>
            <router-link to="/contact">Contact</router-link>
        </nav>
        <SiteMain />
        <SiteFooter />
    </div>
</template>

<style lang="sass">
    nav
        background: cyan
</style>

<script>
import SiteHeader from '@/components/SiteHeader.vue'
import SiteMain from '@/components/SiteMain.vue'
import SiteFooter from '@/components/SiteFooter.vue'

export default {
    name: 'App',
    components: {
        SiteHeader,
        SiteMain,
        SiteFooter
    }
}
</script>
<style lang="sass">
    nav
        text-align: center
</style>
