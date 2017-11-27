<template>
  <ul class="pagination" v-if="shouldPaginate">
        <li v-show="prevUrl">
            <a href="#" aria-label="Previous" rel="prev" @click.prevent="page--">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li v-show="nextUrl">
            <a href="#" aria-label="Next" rel="next" @click.prevent="page++">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</template>

<script>
export default {
  props: ['dataSet'],
  data(){
    return {
        page: 1,
        prevUrl: false,
        nextUrl: false
    }
  },
  watch:{
        dataSet() {
                this.page = this.dataSet.meta.current_page;
                this.prevUrl = this.dataSet.links.prev;
                this.nextUrl = this.dataSet.links.next;
        },
        page() {
            this.broadcast().updateUrl();
        }

  },
  computed: {
        shouldPaginate() {
            return !! this.prevUrl || !! this.nextUrl;
        }
  },
  methods:{
        broadcast() {
                return this.$emit('changed', this.page);
        },
        updateUrl() {
            history.pushState(null, null, '?page=' + this.page);
        }
  }
}
</script>

