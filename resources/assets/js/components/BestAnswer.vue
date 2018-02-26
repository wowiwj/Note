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
                    <comment :comment="bestAnswer" :best-answer="bestAnswer"></comment>
                </div>

            </div>
        </div>
    </div>


</template>

<script>
    import Comment from './Comment.vue'

    export default {
        props:['discussionId','bestAnswer'],
        components: {
            Comment
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