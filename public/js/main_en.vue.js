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

    data() {
        return {
            fields: [],
            field: {
                field_slogan_en: '',
            },

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
                    console.log(res.fields);
                    // this.fields = res.fields;
                    this.slogan = res.fields.field_slogan_en;
                })
        }
    }

}
