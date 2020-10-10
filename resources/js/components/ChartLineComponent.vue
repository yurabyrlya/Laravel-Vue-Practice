<template>
    <div class="small">
        <line-chart :chart-data="datacollection"></line-chart>
        <button @click="fillData()" class="btn btn-primary">Update Chart data </button>
    </div>
</template>

<script>
import LineChart from '../lineChart.js'

export default {
    components: {
        LineChart
    },
    data () {
        return {
            datacollection: null
        }
    },
    mounted () {
        this.fillData()
    },
    methods: {
        fillData () {
            axios.get('/tasksJson').then((response)=>{
                 let data = response.data;
                 console.log(data);
                this.datacollection = {
                    labels: [0, data.all],
                    datasets: [
                        {
                            label: 'all tasks',
                            backgroundColor: '#f87979',
                            data: [0, data.all]
                        },
                        {
                            label: 'incomplete tasks',
                            backgroundColor: '#8679f8',
                            data: [0, data.incomplete]
                        },                        {
                            label: 'complete tasks',
                            backgroundColor: '#b01d50',
                            data: [0, data.complete]
                        }
                    ]
                }
            });
        },
        getRandomInt () {
            return Math.floor(Math.random() * (50 - 5 + 1)) + 5
        }
    }
}
</script>

<style>
.small {
    max-width: 600px;
    margin:  150px auto;
}
</style>
