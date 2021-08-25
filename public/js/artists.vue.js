const Artists = {
    template:
    '<div>' +
        '<div v-bar="{useScrollbarPseudo: true}" ' +
                'class="container-fluid p-4 d-none d-sm-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
                'style="height: 74vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
                '<div id="container"' +
                    'class="row p-0 text-center d-flex align-content-start flex-wrap overflow-auto" ' +
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

                    '<div v-for="artist in artists" v-bind:key="artist.id" class="d-none d-sm-none d-md-block d-lg-block d-xl-none d-xxl-none col-6 p-1">' +
                        '<router-link :to="/artist/ + artist.code">' +
                            '<div class="card my-card border-0" v-bind:style="{ borderTopLeftRadius: artist.top_left_corner + \'px\', borderTopRightRadius: artist.top_right_corner + \'px\', borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }">' +
                                '<img ' +
                                'v-bind:src="/images/ + artist.image" class="img-fluid border-0" ' +
                                'v-bind:style="{ borderTopLeftRadius: artist.top_left_corner + \'px\', borderTopRightRadius: artist.top_right_corner + \'px\', borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }"' +
                                '/>' +
                                '<div class="my-overlay" v-bind:style="{ borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }">' +
                                    '<h4 class="m-0">{{ artist.name }}</h4>' +
                                    '<h6 class="p-0">{{ artist.position }}</h6>' +
                                '</div>' +
                            '</div>' +
                        '</router-link>' +
                    '</div>' +

                    '<div v-for="artist in artists" v-bind:key="artist.id" class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block col-3 p-1">' +
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

                '<div class="ms-xxl-4 ms-xl-3 ms-lg-3 ms-md-3 ms-sm-2 ms-1 mt-5 position-absolute top-0 start-0">' +
                    '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="d-none d-lg-block d-xl-block d-xxl-block btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
                        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
                    '</button>' +
                    '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none btn btn-circle btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
                        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
                    '</button>' +
                '</div>' +

                '<div class="ms-xxl-4 ms-xl-3 ms-lg-3 ms-md-3 ms-sm-2 ms-1 mb-5 position-absolute bottom-0 start-0">' +
                    '<button type="button" @click="scrollToTop()" class="d-none d-lg-block d-xl-block d-xxl-block btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
                        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
                    '</button>' +
                    '<button type="button" @click="scrollToTop()" class="d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none btn btn-circle btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
                        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
                    '</button>' +
                '</div>' +

        '</div>' +

        '<div class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
        'style="background-color: rgba(255,255,255,0);border-radius: 25px;"' +
        '>' +
            '<div id="container"' +
            'class="row p-0 m-0 text-center d-flex align-content-start flex-wrap overflow-auto" ' +
            'style="scrollbar-width: none; ' +
            'color: rgb(255,255,255); ' +
            'box-sizing: border-box; ' +
            'max-width: 100%;' +
            'background-color: rgba(0,0,0,0);' +
            '">' +

                '<div v-for="artist in artists" v-bind:key="artist.id" class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none col-12 p-1 px-0">' +
                    '<router-link :to="/artist/ + artist.code">' +
                        '<div class="card my-card bg-transparent border-0" v-bind:style="{ borderTopLeftRadius: artist.top_left_corner + \'px\', borderTopRightRadius: artist.top_right_corner + \'px\', borderBottomRightRadius: artist.bottom_right_corner + \'px\', borderBottomLeftRadius: artist.bottom_left_corner + \'px\' }">' +
                            '<img ' +
                            'v-bind:src="/images/ + artist.image" class="img-fluid border-0" ' +
                            // 'style="border: none; border-radius: artist.top_left_corner artist.top_right_corner artist.bottom_right_corner artist.bottom_left_corner;"' +
                            'v-bind:style="{ borderTopLeftRadius: artist.small_top_left_corner + \'px\', borderTopRightRadius: artist.small_top_right_corner + \'px\', borderBottomRightRadius: artist.small_bottom_right_corner + \'px\', borderBottomLeftRadius: artist.small_bottom_left_corner + \'px\' }"' +
                            '/>' +

                            '<div class="my-overlay-mobile" v-bind:style="{ borderBottomRightRadius: artist.small_bottom_right_corner + \'px\', borderBottomLeftRadius: artist.small_bottom_left_corner + \'px\' }">' +
                                '<h4 class="m-0">{{ artist.name }}</h4>' +
                                '<h6 class="p-0">{{ artist.position }}</h6>' +
                            '</div>' +
                        '</div>' +
                    '</router-link>' +
                '</div>' +

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
                top_left_corner: '',
                top_right_corner: '',
                bottom_left_corner: '',
                bottom_right_corner: '',
                small_top_left_corner: '',
                small_top_right_corner: '',
                small_bottom_left_corner: '',
                small_bottom_right_corner: '',
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
