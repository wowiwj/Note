<template>

    <div class="comment">

        <div v-for="(comment,index) in items">
            <comment :comment="comment"></comment>
        </div>
        <div class="text-center">
            <paginator :dataSet="dataSet" @changed="fetch"></paginator>
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
        methods:{
            fetch(page){
                axios.get(this.url(page)).then(this.refresh);
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

            }

        }
    }

</script>