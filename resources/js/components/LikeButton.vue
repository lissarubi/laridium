<template>
    <div>
        <button @click="likeArticle" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'likes'],

        mounted() {
            console.log('Component mounted.')
        },
        data: function (){
            return {
                status: this.likes,
            }
        },

        methods: {
            async likeArticle(){
                status = await axios.post('/like/' + this.userId)
                this.status = ! this.status
            }
        },

        computed: {
            buttonText(){
                return (this.status) ? 'Unlike' : 'Like'
            }
        }
    }
</script>
