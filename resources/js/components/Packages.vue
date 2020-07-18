<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">POSTS</div>

                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="(packages, index) in package"
                                        :key="package.id"
                                    >
                                        <td>{{ package.title }}</td>
                                        <td>{{ package.price }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            packages: []
        };
    },
    created() {
        let uri = `api/packages`;
        this.axios.get(uri).then(response => {
            this.posts = response.data.data;
        });
    }
};
</script>
