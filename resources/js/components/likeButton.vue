<template>
    <div>
        <a @click="likePost"><img :src="url" style="max-width: 30px"></a>
    </div>
</template>

<script>
    export default {
        props: ['postId', 'likes'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return {
                status: this.likes,
            }
        },

        methods: {
            likePost() {
           		axios.post('/like/' + this.postId)
                .then(response => {
                	this.status = ! this.status;
                    console.log(response.data);
                });
            }
        },

        computed: {
            url() {
                // alert(this.status);
                return (this.status) ? '/storage/extra/thumbs-up-hand-symbol.png' : '/storage/extra/thumbs-up.png';
            }
        }
    }
</script>
