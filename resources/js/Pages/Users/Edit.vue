<script setup>
    import { useForm, Link } from '@inertiajs/vue3';

    const props = defineProps({
        user: Object
    });

    const form = useForm({
        name: props.user.name,
        email: props.user.email,
        phone: props.user.phone,
        password: '',
    });
</script>

<template>
    <div class="card col-6 offset-3">
        <div class="card-header d-flex justify-content-between">
            <div>User Update</div>
            <div><Link href="/users" as='button' class="btn btn-sm btn-primary">Users List</Link></div>
        </div>
        <div class="card-body">
            <form @submit.prevent="form.put(`/users/${user.id}`)">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input v-model="form.name" type="text" class="form-control" placeholder="Enter name">
                    <div v-if="form.errors.name" class="text-danger">{{ form.errors.name }}</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input v-model="form.email" type="email" class="form-control" name="email" placeholder="Enter valid email address">
                    <div v-if="form.errors.email" class="text-danger">{{ form.errors.email }}</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input v-model="form.phone" type="text" class="form-control" name="phone" placeholder="Enter phone number">
                    <div v-if="form.errors.phone" class="text-danger">{{ form.errors.phone }}</div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input v-model="form.password" type="password" class="form-control" name="password" placeholder="Enter password">
                    <div v-if="form.errors.password" class="text-danger">{{ form.errors.password }}</div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</template>