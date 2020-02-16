<template>
    <section id="data" class="launch">
        <DateRange />
        <LaunchList />
        <BarChart />
        <Map />
    </section>
</template>

<script>

import DateRange from '@/components/DateRange.vue'
import LaunchList from '@/components/LaunchList.vue'
import BarChart from '@/components/BarChart.vue'
import Map from '@/components/Map.vue'

export default {
    name: 'Launch',
    components: {
        DateRange,
        LaunchList,
        BarChart,
        Map
    }
}

</script>

<style scoped lang='sass'>
  .launch
    background: rgb(13, 33, 58)
    padding-top: 10px
    color: white

  li
    height: 30px
    overflow: hidden
    border: 1px solid red
    margin: 5px
    text-align: left
    line-height: 2
</style>
