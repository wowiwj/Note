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

        }
    }
</script>