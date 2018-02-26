<template>

    <div class="comments">

        <div class="card">
            
            <header class="card-header">
                <p class="card-header-title">
                {{ title }}
                </p>
            </header>
            <div class="card-content nopadding">
                <div class="content comment-contents">
                    <div class="empty-block" v-if="items.length == 0">评论区空空如也,赶快来评论吧</div>

                    <div :id="index" :class="{'comment-content':true,'best-answer-style':isBestAnswer(comment)}" v-for="(comment,index) in items" v-else>
                    <comment :index="index" :comment="comment" @commentDelete="removeComment" :discussion-user="discussionUser" :best-answer="bestAnswer"></comment>
                    </div>
                    <div class="text-center">
                        <paginator :dataSet="dataSet" @changed="fetch"></paginator>
                    </div>

                </div>
            </div>
  
        </div>
        <new-comment @created="add"></new-comment>
    </div>

</template>

<script>

    import Comment from  './Comment.vue'
    import NewComment from './NewComment.vue'

    export default{
        props:['discussionUser','bestAnswer'],
        components:{
            Comment,
            NewComment

        },
        data(){
            return {
                dataSet:false,
                items:[],
            }
        },
        created(){
            this.fetch();
            console.log('success');
        },
        updated(){
            Prism.highlightAll()
        },
        methods:{
            fetch(page){
                axios.get(this.url(page)).then(this.refresh)
            },
            url(page)
            {
                if(!page)
                {
                    let query = location.search.match(/page=(\d+)/);
                    page = query ? query[1] : 1;
                }
                console.log(location.pathname);
                return `/api/v1${location.pathname}/comments?page=${page}`;
            },
            refresh({data}) {
                this.dataSet = data;
                this.items = data.data;

                window.scrollTo(0, 0);
            },
            add(data){
                this.items.push(data);
            },
            removeComment(index){

                this.items.splice(index, 1);

            },
            isBestAnswer(comment){
                if (! this.bestAnswer) return false;
                return comment.id === this.bestAnswer.id
            }

        },
        computed:{
            title(){

                if (this.isDiscussion){
                    return '回答';
                }
                return '评论';
            }
        },
        watch:{
            bestAnswer: {
                handler(comment,oldComment){


                    console.log('watch')
                    console.log(comment)
                    console.log(oldComment )
                    if (!oldComment){
                        return
                    }
                    if (!comment){
                        this.items = this.items.filter((item)=>{
                            return item.id !== oldComment.id
                        })
                        return
                    }
//                    if (comment.id === oldComment.id){
//                        this.bestAnswer = comment
//                        return
//                    }


                    this.items = this.items.map((item)=>{
                        if (item.id === comment.id){

                            return comment
                        }
                        return item
                    })

                },
                deep:true
            }

        }
    }

</script>