const Artists = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" ' +
                'class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
                'style="height: 74vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
                '<div ' +
                    'class="row p-0 text-center d-flex overflow-auto" ' +
                    'style="scrollbar-width: none; ' +
                            'height: 60vh; ' +
                            'color: rgb(255,255,255); ' +
                            'box-sizing: border-box; ' +
                            'max-width: 85%;' +
                            'border: 1px solid;' +
                            'border-color: rgba(0,0,0,0);' +
                            'background-color: rgba(0,0,0,0);' +
                            'border-radius: 25px;' +
                '">' +
                    '<div v-for="artist in artists" v-bind:key="artist.id" class="col-lg-3 col-md-6 p-0">' +
                        '<router-link :to="/artist/ + artist.code">' +
                            '<div class="card bg-dark my-card">' +
                                '<img v-bind:src="/images/ + artist.image" class="img-fluid" style="border: none;"/>' +
                                '<div class="my-overlay">' +
                                    '<h4 class="m-0">{{ artist.name }}</h4>' +
                                    '<h6 class="p-0">{{ artist.position }}</h6>' +
                                '</div>' +
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
                position: '',
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
