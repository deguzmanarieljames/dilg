<template>
    <div>
        <table class="table">
        <thead>
            <tr>
                <th>Names</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="reqs in requests" :key="reqs.id">
                <td>{{ reqs.empfullname }}</td>
            </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
import axios from 'axios'

export default{
    data(){
        return{
            requests:[],
        }
    },
    created(){
    this.getRequestPPE()
    },
    methods: {
        async getRequestPPE(){
        try {
            const req = await axios.get('getRequestPPE');
            this.requests = req.data;
        } catch (error) {
            console.log(error);
        }
    },
    }
}
</script>