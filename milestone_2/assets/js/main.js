const app = new Vue({
    el: '#root',
    data: {
        albums: null
    },
    methods: {

    },
    mounted() {
        axios.
            get("./api/album.php")
            .then(resp => {

                this.albums = resp.data;
            })
    }
})