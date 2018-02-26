<template>

    <div class="card best-answer" v-if="bestAnswer">
        <header class="card-header">
            <p class="card-header-title">
                最佳答案
            </p>
        </header>

        <div class="card-content nopadding">
            <div class="content comment-contents">
                <div class="comment-content">
                    <comment :comment="bestAnswer"></comment>
                </div>

            </div>
        </div>
    </div>


</template>

<script>
    import Comment from './Comment.vue'

    export default {
        props:['discussionId'],
        components: {
            Comment
        },
        data(){
            return {
                bestAnswer:null
            }
        },
        created(){

            window.events.$on('best-answer-update',(comment)=>{
                this.bestAnswer = comment
            });

            this.fetch()
        },
        methods:{

            fetch(){
                axios.get('/api/v1/discussions/'+this.discussionId + '/' + 'best_answer').then((res)=>{
                    console.log(res.data);
                    this.bestAnswer =res.data.data
                });

            }
        }
    }


</script>


<style lang="scss">
    .best-answer {
        margin-top: 20px;
        .card-header {
            background-color: #00d1b2;
            .card-header-title {
                color: #fff;
            }
        }
        .comment-contents{

            margin-top: 20px;
        }
    }
</style>