<template>
    <main>
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-6">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login CMS</h1>
                                        </div>

                                        <router-view></router-view>
                                        <hr>
                                        <div class="text-center">
                                            <router-link to="/">Đăng Nhập</router-link>
                                        </div>
                                        <div class="text-center">
                                            <router-link to="/bar">Đăng ký</router-link>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <p>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
    </main>
</template>
<script>
    export default {

    }
</script>
