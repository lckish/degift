<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url(public/assets/images/inner-pages/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>Вход</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="/"><i class="flaticon-home pe-2"></i>Главная</a></li>
                                        <li> <i class="flaticon-next"></i> </li>
                                        <li class="active">Вход</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start Login Page-->
            <section class="login-page pt-120 pb-120 wow fadeInUp animated">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <div class="login-register-form"
                                 style="background-image: url('public/assets/images/inner-pages/login-bg.png');">
                                <div class="top-title text-center ">
                                    <h2>Вход</h2>
                                    <p>Нет аккаунта? <router-link to="/register" href="">Зарегестрироваться</router-link></p>
                                </div>
                                <form class="common-form">
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" class="form-control" v-model="name" placeholder="Имя ползователя (или) почта">-->
<!--                                    </div>-->
<!--                                    <div class="form-group eye">&ndash;&gt;-->
<!--                                        <div class="icon icon-1"> <i class="flaticon-hidden"></i></div> <input-->
<!--                                            type="password" v-model="password" id="password-field" class="form-control" placeholder="Пароль">-->
<!--                                        <div class="icon icon-2 "><i class="flaticon-visibility"></i> </div>-->
<!--                                    </div>-->
                                    <div class="form-group"> <input type="text" class="form-control"
                                                                    placeholder="Имя ползователя (или) почта"> </div>
                                    <div class="form-group eye">
                                        <div class="icon icon-1"> <i class="flaticon-hidden"></i></div> <input
                                        type="password" id="password-field" class="form-control" placeholder="Пароль">
                                        <div class="icon icon-2 "><i class="flaticon-visibility"></i> </div>
                                    </div>
                                    <div class="checkk ">
                                        <div class="form-check p-0 m-0"> <input type="checkbox" id="remember"> <label
                                            class="p-0" for="remember"> Запомнить меня</label> </div> <a href="#0"
                                                                                                      class="forgot"> Забыли пароль?</a>
                                    </div> <button type="submit" class="btn--primary style2">Войти </button>
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
    name: "Sign",
    mounted() {
        $(document).trigger('initi')

    },
    data() {
        return {

        }
    },
    methods: {

    }
}
</script>

<style scoped>

</style>
