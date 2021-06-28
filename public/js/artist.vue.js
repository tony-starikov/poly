const Artist = {
    template:
        '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">' +
            '<div class="row p-0 overflow-hidden" style="box-sizing: border-box; width: 85%; background-color: rgba(0,0,0,1);border-radius: 25px;">' +

                '<div class="col-md-8 p-0" style="background-color: rgba(0, 0, 0, 0.1);border-radius: 25px;">' +

                    '<h1>\n' +
                        '{{ name }}\n' +
                    '</h1>' +

                    '<hr>\n' +

                    '<h2>\n' +
                        '{{ position }}\n' +
                    '</h2>\n' +

                    '<hr>\n' +

                    '<p>' +
                        '{{ description }}' +
                    '</p>\n' +

                    '<hr>\n' +

                    '<p>' +
                        '{{ social }}' +
                    '</p>\n' +

                    '<hr>' +

                '</div>' +

                '<div class="col-md-4 p-2">' +

                    '<div class="card" style="border-radius: 5px;">\n' +
                        '<img\n' +
                        'v-bind:src="/images/ + image"\n' +
                        'class="card-img img-fluid"\n' +
                        'alt="..."\n' +
                        'style="border-radius: 5px;"\n' +
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
