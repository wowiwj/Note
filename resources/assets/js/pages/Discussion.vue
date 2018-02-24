<script>

    import SubscribeSubject from '../components/SubscribeSubject.vue'
    import FavoriteSubject from '../components/FavoriteSubject.vue'

    export default{
        props:['initialCommentsCount','discussionId'],
        components:{
            'subject-subscribe': SubscribeSubject,
            'favorite-subject': FavoriteSubject
        },
        data(){
            return {
                commentsCount:this.initialCommentsCount
            };
        },
        methods: {
            confirmDelete(){

                this.$dialog.confirm({
                    message: '确定要删除这篇讨论么?',
                    confirmText: '删除',
                    cancelText: '取消',
                    onConfirm: () => this.deleteDiscussion()
                })
            },
            deleteDiscussion(){

                axios.delete('/api/v1/discussions/' + this.discussionId).then((data)=>{

                    this.$toast.open({
                        message: '删除成功!',
                        type: 'is-success'

                    })

                    window.location.href = '/discussions';

                }).catch((error)=>{

                    console.log(error)

                })
            },
            makeBestAnswer(comment){
                axios.post('/api/v1/discussions/'+this.discussionId + '/' + 'best_answer',{
                    'comment_id':comment.id
                }).then((res)=>{
                    console.log(res.data);


                });


            }

        },
        created(){
            window.events.$on('answer-select',function (comment) {
                this.makeBestAnswer(comment);
            }.bind(this));
        }
    }
</script>