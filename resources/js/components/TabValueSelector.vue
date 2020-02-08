<template>
    <div id="tab-value-selector">
        <div class="links">
            <a class="link" v-for="(name, i) in titles" @click="current = i" :class="{current:i == current}">{{name}}</a>
        </div>
        <div class="output">
            <div class="title">
                {{titles[current]}}
            </div>
            <div class="description">
                {{descriptions[current]}}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "tab-value-selector",
        props: {titles: Array, descriptions: Array},
        data(){
            return {
                current:0,
                // title:['Our Mission','Our Vision','Our Culture'],
            }
        }
    }

</script>

<style scoped>
    #tab-value-selector .link {
        display:inline-block;
        padding:10px;
        background:rgb(53,73,94);
        color:white;
        cursor:pointer;
        transition:0.2s;
    }
    #tab-value-selector .link:hover{
        color: lightblue;
        /*transform:scale(1.2);*/
        box-shadow:1px 1px 3px rgba(0,0,0,0.5);
        transition:all 0s, background 0.2s;
        z-index:10;
    }
    #tab-value-selector .current{
        background:rgb(56,184,131);
    }

</style>
