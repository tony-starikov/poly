const Recruit = {
    template:
        '<div v-bar="{useScrollbarPseudo: true}" class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="height: 74vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;">' +
                '<div id="container"' +
                    'class="row p-0 text-center d-flex justify-content-center overflow-auto" ' +
                    'style="scrollbar-width: none; ' +
                        'height: 60vh; ' +
                        'color: rgb(0,0,0); ' +
                        'max-width: 85%; ' +
                        'background-color: rgba(255,255,255,0.7);' +
                        'border-radius: 25px;"' +
                '>' +

                    '<img src="/images/recruit.png" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">' +

                    '<p class="mx-auto mt-4" style="color: rgb(0,0,0); width: 80%; font-weight: 400; font-size: larger;">' +
                        '{{ description }}<a style="color: rgb(0,0,0); font-weight: 700;" href = "mailto: {{ email }}">{{ email }}</a>' +
                    '</p>' +

                    '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +

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

                    '<h2 class="mb-2 fw-bolder">Job Description</h2>' +

                    '<div class="row w-75 mx-auto text-center d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Employment status: </h5></div>\n' +
                        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">permanent employee</p></div>\n' +
                    '</div>' +

                    '<div class="row w-75 mx-auto text-center d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Location: </h5></div>\n' +
                        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">Location: Chernyshevska St, 66, Kharkiv</p></div>\n' +
                    '</div>' +

                    '<div class="row w-75 mx-auto text-center d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Salary, benefits: </h5></div>\n' +
                        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">negotiable; flexible work hours; cookies</p></div>\n' +
                    '</div>' +

                    '<div class="row w-75 mx-auto text-center d-flex justify-content-center">\n' +
                        '<div class="col-3 text-start"><h5 class="fw-bolder">Workdays/Holidays: </h5></div>\n' +
                        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">2 full days off a week; summer holiday; new year holiday; wedding and funeral leave</p></div>\n' +
                    '</div>' +

                    '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +

                    '<h2 class="mb-2 fw-bolder">Recruiting process</h2>' +

                    '<ul class="list-inline">\n' +
                        '<li class="list-inline-item">1. Application via email</li>\n' +
                        '<li class="list-inline-item">-> 2. First interview</li>\n' +
                        '<li class="list-inline-item">-> 3. One month probation period</li>\n' +
                        '<li class="list-inline-item">-> 4. Final interview</li>\n' +
                    '</ul>' +

                    '<small class="fw-bolder">applicant will be informed regardless of the outcome</small>' +

                    '<hr size="3" class="mx-auto my-2 mb-4 rounded-pill" style="width: 40%; opacity: 1;">' +

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
        scrollToTop() {
            const container = this.$el.querySelector("#container");
            container.scrollTop = -container.scrollHeight;
        },

        hasHistory () { return window.history.length > 2 },

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
