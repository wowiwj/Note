<template>

    <div class="card m-t-20">
        <header class="card-header">
            <p class="card-header-title">
                文章归档
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
                查看全部
            </a>
        </header>
        <div class="card-content">
            <div class="content">
                <nav class="panel">
                    <a class="panel-block" v-for="item in currentItems" :href="makeUrl(item)">
                        <span class="panel-icon">
                            <i class="fas fa-book"></i>
                        </span>
                        {{ getName(item) }}
                        <span style="margin-left: 0.5rem;font-size: 1rem;color: #aaa">({{ item.published }})</span>
                    </a>

                    <div class="panel-block" v-show="isShowLoadMore" @click="showLoadMore">
                        <button class="button is-link is-outlined is-fullwidth">
                            加载更多
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</template>


<script>

    export default{
        data(){
            return {
                items:[],
                currentItems:[],
                isShow:false,
                defaultCount:5
            }
        },
        created(){
            console.log('adadada')

            axios.get('/api/v1/articles/archive_dates').then((res)=>{
                let data = res.data.data;
                this.items.push(...data)
                this.currentItems = data.slice(0,this.defaultCount)
            });

        },
        methods:{
            getName:function (item) {
                return item.year + '年' + item.month + '月';
            },
            showLoadMore:function () {
                this.currentItems = this.items
            },
            makeUrl:function (item) {
                return '/articles/archive/' + item.year + '/' + item.month;
            }
        },
        computed:{
            isShowLoadMore:function () {
                return this.currentItems.length < this.items.length
            }
        }

    }

</script>