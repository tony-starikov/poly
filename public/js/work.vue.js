const Work = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" ' +
            'class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
            'style="height: 74vh; background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
        '>' +
            '<div ' +
                'class="row p-0 text-center d-flex overflow-auto" ' +
                'style="scrollbar-width: none; ' +
                        'height: 60vh; ' +
                        'color: rgb(255,255,255); ' +
                        'box-sizing: border-box; ' +
                        'border: 10px solid black; ' +
                        'max-width: 85%; ' +
                        'background-color: rgba(0,0,0,0.5);' +
                        'border-radius: 25px;"' +
            '>' +

                '<div class="col-md-9 p-0" style="background-color: rgba(0,0,0,1);">' +

                    '<img\n' +
                        'v-bind:src="/images/ + image_1"\n' +
                        'alt="..."\n' +
                        'width="100%"\n' +
                        'style="border-radius: 25px 0 0 0;"\n' +
                        'class="mb-1"\n' +
                    '/>' +

                    '<video class="mb-1"\n' +
                            'width="100%"\n' +
                            'height="auto"\n' +
                            'controls="controls"\n' +
                            'loop autoplay>\n' +
                        '<source src="{{ video_mp4 }}" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'>\n' +
                        '<source src="{{ video_webm }}" type=\'video/webm; codecs="vp8, vorbis"\'>\n' +
                        'Video error\n' +
                    '</video>' +

                    '<img\n' +
                        'v-bind:src="/images/ + image_2"\n' +
                        'alt="..."\n' +
                        'width="100%"\n' +
                        'style="border-radius: 25px 0 0 0;"\n' +
                        'class="mb-1"\n' +
                    '/>' +

                    '<iframe\n' +
                        'width=\'100%\'\n' +
                        'height=\'400px\'\n' +
                        'src="https://www.artstation.com/embed/665067"\n' +
                        'frameborder=\'0\' allowfullscreen\n' +
                        'mozallowfullscreen=\'true\'\n' +
                        'webkitallowfullscreen=\'true\'\n' +
                        'onmousewheel=\'true\'\n' +
                        'scrolling=\'no\'>\n' +
                    '</iframe>' +

                    '<img\n' +
                        'v-bind:src="/images/ + image_3"\n' +
                        'alt="..."\n' +
                        'width="100%"\n' +
                        'class="mb-1"\n' +
                        'style="background-color: rgba(0, 0, 0, 0.90);border-radius: 0 0 0 25px;"\n' +
                    '/>' +

                '</div>' +

                '<div class="col-md-3 text-start" style="background-color: rgba(0,0,0,0); border-radius: 0 25px 25px 0;">' +
                    '<div class="sticky-top text-start">' +

                        '<h4 class="fw-bolder pt-2">Artists</h4>' +

                        '<div class="row p-0">' +
                            '<div v-for="artist in artists" v-bind:key="artist.id" class="col-lg-3 col-md-3 p-0 ms-2">' +
                                    '<router-link :to="/artist/ + artist.code" class="text-decoration-none">\n' +
                                        '<div class="card rounded border-0 hoverMe" style="background-color: rgba(0,0,0,0.01);">\n' +
                                            '<img ' +
                                                'v-bind:src="/images/ + artist.image"\n' +
                                                'class="img-fluid rounded"\n' +
                                            '/>\n' +
                                        '</div>\n' +
                                        '<div class="showMe">' +
                                            '<small class="text-decoration-none text-white" style="opacity: 0.7">{{ artist.name }}</small>' +
                                        '</div>' +
                                    '</router-link>\n' +
                            '</div>' +
                        '</div>' +

                        '<hr size="4" class="rounded-pill mt-0" style="width: 60%; opacity: 1;">' +

                        '<h4 class="fw-bolder">{{ name }}</h4>' +

                        '<p class="text-white" style="opacity: 0.8">\n' +
                            '{{ description }}\n' +
                        '</p>' +

                        '<hr size="4" class="rounded-pill" style="width: 60%; opacity: 1;">' +

                        '<h4 class="fw-bolder">Software Used</h4>' +

                        '<div class="row">' +
                            '<div v-for="soft in software" v-bind:key="soft.id" class="col-lg-2 col-md-2 p-0 ms-2">' +
                                '<figure class="figure m-1">\n' +
                                    '<img\n' +
                                        'v-bind:src="/images/ + soft.image"\n' +
                                        'class="figure-img img-fluid rounded shadow-3 m-0"\n' +
                                        'alt="..."\n' +
                                        'width="50px"\n' +
                                    '/>\n' +
                                    '<figcaption class="figure-caption">{{ soft.name }}</figcaption>\n' +
                                '</figure>' +
                            '</div>' +
                        '</div>' +

                    '</div>' +

                '</div>' +

            '</div>' +
        '</div>',

    data() {
        return {
            id: '',
            name: '',
            description: '',
            image_1: '',
            image_2: '',
            image_3: '',
            video_mp4: '',
            video_webm: '',
            marmoset: '',
            artists: [],
            artist: {
                id: '',
                code: '',
                name: '',
                image: '',
            },
            software: [],
            soft: {
                id: '',
                name: '',
                image: '',
            },
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            page_url = '/api/work/' + this.$route.params.code;
            fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    console.log(res.work);
                    console.log(this.$route.params);
                    this.artists = res.artists;
                    this.software = res.software;
                    this.name = res.work.name;
                    this.description = res.work.description;
                    this.image_1 = res.work.image_1;

                })
        }
    }

}
