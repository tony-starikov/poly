const Contact = {
    template:
        '<div>' +

        '<div v-bar="{useScrollbarPseudo: true}" ' +
        'class="container-fluid p-4 d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
        'style="height: 75vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;">' +
        '<div class="row p-0 text-start d-flex justify-content-center overflow-auto" style="scrollbar-width: none; height: 60vh; color: rgb(255,255,255); box-sizing: border-box; max-width: 85%; background-color: rgba(0,0,0,0.6);border-radius: 25px;">' +

        '<div class="col-md-4 p-3 my-5">' +

        '<div class="row my-2">\n' +
        '<div class="col-12">\n' +

        '<h1 class="mb-2 fw-bolder">{{ field_contact_us }}</h1>\n' +

        '<hr size="5" class="w-25 my-1 mb-4 rounded-pill" style="opacity: 1;">\n' +

        '<p class="w-50 m-0">{{ company_name }}<br>{{ location_text }}</p>\n' +

        '<hr size="5" class="w-25 my-1 mb-4 rounded-pill" style="opacity: 1;">\n' +

        '<a class="text-white text-decoration-none" href = "mailto: {{ email }}">Email: {{ email }}</a>\n' +

        '</div>\n' +
        '</div>' +

        '<div class="row">\n' +
        '<div class="col-12">\n' +
        '<a class="text-white" target="_blank" v-bind:href="social_1"><i class="fab fa-telegram fa-4x m-1"></i></a>\n' +
        '<a class="text-white" target="_blank" v-bind:href="social_2"><i class="fab fa-artstation fa-4x m-1"></i></a>\n' +
        '<a class="text-white" target="_blank" v-bind:href="social_3"><i class="fab fa-instagram fa-4x m-1"></i></a>\n' +
        '<a class="text-white" target="_blank" v-bind:href="social_4"><i class="fab fa-linkedin fa-4x m-1"></i></a>\n' +
        '<a class="text-white" target="_blank" v-bind:href="social_5"><i class="fab fa-facebook fa-4x m-1"></i></a>\n' +
        '</div>\n' +
        '</div>' +

        '</div>' +

        '<div class="col-md-8 p-0 m-0">\n' +
        '<iframe v-bind:src="map_src" width="100%" style="border-radius: 0; border: 0; min-height: 30vh; height: 100%;" allowfullscreen="" loading="lazy"></iframe>\n' +
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

        ///////////////////////////////////////////

        '<div ' +
        'class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
        'style="background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
        '<div class="row p-0 m-0 text-start d-flex justify-content-center overflow-auto" style="scrollbar-width: none; color: rgb(255,255,255); box-sizing: border-box; max-width: 100%; background-color: rgba(0,0,0,0.6);border-radius: 25px;">' +

        '<div class="col-md-4 p-3 my-0">' +

        '<div class="row my-2">\n' +
        '<div class="col-12">\n' +

        '<h1 class="mb-2 fw-bolder">{{ field_contact_us }}</h1>\n' +

        '<hr size="5" class="w-25 my-1 mb-4 rounded-pill" style="opacity: 1;">\n' +

        '<p class="w-50 m-0">{{ company_name }}<br>{{ location_text }}</p>\n' +

        '<hr size="5" class="w-25 my-1 mb-4 rounded-pill" style="opacity: 1;">\n' +

        '<a class="text-white text-decoration-none" href = "mailto: {{ email }}">Email: {{ email }}</a>\n' +

        '</div>\n' +
        '</div>' +

        '<div class="row">\n' +
        '<div class="col-12">\n' +
        '<a class="text-white" v-bind:href="social_1"><i class="fab fa-telegram fa-4x m-1"></i></a>\n' +
        '<a class="text-white" v-bind:href="social_2"><i class="fab fa-artstation fa-4x m-1"></i></a>\n' +
        '<a class="text-white" v-bind:href="social_3"><i class="fab fa-instagram fa-4x m-1"></i></a>\n' +
        '<a class="text-white" v-bind:href="social_4"><i class="fab fa-linkedin fa-4x m-1"></i></a>\n' +
        '<a class="text-white" v-bind:href="social_5"><i class="fab fa-facebook fa-4x m-1"></i></a>\n' +
        '</div>\n' +
        '</div>' +

        '</div>' +

        '<div class="col-md-8 p-0 m-0">\n' +
        '<iframe class="p-0 m-0" ' +
        'v-bind:src="map_src"' +
        'width="100%" ' +
        'style="border-radius: 0; min-height: 40vh; height: 100%; width: 100%; padding: 0; margin: 0;" allowfullscreen="" loading="lazy">' +
        '</iframe>\n' +
        '</div>' +

        '</div>' +
        '</div>' +


        '</div>',

    data() {
        return {
            company_name: '',
            location_text: '',
            email: '',
            social_1: '',
            social_2: '',
            social_3: '',
            social_4: '',
            social_5: '',
            map_src: '',
            field_contact_us: '',
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
            fetch('api/contact')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.field_contact_us = res.fields.contact_us_ru;
                    this.company_name = res.fields.contact_company_name_ru;
                    this.location_text = res.fields.contact_location_ru;
                    this.email = res.fields.contact_email;
                    this.social_1 = res.fields.telegram;
                    this.social_2 = res.fields.artstation;
                    this.social_3 = res.fields.instagram;
                    this.social_4 = res.fields.linkedin;
                    this.social_5 = res.fields.facebook;
                    this.map_src = res.fields.map_link;
                })
        }
    }

}
