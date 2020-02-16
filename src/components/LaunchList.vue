<template>
    <div class="launchlist">
        <h3>Results</h3>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Location</td>
                    <td>Launch Window Start</td>
                    <td>Launch Window End</td>
                    <td>Rocket Name</td>
                    <td>Save Launch</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Launch 1</td>
                    <td>Loc 1</td>
                    <td>Time Start</td>
                    <td>Time End</td>
                    <td>Rocket 1</td>
                    <td>Save</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: 'LaunchList'
}
</script>
<style scoped lang="sass">
    .launchlist
      overflow-x: auto

    table
      width: 800px
      margin: 0 auto

    ul,
    li
      margin: 0
      padding: 0

</style>
