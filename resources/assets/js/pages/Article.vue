<script>

    import SubscribeSubject from '../components/SubscribeSubject.vue'
    import FavoriteSubject from '../components/FavoriteSubject.vue'

    export default{
        props:['initialCommentsCount','articleId'],
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
                    message: '确定要删除这篇文章么?',
                    confirmText: '删除',
                    cancelText: '取消',
                    onConfirm: () => this.deleteArticle()
                })
            },
            deleteArticle(){

                axios.delete('/api/v1/articles/' + this.articleId).then((data)=>{

                    this.$toast.open({
                        message: '删除成功!',
                        type: 'is-success'

                    })

                    window.location.href = '/articles';

                }).catch((error)=>{

                    console.log(error)

                })


            }


        }
    }
</script>