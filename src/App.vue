<template>
    <div id="app" :class="'page-'+$route.name">
        <SiteHeader/>
        <nav>
            <router-link to="/">Home</router-link>
            <router-link to="/launch">Launch</router-link>
        </nav>
        <SiteMain />
        <SiteFooter />
    </div>
</template>

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
    #app
      display: flex
      flex-direction: column
      width: 100%
      height: 100%
      overflow: hidden

    main
        flex-grow: 0
        height: 100%

        section
          height: 100%

        video
          height: 100%

    nav
        text-align: center
        background: #EC008C

        .router-link-exact-active
          text-shadow: 1px 0px 0px #fff

        a
          color: #fff

    footer
        align-items: flex-end
</style>
