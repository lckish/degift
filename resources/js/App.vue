<template>
    <div>
        <!-- header-default start -->
        <header class="header-style-3">
            <!-- Start Desktop Menu -->
            <div class="menubox">
                <div class="container-fluid">
                    <div class="row d-lg-none d-block">
                        <div class="mobile-menu ">
                            <div class="mobile-menu__menu-top border-bottom-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="menu-info d-flex justify-content-between align-items-center">
                                            <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                                            href="#0" class="logo"> <img src="public/assets/images/logo/logo.png"
                                                                                 alt=""> </a>
                                            <div class="cart-holder">
                                                <a href="#" class="cart cart-icon position-relative">
                                                    <i class="flaticon-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-closer"></div>
                            <div class="mobile-menu__sidebar-menu">
                                <div class="menu-closer two"> <span>Закрыть меню</span> <span class="cross"><i
                                    class="flaticon-cross"></i></span> </div>
                                <div class="search-box-holder">
                                    <form action="#0">
                                    </form>
                                </div>
                                <ul class="page-dropdown-menu">
                                    <li class="dropdown-list"> <router-link to="/"><span>Главная </span></router-link></li>
                                    <li class="dropdown-list"> <router-link to="/products"><span>Каталог </span></router-link></li>
                                    <li class="dropdown-list"> <router-link to="/about"><span>О нас </span></router-link></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-block d-none">
                        <div class="row g-0 position-relative">
                            <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                                <div class="logo"> <a href="/"> <img src="public/assets/images/logo/logo.png" alt=""> </a>
                                </div>
                            </div>
                            <div class="col-lg-9 g-0 p-0">
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="some-info">
                                            <p class="d-flex align-items-center"> <span class="icon"> <i
                                                class="flaticon-power"></i> </span> Добро пожаловать на сервис DEGIFT</p>
                                            <div class="right d-flex align-items-center ">
                                                    <a href="/sign"> Вход / Регистрация </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-one"> </div>
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="mega-menu-default mega-menu d-lg-block d-none">
                                            <div class=" d-flex align-items-center justify-content-between ">
                                                <nav>
                                                    <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                        <li class="dropdown-list"> <router-link to="/"> <span>Главная </span>  </router-link></li>
                                                        <li class="dropdown-list"> <router-link to="/products"><span>Каталог </span></router-link></li>
                                                        <li class="dropdown-list"> <router-link to="/about"><span>О нас </span></router-link></li>
                                                    </ul>
                                                </nav>


                                                <div class="right d-flex align-items-center justify-content-end">
                                                    <ul class="main-menu__widge-box d-flex align-items-center ">
                                                        <li class="d-lg-block d-none"><a href="my-account.html"><i
                                                            class="flaticon-user"></i> </a></li>
                                                        <li class="cartm"> <a class="number cart-icon"> <i
                                                            class="flaticon-shopping-cart"></i><span
                                                            class="count">(5)</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <a href="shop-grid.html" class="offer-link"> Offer </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticy-header">
                <div class="mobile-menu d-lg-none d-block">
                    <div class="mobile-menu__menu-top border-bottom-0">
                        <div class="container">
                            <div class="row">
                                <div class="menu-info d-flex justify-content-between align-items-center">
                                    <div class="menubar"> <span></span> <span></span> <span></span> </div>
                                    <router-link to="/" class="logo"> <img src="public/assets/images/logo/logo.png" alt=""> </router-link>
                                    <div class="cart-holder">
                                        <a href="#0" class="cart cart-icon position-relative">
                                            <i class="flaticon-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container position-relative d-lg-block d-none">
                    <div class="d-flex align-items-center justify-content-between"> <router-link to="/" class="logo me-2">
                        <img src="public/assets/images/logo/logo.png" alt=""> </router-link>
                        <div class="mega-menu-default mega-menu d-lg-block d-none">
                            <div class="container ">
                                <div class="row">
                                    <nav>
                                        <ul
                                            class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                <li class="dropdown-list"> <router-link to="/"><span>Главная</span></router-link></li>
                                                <li class="dropdown-list"> <router-link to="/products"><span>Каталог </span></router-link></li>
                                                <li class="dropdown-list"> <router-link to="/about"><span>О нас </span></router-link></li>
                                            <div class="right d-flex align-items-center justify-content-end">
                                                <ul class="main-menu__widge-box d-flex align-items-center ">
                                                    <li class="d-lg-block d-none"><a href="my-account.html"><i
                                                        class="flaticon-user"></i> </a></li>
                                                    <li class="cartm"> <a class="number cart-icon"> <i
                                                        class="flaticon-shopping-cart"></i><span
                                                        class="count">(5)</span> </a> </li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-cart-closer"></div>
            <div class="side-cart d-flex flex-column justify-content-between">
                <div class="top">
                    <div class="content d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Ваша корзина (03)</h6> <span class="cart-close text-uppercase">X</span>
                    </div>
                    <div class="cart_items">
                        <div class="items d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center"> <a href="shop-details-1.html"
                                                                            class="thumb d-flex justify-content-between align-items-center"> <img
                                src="assets/images/shop/products-img1.jpg" alt=""> </a>
                                <div class="text"> <a href="shop-details-1.html">
                                    <h6>Diamond Bracelet</h6>
                                </a>
                                    <p>2 X <span>$350.00</span> </p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                            </div>
                        </div>
                        <div class="items d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center"> <a href="shop-details-1.html"
                                                                            class="thumb d-flex justify-content-between align-items-center"> <img
                                src="assets/images/shop/products-img2.jpg" alt=""> </a>
                                <div class="text"> <a href="shop-details-1.html">
                                    <h6>Blacked Neckles </h6>
                                </a>
                                    <p>1 X <span>$150.00</span> </p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                            </div>
                        </div>
                        <div class="items d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center"> <a href="shop-details-1.html"
                                                                            class="thumb d-flex justify-content-between align-items-center"> <img
                                src="assets/images/shop/products-img3.jpg" alt=""> </a>
                                <div class="text"> <a href="shop-details-1.html">
                                    <h6>Diamond Ring </h6>
                                </a>
                                    <p>1 X <span>$200.00</span> </p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                            </div>
                        </div>
                        <div class="items d-flex justify-content-between align-items-center">
                            <div class="left d-flex align-items-center"> <a href="shop-details-2.html"
                                                                            class="thumb d-flex justify-content-between align-items-center"> <img
                                src="assets/images/shop/products-img4.jpg" alt=""> </a>
                                <div class="text"> <a href="shop-details-1.html">
                                    <h6>Women Earring</h6>
                                </a>
                                    <p>1 X <span>$150.00</span> </p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="item-remove"> <i class="flaticon-cross"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="total-ammount d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Итого:</h6>
                        <h6 class="ammount text-uppercase">$850.00</h6>
                    </div>
                    <div class="button-box d-flex justify-content-between"> <router-link to="/cart" class="btn_black"> Перейти в корзину
                    </router-link> <router-link to="/cart" class="button-2 btn_theme"> Купить </router-link> </div>
                </div>
            </div>
