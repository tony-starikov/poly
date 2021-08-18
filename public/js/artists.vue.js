const Artists = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" ' +
                'class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
                'style="height: 74vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
                '<div id="container"' +
                    'class="row p-0 text-center d-flex overflow-auto" ' +
                    'style="scrollbar-width: none; ' +
                            'height: 60vh; ' +
                            'color: rgb(255,255,255); ' +
                            'box-sizing: border-box; ' +
                            'max-width: 85%;' +
                            // 'border: 1px solid;' +
                            // 'border-color: rgba(0,0,0,0);' +
                            'background-color: rgba(0,0,0,0);' +
                            // 'border-radius: 25px;' +
                '">' +
                    '<div v-for="artist in artists" v-bind:key="artist.id" class="col-lg-3 col-md-6 p-1">' +
                        '<router-link :to="/artist/ + artist.code">' +
                            '<div class="card my-card border-0" v-bind:style="{ borderTopLeftRadius: artist.top_left_corner + \'px\', borderTopRightRadius: artist.top_right_corner + \'px\', borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }">' +
                                '<img ' +
                                    'v-bind:src="/images/ + artist.image" class="img-fluid border-0" ' +
                                    // 'style="border: none; border-radius: artist.top_left_corner artist.top_right_corner artist.bottom_right_corner artist.bottom_left_corner;"' +
                                    'v-bind:style="{ borderTopLeftRadius: artist.top_left_corner + \'px\', borderTopRightRadius: artist.top_right_corner + \'px\', borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }"' +
                                '/>' +
                                '<div class="my-overlay" v-bind:style="{ borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }">' +
                                    '<h4 class="m-0">{{ artist.name }}</h4>' +
                                    '<h6 class="p-0">{{ artist.position }}</h6>' +
                                '</div>' +
                            '</div>' +
                        '</router-link>' +
                    '</div>' +
                '</div>' +

                '<div class="m-5 position-absolute top-0 start-0">' +
                    '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
                        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
                    '</button>' +
                '</div>' +

                '<div class="m-5 position-absolute bottom-0 start-0">' +
                    '<button type="button" @click="scrollToTop()" class="btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
                        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
                    '</button>' +
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
                top_left_corner: '',
                top_right_corner: '',
                bottom_left_corner: '',
                bottom_right_corner: '',
            },
            artist_id: '',
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        scrollToTop() {
            const container = this.$el.querySelector("#container");
            container.scrollTop = -container.scrollHeight;
        },

        hasHistory () { return window.history.length > 2 },

        fetchData() {
            fetch('api/artists')
                .then(res => res.json())
                .then(res => {
                    console.log(res.artists);
                    this.artists = res.artists;
                })
        },
    }

}
