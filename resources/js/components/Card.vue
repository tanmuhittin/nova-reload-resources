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
		let currentFilters = _.cloneDeep(this.$store.state[`${this.resourceName}`]['filters']);
                await this.$store.commit(`${this.resourceName}/storeFilters`, {});
                await this.$store.commit(`${this.resourceName}/storeFilters`, currentFilters);
            }
        }
    }
}
</script>
