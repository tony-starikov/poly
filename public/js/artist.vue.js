const Artist = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" ' +
            'class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
            'style="' +
        // 'height: 74vh; ' +
        'background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
        '>' +
            '<div id="container"' +
                'class="row p-0 text-center d-flex overflow-auto" ' +
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
                    this.name = res.artist.name;
                    this.position = res.artist.position;
                    this.social = res.artist.social;
                    this.description = res.artist.description;
                    this.image = res.artist.image;
                })
        }
    }

}
