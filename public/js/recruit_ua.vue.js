const Recruit = {
    template:
    '<div>' +
        '<div v-bar="{useScrollbarPseudo: true}" ' +
            'class="container-fluid p-4 d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
            'style="height: 74vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
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

        // description

        '<p class="mx-0 mb-0 p-0 mt-4 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-none d-xxl-none" style="color: rgb(0,0,0); width: 80%; font-weight: 400; font-size: larger;">' +
        '{{ description }}' +
        '</p>' +

        '<p class="mx-auto mb-0 mt-4 d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex" style="color: rgb(0,0,0); width: 80%; font-weight: 400; font-size: larger;">' +
        '{{ description }}' +
        '</p>' +

        '<a class="d-block p-0 m-0" style="color: rgb(0,0,0); font-weight: 700;" href = "mailto: {{ email }}">{{ email }}</a>' +

        // description

        '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +

        '<h2 class="mb-2 fw-bolder">{{ field_positions_available }}</h2>' +

        '<div class="row mx-auto" style="width: 80%">\n' +
        '<div v-for="position in positions" v-bind:key="position.id" class="col-lg-4 col-md-12 mb-4 text-dark text-start">\n' +
        '<div class="card" style="border-radius: 10px;">\n' +
        '<div class="card-body">\n' +
        '<h5 class="card-title">{{ position.name_ua }}</h5>\n' +
        '<p class="card-text">{{ position.description_ua }}</p>\n' +
        '<p class="card-text">{{ position.software_ua }}</p>\n' +
        '</div>\n' +
        '</div>\n' +
        '</div>\n' +
        '</div>' +

        '<h2 class="mb-2 fw-bolder">{{ field_job_description }}</h2>' +

        // Employment status:

        '<div class="row w-100 mx-auto justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-6 text-start"><h5 class="fw-bolder">{{ field_employment_status }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employment_status }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_employment_status }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employment_status }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_employment_status }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employment_status }}</p></div>\n' +
        '</div>' +

        // Employment status:

        // Location

        '<div class="row w-100 mx-auto justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-6 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
        '</div>' +

        // Location

        // Salary, benefits

        '<div class="row w-100 mx-auto justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-6 text-start"><h5 class="fw-bolder">{{ field_benefits }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ benefits }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_benefits }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ benefits }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_benefits }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ benefits }}</p></div>\n' +
        '</div>' +

        // Salary, benefits

        // Workdays/Holidays

        '<div class="row w-100 mx-auto justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-6 text-start"><h5 class="fw-bolder">{{ field_workdays }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ workdays }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_workdays }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ workdays }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_workdays }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ workdays }}</p></div>\n' +
        '</div>' +

        // Workdays/Holidays

        '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +

        '<h2 class="mb-2 fw-bolder">{{ field_recruiting_process }}</h2>' +

        '<ul class="list-inline d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex justify-content-center">\n' +
        '<li class="list-inline-item">1. {{ field_recruiting_process_1 }}</li>\n' +
        '<li class="list-inline-item">-> 2. {{ field_recruiting_process_2 }}</li>\n' +
        '<li class="list-inline-item">-> 3. {{ field_recruiting_process_3 }}</li>\n' +
        '<li class="list-inline-item">-> 4. {{ field_recruiting_process_4 }}</li>\n' +
        '</ul>' +

        '<ol class="list-group list-group-numbered d-flex d-sm-flex d-md-flex d-lg-none d-xl-none d-xxl-none">\n' +
        '<li class="list-inline-item">{{ field_recruiting_process_1 }}</li>\n' +
        '<li class="list-inline-item">{{ field_recruiting_process_2 }}</li>\n' +
        '<li class="list-inline-item">{{ field_recruiting_process_3 }}/li>\n' +
        '<li class="list-inline-item">{{ field_recruiting_process_4 }}</li>\n' +
        '</ol>' +

        '<small class="fw-bolder">{{ field_bottom_text }}</small>' +

        '<hr size="3" class="mx-auto my-2 mb-4 rounded-pill" style="width: 40%; opacity: 1;">' +

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

        /////////////////////////////////////////////////////////////////////////////////////////////

        '<div class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
        'style="background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
        '<div id="container"' +
        'class="row p-0 m-0 text-center d-flex justify-content-center overflow-auto" ' +
        'style="scrollbar-width: none; ' +
        'color: rgb(0,0,0); ' +
        'max-width: 100%; ' +
        'background-color: rgba(255,255,255,0.7);' +
        'border-radius: 25px;"' +
        '>' +

        '<img src="/images/recruit.png" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">' +

        // description

        '<p class="mx-0 mb-0 p-0 mt-4 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-none d-xxl-none" style="color: rgb(0,0,0); width: 80%; font-weight: 400; font-size: larger;">' +
        '{{ description }}' +
        '</p>' +

        '<a class="d-block p-0 m-0" style="color: rgb(0,0,0); font-weight: 700;" href = "mailto: {{ email }}">{{ email }}</a>' +

        // description

        '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +

        '<h2 class="mb-2 fw-bolder">{{ field_positions_available }}</h2>' +

        '<div class="row mx-auto" style="width: 80%">\n' +
            '<div v-for="position in positions" v-bind:key="position.id" class="col-lg-4 col-md-12 mb-4 text-dark text-start">\n' +
                '<div class="card" style="border-radius: 10px;">\n' +
                    '<div class="card-body">\n' +
                        '<h5 class="card-title">{{ position.name_ua }}</h5>\n' +
                        '<p class="card-text">{{ position.description_ua }}</p>\n' +
                        '<p class="card-text">{{ position.software_ua }}</p>\n' +
                    '</div>\n' +
                '</div>\n' +
            '</div>\n' +
        '</div>' +

        '<h2 class="mb-2 fw-bolder">{{ field_job_description }}</h2>' +

        // Employment status:

        '<div class="row w-100 mx-auto justify-content-evenly d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-4 text-start"><h5 class="fw-bolder">{{ field_employment_status }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employment_status }}</p></div>\n' +
        '</div>' +

        // Employment status:

        // Location

        '<div class="row w-100 mx-auto justify-content-evenly d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-4 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
        '</div>' +

        // Location

        // Salary, benefits

        '<div class="row w-100 mx-auto justify-content-evenly d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-4 text-start"><h5 class="fw-bolder">{{ field_benefits }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ benefits }}</p></div>\n' +
        '</div>' +

        // Salary, benefits

        // Workdays/Holidays

        '<div class="row w-100 mx-auto justify-content-evenly d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
        '<div class="col-4 text-start"><h5 class="fw-bolder">{{ field_workdays }}: </h5></div>\n' +
        '<div class="col-6 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ workdays }}</p></div>\n' +
        '</div>' +

        // Workdays/Holidays

        '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +

        '<h2 class="mb-2 fw-bolder">{{ field_recruiting_process }}</h2>' +

        '<ol class="list-group list-group-numbered d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
            '<li class="list-inline-item">{{ field_recruiting_process_1 }}</li>\n' +
            '<li class="list-inline-item">{{ field_recruiting_process_2 }}</li>\n' +
            '<li class="list-inline-item">{{ field_recruiting_process_3 }}</li>\n' +
            '<li class="list-inline-item">{{ field_recruiting_process_4 }}</li>\n' +
        '</ol>' +

        '<small class="fw-bolder">{{ field_bottom_text }}</small>' +

        '<hr size="3" class="mx-auto my-2 mb-4 rounded-pill" style="width: 40%; opacity: 1;">' +

        '</div>' +

        '</div>' +
    '</div>',

    data() {
        return {
            positions: [],
            position: {
                name_ua: '',
                description_ua: '',
                software_ua: '',
            },
            position_id: '',
            description: '',
            email: '',
            employment_status: '',
            location_text: '',
            benefits: '',
            workdays: '',
            field_positions_available: '',
            field_job_description: '',
            field_employment_status: '',
            field_location: '',
            field_benefits: '',
            field_workdays: '',
            field_recruiting_process: '',
            field_recruiting_process_1: '',
            field_recruiting_process_2: '',
            field_recruiting_process_3: '',
            field_recruiting_process_4: '',
            field_bottom_text: '',
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
                    this.description = res.fields.recruit_description_ua;
                    this.email = res.fields.recruit_email;
                    this.employment_status = res.fields.employment_status_ua;
                    this.location_text = res.fields.field_recruit_location_ua;
                    this.benefits = res.fields.benefits_ua;
                    this.workdays = res.fields.workdays_ua;
                    this.field_positions_available = res.fields.field_positions_available_ua;
                    this.field_job_description = res.fields.field_job_description_ua;
                    this.field_employment_status = res.fields.field_employment_status_ua;
                    this.field_location = res.fields.recruit_location_ua;
                    this.field_benefits = res.fields.field_benefits_ua;
                    this.field_workdays = res.fields.field_workdays_ua;
                    this.field_recruiting_process = res.fields.field_recruiting_process_ua;
                    this.field_recruiting_process_1 = res.fields.field_recruiting_process_1_ua;
                    this.field_recruiting_process_2 = res.fields.field_recruiting_process_2_ua;
                    this.field_recruiting_process_3 = res.fields.field_recruiting_process_3_ua;
                    this.field_recruiting_process_4 = res.fields.field_recruiting_process_4_ua;
                    this.field_bottom_text = res.fields.field_bottom_text_ua;
                })
        },
    }

}
