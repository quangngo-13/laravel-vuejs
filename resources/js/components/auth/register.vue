<template>
    <main>
        <div>
            <form class="user">
                <div class="form-group">
                    <input type="number" class="form-control form-control-user" placeholder="Phone number" v-model="user.phone">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user"placeholder="Password" v-model="user.password" >
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user"  placeholder="Repeat Password" >
                    </div>
                </div>
                <a class="btn btn-primary btn-user btn-block text-white" @click="registerAdmin()">
                    Register Account
                </a>
            </form>
        </div>
    </main>
</template>
<script>
    export default {
        data(){
            return {
                user: {
                    phone : null,
                    password: null
                }
            }
        },
        methods: {
            registerAdmin: () => {
                alert(this.user.phone)
            }
        }
    }
</script>
