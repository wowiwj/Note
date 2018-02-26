<script>

    import SubscribeSubject from '../components/SubscribeSubject.vue'
    import FavoriteSubject from '../components/FavoriteSubject.vue'
    import BestAnswer from '../components/BestAnswer.vue'

    export default{
        props:['initialCommentsCount','discussionId'],
        components:{
            'subject-subscribe': SubscribeSubject,
            'favorite-subject': FavoriteSubject,
            'best-answer' : BestAnswer
        },
        data(){
            return {
                commentsCount:this.initialCommentsCount,
                bestAnswer: null
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
                    let data = res.data.data
                    this.bestAnswer = comment

                    window.events.$emit('best-answer-update',comment);
                    console.log(res.data);


                });


            },
            fetchBestAnswer(){
                axios.get('/api/v1/discussions/'+this.discussionId + '/' + 'best_answer').then((res)=>{
                    console.log(res.data);
                    this.bestAnswer =res.data.data
                });

            }

        },
        created(){

            window.events.$on('answer-select',function (comment) {

                this.makeBestAnswer(comment);
            }.bind(this));

            window.events.$on('change-best-answer',function (comment) {

                this.bestAnswer = comment
            }.bind(this));
            this.fetchBestAnswer()

        }
    }
</script>