<template>

    <div class="comment">

        <div class="panel panel-default">

            <div class="panel-heading">
                评论
            </div>
            <div class="panel-body comment-contents">

                <div class="empty-block" v-if="items.length == 0">评论区空空如也,赶快来评论吧</div>

                <div :id="index" class="comment-content" v-for="(comment,index) in items" v-else>
                    <comment :index="index" :comment="comment" @commentDelete="removeComment"></comment>
                </div>
                <div class="text-center">
                    <paginator :dataSet="dataSet" @changed="fetch"></paginator>
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

            $('[data-toggle="tooltip"]').tooltip()

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

            }

        }
    }

</script>