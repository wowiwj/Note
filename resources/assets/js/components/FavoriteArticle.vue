<template>

    <div class="favorite-article">
        <i @click="toggleFavorite" v-if="isFavorited" class="fa fa-heart" aria-hidden="true"></i>
        <i @click="toggleFavorite" v-else="isFavorited"  class="fa fa-heart-o" aria-hidden="true"></i>
        <span class="favorite-count">{{ favoritesCount }}</span>

        <div class="favorite-users" style="position: relative">

            <div v-for="favorite in favoritesList" class="favorite-user">
                <!--<div style="position:absolute;overflow: visible;top: -110px;width: 200px" class="user-info-card box">-->
                    <!--<article class="media">-->
                        <!--<div class="media-left">-->
                            <!--<figure class="image is-64x64">-->
                                <!--<img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">-->
                            <!--</figure>-->
                        <!--</div>-->
                        <!--<div class="media-content">-->
                            <!--<div class="content">-->
                                <!--<p>-->
                                    <!--<strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>-->
                                    <!--<br>-->
                                    <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.-->
                                <!--</p>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</article>-->
                <!--</div>-->
                <a :href="userLink(favorite.user.id)">
                    <img :src="favorite.user.avatar" :alt="favorite.user.name">
                </a>
            </div>

            <a @click="fetchFavorites(++meta.current_page)" v-show="shouldLoadMore" class="button is-white is-small is-rounded">...</a>
        </div>


    </div>

</template>

<script>
    export default {
        props:['favorites_count','is_favorited','article_id'],
        data(){
            return {
                isFavorited: this.is_favorited,
                favoritesList: [],
                favoritesCount: this.favorites_count,
                links:[],
                meta:[]
            }
        },
        methods:{

            toggleFavorite(){
                this.isFavorited ? this.unFavorite() : this.favorite();
            },
            favorite(){

                axios.post('/api/v1/favorites',{
                    'type':'article',
                    'type_id':this.article_id
                }).then((res)=>{

                    let data = res.data.data
                    console.log(data)
                    this.favoritesList.unshift(data)

                    this.isFavorited = true
                    this.favoritesCount++;

                    console.log(res.data);
                }).catch((err)=>{
                    console.log(err.response.data);

                });


            },
            unFavorite(){
                axios.post('/api/v1/favorites?_method=delete',{
                    'type':'article',
                    'type_id':this.article_id
                }).then((data)=>{
                    this.isFavorited = false;
                    let userItem = this.favoritesList.filter((item)=>{
                        return item.user.id === window.App.user.id
                    }).pop()

                    let index = this.favoritesList.indexOf(userItem)

                    console.log(index)
                    this.favoritesList.splice(index,1)


                    this.favoritesCount--;
                }).catch((err)=>{
                });
            },
            fetchFavorites(page = 1){
                console.log('---'+page)
                axios.get('/api/v1/article/'+ this.article_id +'/favorites?page='+page).then((res)=>{

                    let result = res.data

                    let data = result.data

                    this.links = result.links
                    this.meta = result.meta

                    console.log(res.data)

                    if (page === 1){
                        this.favoritesList = data
                        return
                    }

                    this.favoritesList.push.apply(this.favoritesList,data);

                    console.log(res.data);

                });

                console.log('1')

            },
            userLink(userID){
                return '/users/'+userID;
            }

        },
        created(){
            this.fetchFavorites()
        },
        computed:{
            shouldLoadMore(){
                if (! this.meta ){
                    return false
                }
                return this.meta.current_page < this.meta.last_page
            }

        }

    }

</script>