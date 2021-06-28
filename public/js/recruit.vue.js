const Recruit = {
    template:
        '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">' +
                '<div class="row p-0 overflow-hidden text-center d-flex justify-content-center text-dark" style="box-sizing: border-box; width: 85%; background-color: rgba(255,255,255,0.7);border-radius: 25px;">' +

                    '<img src="/images/recruit.png" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">' +

                    '<p class="h5 w-75 mx-auto mt-4 text-dark">\n' +
                        '{{ description }} <u><a class="text-dark" href = "mailto: {{ email }}">{{ email }}</a></u>\n' +
                    '</p>\n' +

                    '<hr size="4" class="w-50 mx-auto my-2 rounded-pill" style="opacity: 1;">' +

                    '<h2 class="mb-2 fw-bolder">Positions Available</h2>' +

                    '<div class="row w-75 mx-auto">\n' +
                        '<div v-for="position in positions" v-bind:key="position.id" class="col-lg-4 col-md-12 mb-4 text-dark text-start">\n' +
                            '<div class="card" style="border-radius: 10px;">\n' +
                                '<div class="card-body">\n' +
                                    '<h5 class="card-title">{{ position.name }}</h5>\n' +
                                    '<p class="card-text">{{ position.description }}</p>\n' +
                                    '<p class="card-text">{{ position.software }}</p>\n' +
                                '</div>\n' +
                            '</div>\n' +
                        '</div>\n' +
                    '</div>' +

                    '<h2 class="mb-2 fw-bolder">Jobs Description</h2>' +

                    '<div class="row w-75 d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Employment status: </h5></div>\n' +
                        '<div class="col-6 text-start"><h5>permanent employee</h5></div>\n' +
                    '</div>' +

                    '<div class="row w-75 d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Location: </h5></div>\n' +
                        '<div class="col-6 text-start"><h5>Location: Chernyshevska St, 66, Kharkiv</h5></div>\n' +
                    '</div>' +

                    '<div class="row w-75 d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Salary, benefits: </h5></div>\n' +
                        '<div class="col-6 text-start"><h5>negotiable; flexible work hours; cookies</h5></div>\n' +
                    '</div>' +

                    '<div class="row w-75 d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Workdays/Holidays: </h5></div>\n' +
                        '<div class="col-6 text-start"><h5>2 full days off a week; summer holiday; new year holiday; wedding and funeral leave</h5></div>\n' +
                    '</div>' +

                    '<hr size="4" class="w-50 mx-auto my-2 rounded-pill" style="opacity: 1;">' +

                    '<h2 class="mb-2 fw-bolder">Recruiting process</h2>' +

                    '<ul class="list-inline">\n' +
                        '<li class="list-inline-item">1. Application via email</li>\n' +
                        '<li class="list-inline-item">-> 2. First interview</li>\n' +
                        '<li class="list-inline-item">-> 3. One month probation period</li>\n' +
                        '<li class="list-inline-item">-> 4. Final interview</li>\n' +
                    '</ul>' +

                    '<small class="fw-bolder">applicant will be informed regardless of the outcome</small>' +

                    '<hr size="3" class="w-50 mx-auto my-2 rounded-pill" style="opacity: 1;">' +

                '</div>' +
        '</div>',

    data() {
        return {
            positions: [],
            position: {
                name: '',
                description: '',
                software: '',
            },
            position_id: '',
            description: '',
            email: '',
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            fetch('api/recruit')
                .then(res => res.json())
                .then(res => {
                    // console.log(res.works);
                    this.positions = res.positions;
                    this.description = res.data.description;
                    this.email = res.data.email;
                })
        },
    }

}
