const Artist = {
    template:
    '<div>' +
        '<div v-bar="{useScrollbarPseudo: true}" ' +
        'class="container-fluid p-4 d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
        'style="' +
        'background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
        '>' +
        '<div id="container"' +
        'class="row p-0 m-0 text-center d-flex overflow-auto" ' +
        'style="scrollbar-width: none; ' +
        // 'height: 60vh; ' +
        'color: rgb(255,255,255); ' +
        'box-sizing: border-box; ' +
        'border: 10px solid black; ' +
        'max-width: 85%; ' +
        'background-color: rgba(0,0,0,0.5);' +
        'border-radius: 25px;"' +
        '>' +
        '<div class="col-md-8 text-start" style="background-color: rgba(0, 0, 0, 0);">' +

        '<h4 class="fw-bolder pt-2">{{ name }}</h4>' +

        '<h5 class="fw-bolder">{{ position }}</h5>' +

        '<hr size="4" class="rounded-pill" style="width: 60%; opacity: 1;">' +

        '<p class="text-white" style="width: 80%;opacity: 0.8">\n' +
        '{{ description }}\n' +
        '</p>' +

        '<hr size="4" class="rounded-pill" style="width: 60%; opacity: 1;">' +

        '<p>' +
        '{{ social }}' +
        '</p>\n' +

        '</div>' +

        '<div class="col-md-4 p-0">' +
        '<img\n' +
        'v-bind:src="/images/ + image"\n' +
        'class="card-img img-fluid"\n' +
        'alt="..."\n' +
        '/>\n' +
        '</div>' +

        '</div>' +

        '<div class="ms-xxl-4 ms-xl-3 ms-lg-3 ms-md-3 ms-sm-2 ms-1 mt-5 position-absolute top-0 start-0">' +
        '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +

        '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="d-block d-sm-block d-md-block d-lg-block d-xl-none d-xxl-none btn btn-circle btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +
        '</div>' +

        '<div class="ms-xxl-4 ms-xl-3 ms-lg-3 ms-md-3 ms-sm-2 ms-1 mb-5 position-absolute bottom-0 start-0">' +
        '<button type="button" @click="scrollToTop()" class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +

        '<button type="button" @click="scrollToTop()" class="d-block d-sm-block d-md-block d-lg-block d-xl-none d-xxl-none btn btn-circle btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +
        '</div>' +

        '</div>' +

        ///////////////////////////////////

        '<div class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
        'style="' +
        'background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
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
        '<div class="col-md-8 text-start" style="background-color: rgba(0, 0, 0, 0);">' +

        '<h4 class="fw-bolder pt-2">{{ name }}</h4>' +

        '<h5 class="fw-bolder">{{ position }}</h5>' +

        '<hr size="4" class="rounded-pill" style="width: 60%; opacity: 1;">' +

        '<p class="text-white" style="width: 80%;opacity: 0.8">\n' +
        '{{ description }}\n' +
        '</p>' +

        '<hr size="4" class="rounded-pill" style="width: 60%; opacity: 1;">' +

        '<p>' +
        '{{ social }}' +
        '</p>\n' +

        '</div>' +

        '<div class="col-md-4 p-0">' +
        '<img\n' +
        'v-bind:src="/images/ + image"\n' +
        'class="card-img img-fluid"\n' +
        'alt="..."\n' +
        '/>\n' +
        '</div>' +

        '</div>' +

        '</div>' +
    '</div>',


    data() {
        return {
            id: '',
            name: '',
            position: '',
            social: '',
            description: '',
            image: '',
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
            page_url = '/api/artist/' + this.$route.params.code;
            fetch(page_url)
                .then(res => res.json())
                .then(res => {
                    console.log(res.artist);
                    console.log(this.$route.params);
                    this.name = res.artist.name_de;
                    this.position = res.artist.position_de;
                    this.social = res.artist.social;
                    this.description = res.artist.description_de;
                    this.image = res.artist.image;
                })
        }
    }

}
