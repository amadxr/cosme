<template>
    <div class="card mb-3">
        <div class="card-body">
            <div class="float-left">
                {{ step.text }}
                <span class="badge badge-primary badge-pill" v-if="step.multiple_select">M</span>
                <span class="badge badge-primary badge-pill" v-if="!step.multiple_select">S</span>
            </div>
            <div class="float-right">
                <button type="button" class="btn btn-primary" v-on:click="showDetails">Details</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            step: {
                type: Object,
                required: true
            }
        },
        methods: {
            showDetails() {
                window.location.href = "show/" + this.step.id;
            }
        }
    }
</script>