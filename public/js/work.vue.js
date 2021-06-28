const Work = {
    template:
        '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">' +
            '<div class="row p-0 overflow-hidden" style="box-sizing: border-box; width: 85%; background-color: rgba(0,0,0,1);border-radius: 25px;">' +

                '<div class="col-md-8 p-0" style="background-color: rgba(0, 0, 0, 0.1);border-radius: 25px;">' +

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

                '<div class="col-md-4 p-3 text-start sticky-top" style="background-color: rgba(0,0,0,0.01);border-radius: 0 25px 25px 0;">' +

                    '<h2>Artists</h2>' +

                    '<div v-for="artist in artists" v-bind:key="artist.id">' +
                        '<figure class="figure">\n' +
                            '<router-link :to="/artist/ + artist.code">\n' +
                                '<div class="card my-card" style="border-radius: 10px;">\n' +
                                    '<img ' +
                                        'v-bind:src="/images/ + artist.image"\n' +
                                        'class="img-fluid"\n' +
                                        'style="border-radius: 10px;"\n' +
                                        'width="100px"\n' +
                                    '/>\n' +
                                    '<div class="my-overlay">' +
                                        '<small style="font-size: 15px;">{{ artist.name }}</small>' +
                                    '</div>\n' +
                                '</div>\n' +
                            '</router-link>\n' +
                        '</figure>' +
                    '</div>' +

                    '<hr size="5" class="w-50">' +

                    '<h1>{{ name }}</h1>' +

                    '<p>\n' +
                        '{{ description }}\n' +
                    '</p>' +

                    '<hr size="5" class="w-50">' +

                    '<h2>Software Used</h2>' +

                    '<div v-for="soft in software" v-bind:key="soft.id">' +
                        '<figure class="figure m-1">\n' +
                            '<img\n' +
                                'v-bind:src="/images/ + soft.image"\n' +
                                'class="figure-img img-fluid rounded shadow-3 mb-3"\n' +
                                'alt="..."\n' +
                                'width="50px"\n' +
                            '/>\n' +
                            '<figcaption class="figure-caption">{{ soft.name }}</figcaption>\n' +
                        '</figure>' +
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
                    this.image_1 = res.work.image_1;

                })
        }
    }

}
