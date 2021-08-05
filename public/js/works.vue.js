const Works = {
    template:
        // '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">' +
        //         '<div class="row p-0 overflow-hidden" style="box-sizing: border-box; border: 10px solid black; width: 85%; background-color: rgba(0,0,0,1);border-radius: 25px;">' +
        '<div v-bar="{useScrollbarPseudo: true}" ' +
            'class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
            'style="height: 74vh; background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
        '>' +
        // '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" ' +
        // 'style="height: 75vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;">' +
        // '<div class="container-fluid d-inline-block p-4 d-flex justify-content-center" style="height: 75vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;">' +
                '<div class="row p-0 text-center d-flex overflow-auto" style="scrollbar-width: none; height: 60vh; color: rgb(255,255,255); box-sizing: border-box; border: 10px solid black; max-width: 85%; background-color: rgba(0,0,0,1); border-radius: 25px;">' +
                    '<div v-for="work in works" v-bind:key="work.id" class="col-lg-4 col-md-6 p-0" style="border-radius: 25px;">' +
                        '<router-link :to="/work/ + work.code">' +
                            '<div class="card bg-dark my-card">' +
                                '<img v-bind:src="/images/ + work.cover" class="img-fluid"/>' +
                                '<div class="my-overlay">' +
                                    '<h4 class="m-0 mx-1" style="color: rgba(255,255,255,0.8);">{{ work.name }}</h4>' +
                                    '<h6 class="p-0 mx-1" style="color: rgba(255,255,255,0.4);">{{ work.small_description }}</h6>' +
                                '</div>' +
                            '</div>' +
                        '</router-link>' +
                    '</div>' +
                '</div>' +
        '</div>',

    data() {
        return {
            works: [],
            work: {
                id: '',
                name: '',
                cover: '',
                code: '',
                small_description: '',
            },
            work_id: '',
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            fetch('api/works')
                .then(res => res.json())
                .then(res => {
                    // console.log(res.works);
                    this.works = res.works;
                })
        },
    }

}
