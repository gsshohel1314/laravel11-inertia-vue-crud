<script setup>
import { Link, router } from '@inertiajs/vue3'
import moment from 'moment';

defineProps({
    users: Object
});

const destroy = (id) => {
    if (confirm("Are you sure you want to move this to trash")) {
        router.delete(`/users/${id}`)
    }    
}
</script>

<template>
    <div class="card col-8 offset-2">
        <div class="card-header d-flex justify-content-between">
            <div>Users List</div>
            <div><Link href="/users/create" as='button' class="btn btn-sm btn-primary">Add User</Link></div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(user,index) in users">
                        <th scope="row">{{ index + 1 }}</th>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.phone ?? '-' }}</td>
                        <td>{{ moment(user.created_at).format('LL') }}</td>
                        <td>
                            <Link :href="`/users/${user.id}`" as='button' class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></Link>
                            <Link :href="`/users/${user.id}/edit`" as='button' class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></Link>
                            <button @click.prevent="destroy(user.id)" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>