<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(public/assets/images/inner-pages/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>Регистрация</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><router-link to="/" href=""><i class="flaticon-home pe-2"></i>Главная</router-link></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Регистрация</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start Login Page-->
            <section class="login-page pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9 wow fadeInUp animated">
                            <div class="login-register-form"
                                 style="background-image: url('public/assets/images/inner-pages/login-bg.png');">
                                <div class="top-title text-center ">
                                    <h2>Регистрация</h2>
                                    <p>Уже есть аккаунт? <router-link to="/sign" href="">Войти</router-link></p>
                                </div>
                                <form class="common-form">
                                    <div class="form-group"><input type="text" class="form-control"
                                                                   placeholder="Имя"></div>
                                    <div class="form-group"><input type="text" class="form-control"
                                                                   placeholder="Логин">
                                    </div>
                                    <div class="form-group"><input type="email" class="form-control"
                                                                   placeholder="Почта"></div>
                                    <div class="form-group eye">
                                        <div class="icon icon-1"><i class="flaticon-hidden"></i></div>
                                        <input
                                            type="password" id="password-field" class="form-control"
                                            placeholder="Пароль">
                                        <div class="icon icon-2 "><i class="flaticon-visibility"></i></div>
                                    </div>
                                    <div class="checkk ">
                                        <div class="form-check p-0 m-0"><input type="checkbox" id="remember"> <label
                                            class="p-0" for="remember"> Примите условия и Политику конфиденциальности </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn--primary style2">Зарегистрироваться</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Login Page-->
        </main>
    </div>
</template>

<script>
export default {
    name: "Register",
    mounted() {
        $(document).trigger('initi')
        this.getCartProducts()

    },
    data() {
        return {
            name: '',
            login: '',
            email: '',
            password: '',
        }
    },
    methods: {

    }
}
</script>

<style scoped>

</style>
