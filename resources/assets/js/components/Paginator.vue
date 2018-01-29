<template>
  <nav style="padding: 20px;" class="pagination is-rounded is-small" v-if="shouldPaginate">
      <a @click.prevent="page--" class="pagination-previous" title="This is the first page" :disabled="!prevUrl">&laquo;</a>
      <a @click.prevent="page++" class="pagination-next" :disabled="!nextUrl">&raquo;</a>
    </nav>
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

