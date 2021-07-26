const Main = {
    template:
        '<div class="container-fluid p-4" style="height: 76vh; width: 70%;">' +
            '<div class="row h-100">' +
                '<div class="col d-flex align-items-center justify-content-center">' +
                    '<h1 style="color: rgba(255,255,255,0.7); font-family: Roboto, sans-serif; font-size: 60px; font-weight: bold;">' +
                        '{{ slogan }}' +
                    '</h1>' +
                '</div>' +
            '</div>' +
        '</div>',

        // ' <div data-simplebar data-simplebar-auto-hide="true" style="max-height: 100px;">\n' +
        // '    <div v-for="n in 100" :key="n">Example content</div>\n' +
        // '  </div>',

    // default: {
    //     components: {
    //         simplebar: () => import('child-with-velocity.vue')
    //     }
    // },
    //

    data() {
        return {
            slogan: '',
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData() {
            fetch('api/main')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data.slogan);
                    this.slogan = res.data.slogan;
                })
        }
    }

}
