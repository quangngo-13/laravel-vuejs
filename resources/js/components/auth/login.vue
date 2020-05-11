<template>
    <main>
        <div>
            <form class="user">
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" placeholder="Password">
                </div>
                <a class="btn btn-primary btn-user btn-block text-white" @click="loginAdmin()">
                    Login
                </a>
            </form>
        </div>
    </main>
</template>
<script>
    export default {
        methods: {
            loginAdmin: () => {
                alert(112)
            }
        }
    }
</script>
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
