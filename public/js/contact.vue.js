const Contact = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="height: 75vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;">' +
            '<div class="row p-0 text-start d-flex justify-content-center overflow-auto" style="scrollbar-width: none; height: 60vh; color: rgb(255,255,255); box-sizing: border-box; max-width: 85%; background-color: rgba(0,0,0,0.6);border-radius: 25px;">' +

                '<div class="col-md-4 p-3 my-5">' +

                    '<div class="row my-2">\n' +
                        '<div class="col-12">\n' +

                            '<h1 class="mb-2 fw-bolder">Contact Us</h1>\n' +

                            '<hr size="5" class="w-25 my-1 mb-4 rounded-pill" style="opacity: 1;">\n' +

                            '<p class="w-50 m-0">{{ company_name }}<br>{{ location_text }}</p>\n' +

                            '<hr size="5" class="w-25 my-1 mb-4 rounded-pill" style="opacity: 1;">\n' +

                            '<a class="text-white text-decoration-none" href = "mailto: {{ email }}">Email: {{ email }}</a>\n' +

                        '</div>\n' +
                    '</div>' +

                    '<div class="row">\n' +
                        '<div class="col-12">\n' +
                            '<a class="text-white" href="{{ social_1 }}"><i class="fab fa-telegram fa-4x m-1"></i></a>\n' +
                            '<a class="text-white" href="{{ social_2 }}"><i class="fab fa-artstation fa-4x m-1"></i></a>\n' +
                            '<a class="text-white" href="{{ social_3 }}"><i class="fab fa-instagram fa-4x m-1"></i></a>\n' +
                            '<a class="text-white" href="{{ social_4 }}"><i class="fab fa-linkedin fa-4x m-1"></i></a>\n' +
                            '<a class="text-white" href="{{ social_5 }}"><i class="fab fa-facebook fa-4x m-1"></i></a>\n' +
                        '</div>\n' +
                    '</div>' +

                '</div>' +

                '<div class="col-md-8 p-0 m-0">\n' +
                    '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2737549872563!2d36.23957601571529!3d50.00622397941642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dc47438cc1%3A0xf22dc050706eb082!2z0LLRg9C70LjRhtGPINCn0LXRgNC90LjRiNC10LLRgdGM0LrQsCwgNjYsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1suk!2sua!4v1621517762524!5m2!1suk!2sua" width="100%" height="100%" style="border-radius: 0 25px 25px 0;" allowfullscreen="" loading="lazy"></iframe>\n' +
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
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            fetch('api/contact')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.company_name = res.data.company_name;
                    this.location_text = res.data.location_text;
                    this.email = res.data.email;
                })
        }
    }

}
