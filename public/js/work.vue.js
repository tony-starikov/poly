const Work = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" ' +
            'class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
            'style="height: 74vh; background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
        '>' +
            '<div id="container"' +
                'class="row p-0 m-0 text-center d-flex overflow-auto" ' +
                'style="scrollbar-width: none; ' +
                        'height: 60vh; ' +
                        'color: rgb(255,255,255); ' +
                        'box-sizing: border-box; ' +
                        'border: 10px solid black; ' +
                        'max-width: 85%; ' +
                        'background-color: rgba(0,0,0,0.5);' +
                        'border-radius: 25px;"' +
            '>' +

                '<div class="col-md-9 m-0 p-0" style="background-color: rgba(0,0,0,0);">' +

                    '<img\n' +
                        'v-bind:src="/images/ + image_1"\n' +
                        'alt="..."\n' +
                        'width="100%"\n' +
                        'style="border-radius: 0 0 0 0;"\n' +
                        'class="p-0 m-0"\n' +
                    '/>' +

                    '<video class="mb-1"\n' +
                            'width="100%"\n' +
                            'height="auto"\n' +
                            'controls="controls"\n' +
                            'loop autoplay>\n' +
                        '<source v-bind:src="/images/ + video_mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'>\n' +
                        '<source v-bind:src="/images/ + video_webm" type=\'video/webm; codecs="vp8, vorbis"\'>\n' +
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

                '<div class="col-md-3 m-0 text-start" style="background-color: rgba(0,0,0,0.6);">' +
                    '<div class="sticky-top text-start m-0 p-2">' +

                        '<h4 class="fw-bolder">Artists</h4>' +

                        '<div class="row px-1">' +
                            '<div v-for="artist in artists" v-bind:key="artist.id" class="col-4 p-0 px-1">' +
                                    '<router-link :to="/artist/ + artist.code" class="text-decoration-none">\n' +
                                        '<div class="card hoverMe" style="border-radius: 10px; background-color: rgba(0,0,0,0.01);">\n' +
                                            '<img ' +
                                                'v-bind:src="/images/ + artist.image_sqr"\n' +
                                                'class="img-fluid"\n' +
                                                'style="border-radius: 10px;"' +
                                            '/>\n' +
                                        '</div>\n' +
                                        '<div class="py-1 showMe">' +
                                            '<p class="text-decoration-none m-0 text-white" style="font-size: .8rem; line-height: normal; opacity: 0.7">{{ artist.name }}</p>' +
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
                            '<div v-for="soft in software" v-bind:key="soft.id" class="col-lg-3 col-md-3 p-0 ms-2">' +
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
                image_sqr: '',
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
        scrollToTop() {
            const container = this.$el.querySelector("#container");
            container.scrollTop = -container.scrollHeight;
        },

        hasHistory () { return window.history.length > 2 },

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
                    this.video_mp4 = res.work.video_mp4;
                    this.video_webm = res.work.video_webm;
                })
        }
    }

}
