<script>

    export default{
        props:['initialCommentsCount'],
        data(){
            return {
                commentsCount:this.initialCommentsCount
            };
        }
    }
</script>