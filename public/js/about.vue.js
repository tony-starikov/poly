const About = {
    template:
        '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="background-color: rgba(255,255,255,0.07);border-radius: 25px;">' +
            '<div class="row p-0 text-center d-flex justify-content-center" style="box-sizing: border-box; min-height: 70vh; width: 85%; background-color: rgba(0,0,0,0.6);border-radius: 25px;">' +

                '<img src="/images/about.png" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">' +

                '<p class="mx-auto mt-4" style="color: rgba(255,255,255,1); width: 80%; font-weight: 400; font-size: larger;">' +
                    '{{ description }}' +
                '</p>' +

                '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +


                '<h2 class="fw-bolder">Company Profile</h2>' +

                '<div class="row w-75 mx-auto text-center d-flex justify-content-center">\n' +
                    '<div class="col-3 text-start"><h5 class="fw-bolder">Company name: </h5></div>\n' +
                    '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ company_name }}</p></div>\n' +
                '</div>' +

                '<div class="row w-75 mx-auto d-flex justify-content-center">\n' +
                    '<div class="col-3 text-start"><h5 class="fw-bolder">Location: </h5></div>\n' +
                    '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
                '</div>' +

                '<div class="row w-75 mx-auto d-flex justify-content-center">\n' +
                    '<div class="col-3 text-start"><h5 class="fw-bolder">Establishment: </h5></div>\n' +
                    '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ establishment }}</p></div>\n' +
                '</div>' +

                '<div class="row w-75 mx-auto d-flex justify-content-center">\n' +
                    '<div class="col-3 text-start"><h5 class="fw-bolder">Employee: </h5></div>\n' +
                    '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employee }}</p></div>\n' +
                '</div>' +

                '<div class="row w-75 mx-auto my-0 d-flex justify-content-center">\n' +
                    '<div class="col-3 text-start"><h5 class="fw-bolder">CEO: </h5></div>\n' +
                    '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ ceo }}</p></div>\n' +
                '</div>' +

                '<div class="row w-75 mx-auto py-0 my-0 d-flex justify-content-center">\n' +
                    '<div class="col-3 text-start"><h5 class="fw-bolder">Director: </h5></div>\n' +
                    '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ director }}</p></div>\n' +
                '</div>' +

                '<hr size="4" class="mx-auto my-2 mb-4 rounded-pill" style="width: 40%; opacity: 1;">' +

            '</div>' +
        '</div>',

    data() {
        return {
            description: '',
            company_name: '',
            location_text: '',
            establishment: '',
            employee: '',
            ceo: '',
            director: '',
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            fetch('api/about')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.description = res.data.description;
                    this.company_name = res.data.company_name;
                    this.location_text = res.data.location_text;
                    this.establishment = res.data.establishment;
                    this.employee = res.data.employee;
                    this.ceo = res.data.ceo;
                    this.director = res.data.director;
                })
        }
    }

}
