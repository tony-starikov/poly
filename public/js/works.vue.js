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
                '<div id="container" class="row p-0 m-0 text-center d-flex align-content-start flex-wrap overflow-auto" style="scrollbar-width: none; height: max-content; color: rgb(255,255,255); box-sizing: border-box; border: 10px solid black; max-width: 85%; background-color: rgba(0,0,0,1); border-radius: 25px;">' +

                    '<div v-for="work in works" v-bind:key="work.id" class="col-xl-4 col-md-6 p-0 bg-dark" style="border-radius: 25px; height: max-content;">' +
                        '<router-link :to="/work/ + work.code">' +
                            '<div class="card my-card" style="border: none;">' +
                                '<img v-bind:src="/images/ + work.cover" class="w-100" style="border: none;"/>' +
                                '<div class="my-overlay">' +
                                    '<h4 class="m-0 mx-1" style="color: rgba(255,255,255,0.8);">{{ work.name }}</h4>' +
                                    '<h6 class="p-0 mx-1" style="color: rgba(255,255,255,0.4);">{{ work.small_description }}</h6>' +
                                '</div>' +
                            '</div>' +
                        '</router-link>' +
                    '</div>' +

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
        scrollToTop() {
            const container = this.$el.querySelector("#container");
            container.scrollTop = -container.scrollHeight;
        },

        hasHistory () { return window.history.length > 2 },

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
