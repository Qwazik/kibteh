<template>
    <div class="content">
        <div class="notfound">
            По запроcу <code>{{url}}</code> ничего не найдено
        </div>
    </div>
</template>


<style lang="scss">
    .notfound{
        text-align: center;
        font-size: 2rem;
        color: #333;
    }
</style>

<script>
export default{
    data(){
        return {
            url: null
        }
    },
    mounted: function(){
        this.url = location.pathname
    }
}
</script>