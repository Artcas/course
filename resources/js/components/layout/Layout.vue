<template>
    <div class="pace">
        <HeaderComponent></HeaderComponent>
        <div id="main" class="layout-row flex">
            <Sidebar></Sidebar>
            <div id="content" class="flex">
                <router-view :key="$route.fullPath"></router-view>
            </div>
        </div>

    </div>
</template>

<script>

import HeaderComponent from "./partials/HeaderComponent";
import Sidebar from "./partials/SidebarComponent"
import Content from "./partials/ContentComponent"

export default {

    components : {
        HeaderComponent,
        Sidebar,
        Content
    },
    data() {
        return {

        }
    },
    methods: {

    },
    mounted() {

    }
}
</script>
