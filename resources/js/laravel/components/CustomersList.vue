<template>
    <div class="table-responsive">
        <h2>{{ title }}</h2>

        <div>
            <button @click.prevent="showCreateForm()" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Create">
                Create Customer
            </button>
        </div>

        <table class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr>
                <th>Name</th>
                <th style="width: 30%;">Email</th>
                <th style="width: 15%;">Mobile Number</th>
                <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="customer in customers">
                <td class="font-w600">
                    {{ customer.first_name }} {{ customer.last_name }}
                </td>
                <td>
                    {{ customer.email }}
                </td>
                <td>
                    {{ customer.mobile_number }}
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button @click.prevent="showEditForm(customer.id)" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                            <i class="fa fa-pencil-alt"></i>
                        </button>
                        <button @click.prevent="deleteCustomer(customer.id)" type="button" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <hr/>

        <div class="col-md-6 col-offset-md-6" v-if="customerForm">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" v-model="first_name">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" v-model="last_name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" v-model="email">
            </div>

            <button @click.prevent="updateCustomer()" class="btn btn-info" v-if="showUpdate">Update</button>
            <button @click.prevent="createCustomer()" class="btn btn-info" v-if="showCreate">Create</button>

            <button @click.prevent="hideForm()" class="btn btn-warning">Hide</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title'],
        data: function () {
            return {
                customers: [],
                first_name: '',
                last_name: '',
                email: '',
                customerForm: false,
                showCreate: false,
                showUpdate: false,
                id: 0
            }
        },
        mounted() {
            this.showCustomers();
        },
        methods: {
            showCustomers() {
                axios.get('/api/customers')
                    .then((response) => {
                        this.customers = response.data.customers;
                    })
                    .catch((error) => {
                        console.log(error);
                    })
            },
            deleteCustomer(id) {
                axios.delete('/customers/' + id)
                    .then((response) => {
                        alert(response.data.message);
                        this.showCustomers();
                    })
                    .catch((error) => {
                        console.log(error);
                    })
            },
            showCreateForm() {
                this.resetForm();
                this.customerForm = true;
                this.showCreate = true;
                this.showUpdate = false;
            },
            showEditForm(id) {
                this.customerForm = true;
                this.showCreate = false;
                this.showUpdate = true;
                this.id = id;

                axios.get('/customers/' + id)
                    .then((response) => {
                        this.first_name = response.data.customer.first_name;
                        this.last_name = response.data.customer.last_name;
                        this.email = response.data.customer.email;
                    })
                    .catch((error) => {
                        console.log(error);
                    })
            },
            hideForm() {
                this.customerForm = false;
            },
            createCustomer() {
                axios.post('/customers', {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                })
                    .then((response) => {
                        alert(response.data.message);
                        this.customerForm = false;
                        this.resetForm();
                        this.showCustomers();
                    })
                    .catch((error) => {
                        console.log(error.response.data.message);
                    })
            },
            updateCustomer() {
                axios.put('/customers/' + this.id, {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                })
                    .then((response) => {
                        alert(response.data.message);
                        this.resetForm();
                        this.customerForm = false;
                        this.showCustomers();
                    })
                    .catch((error) => {
                        console.log(error);
                    })
            },
            resetForm() {
                this.first_name = '';
                this.last_name = '';
                this.email = '';
            }
        }
    }
</script>
