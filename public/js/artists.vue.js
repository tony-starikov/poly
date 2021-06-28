const Artists = {
    template:
        '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">' +
                '<div class="row p-0 overflow-hidden" style="width: 85%; background-color: rgba(251, 251, 251, 0);border-radius: 25px;">' +
                    '<div v-for="artist in artists" v-bind:key="artist.id" class="col-lg-3 col-md-6 p-1" style="border-radius: 25px;">' +
                        '<router-link :to="/artist/ + artist.code">' +
                            '<div class="card bg-dark my-card">' +
                                '<img v-bind:src="/images/ + artist.image" class="img-fluid" style="border: none;"/>' +
                                '<div class="my-overlay">{{ artist.name }}</div>' +
                            '</div>' +
                        '</router-link>' +
                    '</div>' +
                '</div>' +
        '</div>',

    data() {
        return {
            artists: [],
            artist: {
                id: '',
                name: '',
                code: '',
                image: '',
            },
            artist_id: '',
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            fetch('api/artists')
                .then(res => res.json())
                .then(res => {
                    // console.log(res.works);
                    this.artists = res.artists;
                })
        },
    }

}
