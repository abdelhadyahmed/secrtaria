import axios from 'axios';

window.app = new Vue({
    el: "#app",
    data: {
        submitUrl: window.submitUrl,
        name:"",
        reason:"",
        notes:"",
    },
    computed: {
    },
    methods: {
        submitForm()
        {
            axios.post('/secretary', {
                'name': this.name,
                'reason': this.reason,
                'notes': this.notes,
            })
                .then(({ data }) =>
                {
                    if (data.success)
                    {
                        this.errors = [];
                        document.dispatchEvent(new Event("reload"));
                        location.reload();
                    } else
                    {
                        this.errors = data.errors;
                    }
                });
        },
    },
    components: {

    }
})
