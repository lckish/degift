<template>
    <div>
        <main class="overflow-hidden">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area"
                     style="background-image: url(public/assets/images/inner-pages/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>О нас</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li>
                                            <router-link to="/" href=""><i class="flaticon-home pe-2"></i>Главная
                                            </router-link>
                                        </li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">О нас</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start About One-->
            <section class="about pt-120 pb-120">
                <div class="container">
                    <div
                        class="row g-0 about__background align-items-center justify-content-lg-between justify-content-center">
                        <!--Start About One Img-->
                        <div class="col-lg-5 col-10 wow fadeInLeft animated ">
                            <div class="about__img">
                                <div class="about__img-inner"><img
                                    src="public/assets/images/about/about1.jpg"
                                    alt=""/></div>
                            </div>
                        </div>
                        <!--End About One Img-->
                        <!--Start About One Content-->
                        <div class="col-lg-7 col-md-11 ">
                            <div class="about__content text-center">
                                <div class="shape1"><img src="public/assets/images/shape/about-v1-shape1.png" alt=""/>
                                </div>
                                <div class="shape2"><img src="public/assets/images/shape/about-v1-shape2.png" alt=""/>
                                </div>
                                <div class="title wow fadeInUp animated">
                                    <h6>Наша компания</h6>
                                    <h2>Дарить Улыбку <br>Намного проще чем ты думаешь</h2>
                                </div>
                                <div class="text wow fadeInUp animated">
                                    <p>Наш интернет-сервис по продаже подарков - это уникальная платформа,
                                        предназначенная для того, чтобы помочь людям находить идеальные подарки для
                                        своих близких, друзей или коллег. Мы стремимся сделать процесс выбора и покупки
                                        подарков простым, удобным и приятным.
                                        <br>
                                        Наша цель - создать прекрасный опыт покупки подарков и помочь людям выразить
                                        свою заботу и любовь через внимательно подобранные и оригинальные подарки. Мы
                                        стремимся сделать каждый момент особенным и незабываемым.</p>
                                </div>
                            </div>
                        </div>
                        <!--End About One Content-->
                    </div>
                </div>
            </section>
            <!--End About One-->
            <!--Start Mission One-->
            <section class="mission">
                <div class="shape1"><img src="public/assets/images/shape/mission-v1-shape1.png" alt=""/></div>
                <div class="shape2"><img src="public/assets/images/shape/mission-v1-shape2.png" alt=""/></div>
                <div class="auto-container container mission__background pt-120 pb-120">
                    <div class="container">
                        <div class="row mt--30 align-items-center justify-content-center">
                            <!--Start Mission One Content-->
                            <div class="col-lg-6 col-md-10 mt-30">
                                <div class="mission__content text-lg-start text-center">
                                    <h2 class=" wow fadeInUp animated">Наша задача</h2>
                                    <p class=" wow fadeInUp animated">Задача нашего интернет-сервиса,
                                        специализирующегося на
                                        продаже подарков, заключается в предоставлении клиентам удобной и доступной
                                        платформы для выбора и покупки различных подарочных товаров. Наш магазин
                                        предлогает широкий ассортимент товаров разного типа и стилей, чтобы
                                        удовлетворить различные вкусы и предпочтения покупателей. Основная цель состоит
                                        в том, чтобы помочь людям найти идеальный подарок для своих близких, друзей или
                                        коллег, делая процесс покупки легким, приятным и безопасным.</p>
                                </div>
                            </div>
                            <!--End Mission One Content-->
                            <!--Start Mission One Img-->
                            <div class="col-lg-6 mt-30">
                                <div class="mission__thumb wow fadeInRight animated"><img
                                    src="public/assets/images/about/about2.jpg" alt=""/>
                                    <div class="content-box">
                                        <div class="icon"><i class="flaticon-quote"></i></div>
                                        <h3>Подаренный бриллиант сверкает гораздо ярче, чем тот, что ты купила
                                            сама.</h3>
                                        <div class="author-box">
                                            <h5>Мэй Уэст</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Mission One Img-->
                        </div>
                    </div>
                </div>
            </section>
            <!--End Mission One-->
        </main>
    </div>
</template>

<script>
export default {
    name: "Index",
    mounted() {
        $(document).trigger('initi')
    }
}
</script>

<style scoped>

</style>
