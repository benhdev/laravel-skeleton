<template>
    <div class="welcome">
        <div class="content">
            <!-- <img class="mb-2" src="/img/logotype.min.svg" /> -->
            <img class="mb-2" src="/img/icons/skeleton-solid.svg" />
            <h2 style="font-family: Bones;">Skeleton</h2>

            <div class="icons">
                <img src="/img/icons/laravel-brands.svg" data-bs-toggle="tooltip" title="Laravel... duhhh!" />
                <img class="ms-3" src="/img/icons/vuejs-brands.svg" data-bs-toggle="tooltip" title="VueJS"/>
                <img class="ms-3" src="/img/icons/sass-brands.svg" data-bs-toggle="tooltip" title="Sass" />
                <img class="ms-3" src="/img/icons/bootstrap-brands.svg" data-bs-toggle="tooltip" title="Bootstrap" />
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        let tooltipElements = document.querySelectorAll('[data-bs-toggle=tooltip]');
        let tooltip = [...tooltipElements].map(el => new this.$bootstrap.Tooltip(el));
    }
}
</script>
