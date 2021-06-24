const app = new Vue({
    el: '#root',
    data: {
        albums: null
    },
    methods: {

    },
    mounted() {
        axios.
            get("/php-ajax-dischi/milestone_2/api/album.php")
            .then(resp => {

                this.albums = resp.data;
            })
    }
})