<!--            <div class="sidebar-content-closer"></div>-->
<!--            <div class="sidebar-content">-->
<!--                <div class="sidebar-widget-container">-->
<!--                    <div class="widget-heading d-flex justify-content-end align-content-center"> <span-->
<!--                        class="close-side-widget">X</span> </div>-->
<!--                    <div class="sidebar-textwidget">-->
<!--                        <div class="sidebar-info-contents">-->
<!--                            <div class="content-inner">-->
<!--                                <div class="logo"> <a href="index.html"><img src="public/assets/images/logo/logo-2.png" alt=""></a>-->
<!--                                </div>-->
<!--                                <div class="content-box">-->
<!--                                    <h4>About Us</h4>-->
<!--                                    <div class="inner-text">-->
<!--                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem-->
<!--                                            Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form_inner">-->
<!--                                    <h4>Support</h4>-->
<!--                                    <form action="index.html" method="post">-->
<!--                                        <div class="form-group mt-4"> <input type="text" name="name" placeholder="Name"-->
<!--                                                                             required=""> </div>-->
<!--                                        <div class="form-group mt-4"> <input type="email" name="email" placeholder="Email"-->
<!--                                                                             required=""> </div>-->
<!--                                        <div class="form-group mt-4"> <textarea name="message"-->
<!--                                                                                placeholder="Message..."></textarea> </div>-->
<!--                                        <div class="form-group message-btn mt-4"> <button type="submit"-->
<!--                                                                                          class="btn&#45;&#45;secondary"> <span class="txt">Submit Now</span> </button> </div>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                                <div class="sidebar-contact-info">-->
<!--                                    <h4>Contact Info</h4>-->
<!--                                    <ul>-->
<!--                                        <li> <span class="flaticon-pin-1"></span> New York, United States </li>-->
<!--                                        <li> <span class="flaticon-telephone"></span> <a href="tel:+44203700001">+44 123 456-->
<!--                                            789</a> </li>-->
<!--                                        <li> <span class="flaticon-mail"></span> <a-->
<!--                                            href="mailto:info@example.com">info@example.com</a> </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                                <div class="thm-medio-boxx1">-->
<!--                                    <ul class="social-box">-->
<!--                                        <li class="facebook"> <a href="https://www.facebook.com/" target="_blank"><i-->
<!--                                            class="flaticon-facebook-app-symbol"></i></a> </li>-->
<!--                                        <li class="twitter"> <a href="https://twitter.com/" target="_blank"><i-->
<!--                                            class="flaticon-twitter"></i></a> </li>-->
<!--                                        <li class="instagram"> <a href="https://www.instagram.com/" target="_blank"><i-->
<!--                                            class="flaticon-instagram"></i></a> </li>-->
<!--                                        <li class="youtube"> <a href="https://www.youtube.com/" target="_blank"><i-->
<!--                                            class="flaticon-youtube"></i></a> </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </header>

        <router-view></router-view>

        <!--  Footer Three start -->
        <footer class="footer-default footer-3 ">
            <div class="footer-default__shap_1 position-absolute "> <img src="public/assets/images/shape/footer-shape-1.png"
                                                                         alt=""> </div>
            <!--Start Footer-->
            <div class="footer-default__main-footer position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="company-info">
                                    <div class="footer-title">
                                        <h4> Офис</h4>
                                    </div>
                                    <div class="text1">
                                        <p>30 лет победы, 7А</p>
                                    </div>
                                    <div class="text3">
                                        <p>Ижевск, Российская федерация</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Полезные ссылки </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a href="my-account.html">Мой аккаунт</a></li>
                                    <li><a href="/sign">Вход</a></li>
                                    <li><a href="/cart">Просмотреть карзину</a></li>
                                    <li><a href="wishlist.html">Мой список желаемого</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Информация </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a href="about-us.html">О нас</a></li>
                                    <li><a href="contact.html">Наши контакты </a></li>
                                    <li><a href="faq.html">Вопросы</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Рассылка новостей </h4>
                                </div>
                                <div class="footer-newsletter">
                                    <p class="text">Введите свой адрес электронной почты, чтобы получать последние обновления о наших продуктах и
                                        рекламных акциях. </p>
                                    <form action="#0" class="footer-default__subscrib-form">
                                        <div class="footer-input-box"> <input type="email" placeholder="Почтовый адрес"
                                                                              name="email"> <button type="submit" class="subscribe_btn"> Подписаться
                                        </button> </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- footer-bottom Footer-->
            <div class="footer_bottom position-relative">
                <div class="container">
                    <div class="footer_bottom_content">
                        <div class="copyright wow fadeInUp animated">
                            <p>© 2023 <a href="#">Degift.</a> Все права защищены.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: "App",
    mounted() {
        $(document).trigger('initi')
    }
}
</script>

<style scoped>

</style>
