<script setup>
import { Link } from '@inertiajs/vue3';
import moment from 'moment';

defineProps({
    user: Object
});
</script>

<template>
    <div class="card col-8 offset-2">
        <div class="card-header d-flex justify-content-between">
            <div>Show</div>
            <div><Link href="/users" as='button' class="btn btn-sm btn-primary">User List</Link></div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ user.name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ user.email }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ user.phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Joined At</th>
                        <td>{{ moment(user.created_at).format('LL') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>