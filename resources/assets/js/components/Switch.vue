<template>
    <input class="form-control" type="checkbox">
</template>

<script>
    require('bootstrap-switch')
    require('bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')

    module.exports = {
        props: {
            value: {
                type: Boolean,
                default: false
            }
        },
        mounted() {

            $.fn.bootstrapSwitch.defaults.size = 'mini';

            this.$nextTick(function () {
                let _this = this

                $(this.$el).bootstrapSwitch('state', this.value, this.value)

                $(this.$el).on('switchChange.bootstrapSwitch', function (event, state) {
                    _this.$emit('input', state)
                })
            })
        },
        watch: {
            value(val) {
                $(this.$el).bootstrapSwitch('state', val, val)
            }
        },
        beforeDestroy() {
            $(this.$el).bootstrapSwitch('destroy')
        }
    }
</script>
