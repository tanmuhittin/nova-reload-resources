<template>
    <card class="flex flex-col items-center justify-center p-1">
        <div class="mb-1">
            <button class="text-center btn btn-primary btn-default" @click="reloadResources">{{ __('Reload Resources') }}</button>
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',
    ],
    data: () => ({
        'resourceName':null
    }),
    mounted() {
        this.resourceName = this.$router.currentRoute.params.resourceName;
    },
    methods:{
        async reloadResources(){
            if(this.resourceName){
                let filters_backup = _.cloneDeep(this.$store.getters[`${this.resourceName}/filters`]);
                let filters_to_change = _.cloneDeep(filters_backup);
                filters_to_change.push({});
                await this.$store.commit(`${this.resourceName}/storeFilters`,filters_to_change);
                await this.$store.commit(`${this.resourceName}/storeFilters`,filters_backup);
            }
        }
    }
}
</script>
