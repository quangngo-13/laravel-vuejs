<template>
    <main>
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Đăng Nhập Hệ Thống</h1>
        </div>
        <form class="user">
            <div class="form-group">
                <input type="number" class="form-control form-control-user" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Ghi nhớ đăng nhập</label>
                </div>
            </div>
            <a class="btn btn-primary btn-user btn-block text-white" @click="loginAdmin()">
                Đăng Nhập
            </a>
            <hr>
        </form>
    </main>
</template>
<script>

</script>
