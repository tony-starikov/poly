const Work = {
    template:
    '<div>' +
        '<div v-bar="{useScrollbarPseudo: true}" ' +
        'class="container-fluid p-4 d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
        'style="height: 75vh; background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
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

        '<div class="col-md-9 m-0 p-0" style="background-color: black;">' +

        '<div v-for="file in files" v-bind:key="file.id" class="p-0 m-0">' +
            '<div v-if="file.type === \'image\'">' +
                '<img\n' +
                    'v-bind:src="/images/ + file.src"\n' +
                    'alt="..."\n' +
                    'width="100%"\n' +
                    'style="border-radius: 0 0 0 0;"\n' +
                    'class="p-0 m-0"\n' +
                '/>' +
            '</div>' +

            '<div v-else-if="file.type === \'gif\'">' +
                '<img\n' +
                'v-bind:src="/images/ + file.src"\n' +
                'alt="..."\n' +
                'width="100%"\n' +
                'style="border-radius: 0 0 0 0;"\n' +
                'class="p-0 m-0"\n' +
                '/>' +
            '</div>' +

            '<div v-else-if="file.type === \'marmoset\'">' +
                '<iframe\n' +
                    'style="width: 100%; height: 400px;" ' +
                    'v-bind:src="file.src"\n' +
                    'frameborder=\'0\' allowfullscreen\n' +
                    'mozallowfullscreen=\'true\'\n' +
                    'webkitallowfullscreen=\'true\'\n' +
                    'onmousewheel=\'true\'\n' +
                    'scrolling=\'no\'>\n' +
                '</iframe>' +
            '</div>' +

            '<div v-else-if="file.type === \'video\'">' +
                '<video class="m-0 p-0"\n' +
                'style="width: 100%; height: auto;" ' +
                'controls="controls" ' +
                'loop autoplay >' +
                    '<source v-bind:src="/images/ + file.video_mp4" type="video/mp4;">\n' +
                    '<source v-bind:src="/images/ + file.video_webm" type="video/webm;">\n' +
                    'Video error\n' +
                '</video>' +
            '</div>' +

        '</div>' +

        '</div>' +

        '<div class="col-md-3 m-0 p-0 ps-1 text-start" style="background-color: rgba(0,0,0,0.6);">' +
        '<div class="sticky-top text-start w-100 m-0 p-2">' +

        '<h4 class="fw-bolder">{{ field_artists }}</h4>' +

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
        '<p class="text-decoration-none m-0 text-white" style="font-size: .8rem; line-height: normal; opacity: 0.7">{{ artist.name_en }}</p>' +
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

        '<h4 class="fw-bolder">{{ field_software }}</h4>' +

        '<div class="row w-100 p-0 m-0">' +
        '<div v-for="soft in software" v-bind:key="soft.id" class="col-md-6 col-xl-4 p-0">' +
            '<figure class="figure">\n' +
            '<img\n' +
            'v-bind:src="/images/ + soft.image"\n' +
            'class="figure-img img-fluid rounded shadow-3 p-0 m-0"\n' +
            'alt="..."\n' +
            'style="max-width: 50px;"\n' +
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

        '</div>' +

        ////////////////////////////////////////

        '<div class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
        'style="background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
        '>' +
        '<div id="container"' +
        'class="row p-0 m-0 text-center d-flex overflow-auto" ' +
        'style="scrollbar-width: none; ' +
        'color: rgb(255,255,255); ' +
        'box-sizing: border-box; ' +
        'border: 10px solid black; ' +
        'max-width: 100%; ' +
        'background-color: rgba(0,0,0,0.5);' +
        'border-radius: 25px;"' +
        '>' +

        '<div class="col-md-9 m-0 p-0" style="background-color: black;">' +

        '<div v-for="file in files" v-bind:key="file.id" class="p-0 m-0">' +
        '<div v-if="file.type === \'image\'">' +
        '<img\n' +
        'v-bind:src="/images/ + file.src"\n' +
        'alt="..."\n' +
        'width="100%"\n' +
        'style="border-radius: 0 0 0 0;"\n' +
        'class="p-0 m-0"\n' +
        '/>' +
        '</div>' +

        '<div v-else-if="file.type === \'gif\'">' +
        '<img\n' +
        'v-bind:src="/images/ + file.src"\n' +
        'alt="..."\n' +
        'width="100%"\n' +
        'style="border-radius: 0 0 0 0;"\n' +
        'class="p-0 m-0"\n' +
        '/>' +
        '</div>' +

        '<div v-else-if="file.type === \'marmoset\'">' +
        '<iframe\n' +
        'style="width: 100%; height: 400px;" ' +
        'v-bind:src="file.src"\n' +
        'frameborder=\'0\' allowfullscreen\n' +
        'mozallowfullscreen=\'true\'\n' +
        'webkitallowfullscreen=\'true\'\n' +
        'onmousewheel=\'true\'\n' +
        'scrolling=\'no\'>\n' +
        '</iframe>' +
        '</div>' +

        '<div v-else-if="file.type === \'video\'">' +
        '<video class="m-0 p-0"\n' +
        'style="width: 100%; height: auto;" ' +
        'controls="controls" ' +
        'loop autoplay >' +
        '<source v-bind:src="/images/ + file.video_mp4" type="video/mp4;">\n' +
        '<source v-bind:src="/images/ + file.video_webm" type="video/webm;">\n' +
        'Video error\n' +
        '</video>' +
        '</div>' +

        '</div>' +

        '</div>' +

        '<div class="col-md-3 m-0 text-start" style="background-color: rgba(0,0,0,0.6);">' +
        '<div class="sticky-top text-start m-0 p-2">' +

        '<h4 class="fw-bolder">{{ field_artists }}</h4>' +

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
        '<p class="text-decoration-none m-0 text-white" style="font-size: .8rem; line-height: normal; opacity: 0.7">{{ artist.name_en }}</p>' +
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

        '<h4 class="fw-bolder">{{ field_software }}</h4>' +

        '<div class="row p-2">' +
            '<div v-for="soft in software" v-bind:key="soft.id" class="col-3 col-sm-3 p-0 m-0">' +
                '<figure class="figure m-0">\n' +
                '<img\n' +
                    'v-bind:src="/images/ + soft.image"\n' +
                    'class="figure-img img-fluid rounded shadow-3 m-0"\n' +
                    'alt="..."\n' +
                    // 'style="max-width: 50px;"' +
                '/>\n' +
                '<figcaption class="figure-caption">{{ soft.name }}</figcaption>\n' +
                '</figure>' +
            '</div>' +
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
            field_artists: '',
            field_software: '',
            artists: [],
            artist: {
                id: '',
                code: '',
                name_en: '',
                image_sqr: '',
            },
            software: [],
            soft: {
                id: '',
                name: '',
                image: '',
            },
            files: [],
            file: {
                id: '',
                type: '',
                src: '',
                video_mp4: '',
                video_webm: '',
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
                    console.log(res.work.name_en);
                    this.files = res.files;
                    this.artists = res.artists;
                    this.software = res.software;
                    this.name = res.work.name_en;
                    this.description = res.work.description_en;
                    this.field_artists = res.fields.field_artists_en;
                    this.field_software = res.fields.field_software_en;
                })
        }
    }

}
