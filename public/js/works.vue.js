const Works = {
    template:
    '<div>' +
            '<div v-bar="{useScrollbarPseudo: true}" ' +
                'class="container-fluid p-4 d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
                'style="height: 75vh; background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
            '>' +

                    '<div id="container" class="row p-0 m-0 text-center d-flex align-content-start flex-wrap overflow-auto" style="scrollbar-width: none; height: max-content; color: rgb(255,255,255); box-sizing: border-box; border: 10px solid black; max-width: 85%; background-color: rgba(0,0,0,1); border-radius: 25px;">' +

                        '<div v-for="work in works" v-bind:key="work.id" class="col-12 col-md-6 col-xl-4 p-0 bg-dark" style="border-radius: 25px; height: max-content;">' +
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

            '<div class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
            'style="background-color: rgba(255,255,255,0.07); border-radius: 25px;"' +
            '>' +

                '<div id="container" class="row p-0 m-0 text-center d-flex align-content-start flex-wrap overflow-auto" style="scrollbar-width: none; color: rgb(255,255,255); box-sizing: border-box; border: 10px solid black; background-color: rgba(0,0,0,1); border-radius: 25px;">' +

                    '<div v-for="work in works" v-bind:key="work.id" class="col-12 col-md-6 col-xl-4 p-0 bg-dark" style="border-radius: 25px; height: max-content;">' +
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
