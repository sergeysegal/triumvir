<template>
    <div id="career-page-selector">
        <a class="career-page-selector-link" v-for="(name, i) in title" @click="current = i" :class="{current:i == current}">{{name}}</a>
        <div class="career-page-selector-output">
            {{test[2]}}
            {{test2}}
            {{title[current]}}
            {{title_text[current]}}
        </div>
    </div>
</template>

<script>
    export default {
        name: "career-page-selector",
        props: {test: Array, test2: String},//['test'],
        data(){
            return {
                current:0,
                title:['Our Mission','Our Vision','Our Culture'],
                title_text: ['blah1', 'blah2', 'blah3']
            }
        }
    }

</script>

<style scoped>
    .career-page-selector-link{
        display:inline-block;
        padding:10px;
        background:rgb(53,73,94);
        color:white;
        cursor:pointer;
        transition:0.2s;
    }
    .career-page-selector-link:hover{
        color: orange;
        /*transform:scale(1.2);*/
        box-shadow:1px 1px 3px rgba(0,0,0,0.5);
        transition:all 0s, background 0.2s;
        z-index:10;
    }
    .current{
        background:rgb(56,184,131);
    }
    .career-page-selector-output{
        padding:10px;
        background:white;
    }
</style>
