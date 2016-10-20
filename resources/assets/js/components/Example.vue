<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <ul>
                            <li v-for="user in users">{{ user.email }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                users: []
            };
        },

        created: function () {
            this.fetchUsers();
        },

        methods: {
            fetchUsers: function () {
                this.$http.get('/api/users')
                        .then(response => {
                    this.users = response.data;
                });
            },
        }
    }


</script>
