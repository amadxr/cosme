<template>
    <div>
        <div class="jumbotron" v-if="steps.length === 0">
            <h1 class="display-4">There are no steps yet!</h1>
            <p class="lead">To create your first step click the button below.</p>
            <a class="btn btn-success btn-lg" href="create-step" role="button">Create</a>
        </div>
        <h1 class="display-1">Steps</h1>                          
        <step-component v-for="step in steps" :step="step" :key="step.id"/>
        <div class="float-right">
            <a class="btn btn-success btn-lg" href="create-step" role="button">Create</a>
        </div>  
    </div>
</template>

<script>
    export default {
        data() {
            return {
                steps: []
            };
        },
        created() {
            this.fetch();
        },
        methods: {
            fetch() {
                axios.get(process.env.MIX_APP_URL + '/api/steps')
                    .then(({data}) => {
                        this.steps = data.data;
                    });
            }
        }
    }
</script>