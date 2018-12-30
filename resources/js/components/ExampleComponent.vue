<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">

                        <div class="form-group">
                            <label class="col-sm-2  control-label">地址</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" v-model="url"/>
                            </div>
                        </div>

                        <div>
                            <a class="btn btn-sm btn-danger" v-on:click="submit">发送请求</a>
                        </div>
                        <div>
                            <textarea class="form-control" rows="5" placeholder="返回结果"
                                      v-model="res"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                url:'http://voltage.test/test',
                res:'',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            submit(){
                axios.get(this.url).then(response => {
                    this.res = response.data.content;
                }).catch(error => {
                    this.res = error.response.data;
                });
            }
        }
    }
</script>
