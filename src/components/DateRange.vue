<template>
    <div class="date">
        <input type="date" name="start" placeholder="Start Date" />
        <input type="date" name="end" placeholder="End Date" />
        <input type="submit" />
    </div>
</template>
<script>
export default {
    name: 'DateRange'
}
</script>
<style scoped lang="sass">
    input
      display: inline-block
      padding: 10px
      text-align: left
      font-size: 16px

      &:nth-child(1)
        margin-right: 15px

      &[type=submit]
        padding: 10px 15px
        float: right
        border-radius: 3px
        line-height: 27px

    .date
        display: inline-block
        border: 1px solid white
        padding: 10px
        width: 1200px
        text-align: left
</style>
