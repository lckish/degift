<template>
    <div>
        <main class="overflow-hidden">

            <!--                &lt;!&ndash; newsLetter_popup Start &ndash;&gt;-->
            <!--                <button data-mfp-src="#newsLetter-popup" class="modal-btn d-none"></button>-->
            <!--                <div id="newsLetter-popup" class="mfp-hide p-4" role="dialog">-->
            <!--                    <div class="row align-items-center justify-content-sm-between">-->
            <!--                        <div class="col-lg-5 d-lg-block d-none">-->
            <!--                            <div class="newsLetter-popup__thumb imgenews">-->
            <!--                                <img src="public/assets/images/home-three/products-1.jpg" alt="newsletter">-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-lg-7 col-md-8 col-sm-10">-->
            <!--                            <div class="newsLetter-popup__content mb-4">-->
            <!--                                <div class="text-center"> <a href="index.html" class="logo"> <img-->
            <!--                                    src="public/assets/images/logo/logo.png" alt="logo"> </a>-->
            <!--                                    <h2> Join <span>with us.</span> </h2>-->
            <!--                                    <p> Subscribe to receive news from Karte In a free hour </p>-->
            <!--                                </div>-->
            <!--                                <form action="#0" class="newsLetter-popup__subscrib-form">-->
            <!--                                    <div class="input_box"> <input type="email" placeholder="Enter your email Address"-->
            <!--                                                                   name="email"> <button type="submit" class="subscribe_btn"> Submit </button> </div>-->
            <!--                                    <div class="form-group "> <input type="checkbox" id="html"> <label for="html"> By providing-->
            <!--                                        my information, I agree to Karte <a href="#0"> Privacy Policy</a> and <a href="#0">-->
            <!--                                            Legal Statement</a> </label> </div>-->
            <!--                                </form>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->


            <!-- Start Main Slider -->
            <section class="banner-style-3 overflow-hidden">
                <!-- Banner Carousel -->
                <div class="banner-slide3 slick" data-slick='{"dots": true, "infinite": true, "speed": 600, "slidesToShow": 1,
                "slidesToScroll": 1, "arrows": false, "autoplay": true, "autoplaySpeed": 6000,
                 "fade": false, "pauseOnHover": false}'>

                    <!-- Slide -->
                    <div class="slide">
                        <div class="contant-box position-relative">

                            <img class="bg-img hundread-vh" src="public/assets/images/main/summer_sale.jpg" alt="image">

                            <div class="content-holder p-0 absolute-content">
                                <div class="container  w-100 h-100">
                                    <div class="row align-items-center justify-content-start w-100 h-100">
                                        <div class="col-xl-6 col-md-9">
                                            <div class="content-common home3c slideup position-relative">
                                                <!--                                                    <h6 class="new wow animated fadeInUp">ТЕКСТТЕКСТ</h6>-->
                                                <h1 class="wow animated fadeInUp" data-wow-delay="0.4s">
                                                    ЛЕТНИЕ СКИДКИ
                                                </h1>
                                                <p class="text wow animated fadeInUp">
                                                    Успейте подарить летнее настроение всем близким!!!
                                                </p>
                                                <router-link to="/products" href=""
                                                             class="btn--primary button style2 wow animated fadeInUp">
                                                    Выбрать подарки
                                                </router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="contant-box position-relative">


                            <img class="bg-img hundread-vh" src="public/assets/images/main/sale_50.jpg" alt="image">


                            <div class="content-holder p-0 absolute-content">
                                <div class="container w-100 h-100">
                                    <div class="row align-items-center justify-content-end w-100 h-100">
                                        <div class="col-xl-6 col-md-9">
                                            <div class="content-common slidedown home3c position-relative text-center">
                                                <!--                                                    <h6 class="new wow animated fadeInUp">TEXT</h6>-->
                                                <h1 class="wow animated fadeInUp" data-wow-delay="0.4s">
                                                    Не пропусти <br>
                                                </h1>
                                                <p class="text wow animated fadeInUp ms-auto me-auto">
                                                    Добавление большого ассортимента летних подарков с приятной скидкой
                                                    только для вас.
                                                </p>
                                                <router-link to="/products" href=""
                                                             class="btn--primary button style2 wow animated fadeInUp">
                                                    Смотреть
                                                </router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Main Slider -->


            <!-- catagory4 Start -->
            <div class="catagory4 pt-60 pb-60">
                <div class="container">
                    <div class="row mt--30">
                        <div class="col-lg-6 h-100 mt-30">
                            <router-link to="/" href="" class="catagory-single one home3cat">
                                <img src="public/assets/images/main/test_main1.png" alt="#"
                                     class="background-img bg-img imgone">
                                <div class="content">
                                    <div class="row w-100 h-100 align-items-center">
                                        <div class="col-xl-7 col-md-9">
                                            <h5 class="wow animated fadeInUp" data-wow-delay="0.2s"> Успей купить</h5>
                                            <h3 class="wow animated fadeInUp" data-wow-delay="0.3s"> Скидка на игрушки
                                            </h3>
                                            <span class=" link wow animated fadeInUp" data-wow-delay="0.4s">Посмотреть</span>
                                        </div>
                                    </div>
                                </div>
                            </router-link>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="co-12 mt-30 ">
                                    <router-link to="/" class="catagory-single home3cat">
                                        <img src="public/assets/images/main/test_main2.png" alt=""
                                             class="background-img bg-img">
                                        <div class="content">
                                            <div class="row w-100 h-100 align-items-center">
                                                <div class="col-12">
                                                    <h5 class=" wow animated red fadeInUp" data-wow-delay="0.2s"> 20%
                                                        Off
                                                    </h5>
                                                    <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Женская косметика
                                                    </h3>
                                                    <span class="link wow animated fadeInUp" data-wow-delay="0.4s">Посмотреть</span>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                                <div class="col-12 mt-30">
                                    <router-link to="/" href="" class="catagory-single home3cat">
                                        <img src="public/assets/images/main/test_main3.png" alt=""
                                             class="background-img bg-img">
                                        <div class="content">
                                            <div class="row w-100 h-100 align-items-center">
                                                <div class="col-xxl-6 col-lg-9">
                                                    <h5 class=" wow animated fadeInUp" data-wow-delay="0.2s"> Не упусти шанс
                                                    </h5>
                                                    <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Скидка на первую покупку
                                                    </h3>
                                                    <span class="link wow animated fadeInUp" data-wow-delay="0.4s">посмотреть</span>
                                                </div>
                                            </div>
                                        </div>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- catagory4 End -->


            <!-- Categories tab Start -->
<!--            <section class="categories-tab pt-60 pb-60 wow fadeInUp">-->
<!--                <div class="container auto-container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-12">-->
<!--                            <ul class="nav three nav-pills justify-content-center" id="pills-tab-two" role="tablist">-->
<!--                                <li class="nav-item" role="presentation">-->
<!--                                    <button class="nav-link active"-->
<!--                                            id="pills-best-sellers-tab" data-bs-toggle="pill"-->
<!--                                            data-bs-target="#pills-best-sellers" type="button" role="tab"-->
<!--                                            aria-controls="pills-best-sellers" aria-selected="true"> Лидеры продаж-->
<!--                                    </button>-->
<!--                                </li>-->
<!--                                <li class="nav-item" role="presentation">-->
<!--                                    <button class="nav-link"-->
<!--                                            id="pills-new-arrivals-tab" data-bs-toggle="pill"-->
<!--                                            data-bs-target="#pills-new-arrivals" type="button" role="tab"-->
<!--                                            aria-controls="pills-new-arrivals" aria-selected="false"> Новинки-->
<!--                                    </button>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="row">-->
<!--                        <div class="tab-content" id="pills-tabContent-two">-->
<!--                            <div class="tab-pane fade show active" id="pills-best-sellers" role="tabpanel"-->
<!--                                 aria-labelledby="pills-best-sellers-tab">-->
<!--                                <div class="catagory-slider-three">-->
<!--                                    <div v-for="product in products" class="products-three__inner">-->
<!--                                        <div  v-if="product.id < 7" class="products-three-single w-100">-->
<!--                                            <div  class="products-three-single-img">-->
<!--                                                &lt;!&ndash;                                                            ссылка по фото&ndash;&gt;-->
<!--                                                <router-link-->
<!--                                                    :to="{name: 'products.show', params: {id: product.id}}"-->
<!--                                                    class="d-block"><img-->
<!--                                                    :src="product.image_url"-->
<!--                                                    class="first-img" alt=""/> <img-->
<!--                                                    :src="product.image_url" alt="" class="hover-img"/>-->

<!--                                                </router-link>-->
<!--                                                <div class="products-grid-one__badge-box"> <span-->
<!--                                                    class="bg_base badge new ">New</span>-->
<!--                                                    <span v-if="product.old_price !== null"-->
<!--                                                          class="bg_base badge discount ">{{-->
<!--                                                            Math.round((product.price / product.old_price) * 100) - 100-->
<!--                                                        }}%</span>-->
<!--                                                </div>-->
<!--                                                <a @click.prevent="addToCart(product, true)" href=""-->
<!--                                                   class="addcart btn&#45;&#45;primary style2">-->
<!--                                                    Добавить в корзину </a>-->
<!--                                                <div class="products-grid__usefull-links">-->
<!--                                                    <ul>-->
<!--                                                        <li><a @click="getProduct(product.id)"-->
<!--                                                               :href="`#popup${product.id}`"-->
<!--                                                               class="popup_link"> <i-->
<!--                                                            class="flaticon-visibility"></i>-->
<!--                                                            <span>быстрый просмотр</span>-->
<!--                                                        </a></li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div :id="`popup${product.id}`"-->
<!--                                                 class="product-gird__quick-view-popup mfp-hide">-->
<!--                                                <div v-if="popupProduct" class="container">-->
<!--                                                    <div-->
<!--                                                        class="row justify-content-between align-items-center">-->
<!--                                                        <div class="col-lg-6">-->
<!--                                                            &lt;!&ndash;                                                                         Провера: если картинок больше 2 то отобразятся все &ndash;&gt;-->
<!--                                                            <div class="quick-view__left-content"-->
<!--                                                                 v-if="popupProduct.product_images.length > 2">-->
<!--                                                                <div class="tabs">-->
<!--                                                                    <div class="popup-product-thumb-box">-->
<!--                                                                        <ul>-->
<!--                                                                            <li v-for="productImage in popupProduct.product_images"-->
<!--                                                                                class="tab-nav popup-product-thumb">-->
<!--                                                                                <a :href="`#tabb${productImage.id}`">-->
<!--                                                                                    <img-->
<!--                                                                                        :src="productImage.url"-->
<!--                                                                                        alt=""/> </a>-->
<!--                                                                            </li>-->
<!--                                                                        </ul>-->
<!--                                                                    </div>-->
<!--                                                                    <div-->
<!--                                                                        class="popup-product-main-image-box">-->
<!--                                                                        <div-->
<!--                                                                            v-for="productImage in popupProduct.product_images"-->
<!--                                                                            :id="`tabb${productImage.id}`"-->
<!--                                                                            class="tab-item popup-product-image">-->
<!--                                                                            <div-->
<!--                                                                                class="popup-product-single-image">-->
<!--                                                                                <img-->
<!--                                                                                    :src="productImage.url"-->
<!--                                                                                    alt=""/></div>-->
<!--                                                                        </div>-->
<!--                                                                        <button class="prev"><i-->
<!--                                                                            class="flaticon-back"></i>-->
<!--                                                                        </button>-->
<!--                                                                        <button class="next"><i-->
<!--                                                                            class="flaticon-next"></i>-->
<!--                                                                        </button>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-lg-6">-->
<!--                                                            <div class="popup-right-content">-->
<!--                                                                <h3>{{ popupProduct.title }}</h3>-->
<!--                                                                <p class="text"> {{-->
<!--                                                                        popupProduct.description-->
<!--                                                                    }}-->
<!--                                                                </p>-->
<!--                                                                <div class="price">-->
<!--                                                                    <h2> ₽{{ popupProduct.price }}-->
<!--                                                                        <del-->
<!--                                                                            v-if="popupProduct.old_price !== null">-->
<!--                                                                            {{-->
<!--                                                                                popupProduct.old_price-->
<!--                                                                            }}-->
<!--                                                                        </del>-->
<!--                                                                    </h2>-->
<!--                                                                    <h6> В наличии</h6>-->
<!--                                                                </div>-->
<!--                                                                <div class="color-varient">-->

<!--                                                                    <template-->
<!--                                                                        v-for="groupProduct in popupProduct.group_products">-->
<!--                                                                        <a @click.prevent="getProduct(groupProduct.id)"-->
<!--                                                                           v-for="color in groupProduct.colors"-->
<!--                                                                           href="#0"-->
<!--                                                                           :style="`background: #${color.title};`"-->
<!--                                                                           class="color-name">-->
<!--                                                                            <span>{{ color.title }}</span>-->
<!--                                                                        </a>-->
<!--                                                                    </template>-->

<!--                                                                </div>-->
<!--                                                                <div class="add-product">-->
<!--                                                                    <h6>Количество:</h6>-->
<!--                                                                    <div class="button-group">-->
<!--                                                                        <div-->
<!--                                                                            class="qtySelector text-center">-->
<!--                                                                                    <span class="decreaseQty"><i-->
<!--                                                                                        class="flaticon-minus"></i>-->
<!--                                                                                    </span> <input type="number"-->
<!--                                                                                                   class="qtyValue"-->
<!--                                                                                                   value="1"/>-->
<!--                                                                            <span class="increaseQty"> <i-->
<!--                                                                                class="flaticon-plus"></i>-->
<!--                                                                                    </span></div>-->
<!--                                                                        <button @click.prevent="addToCart(product)"-->
<!--                                                                                class="btn&#45;&#45;primary ">-->
<!--                                                                            Добавить в корзину-->
<!--                                                                        </button>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="products-three-single-content text-center">-->
<!--                                                <span>{{ product.category.title }}</span>-->
<!--                                                <h5>-->
<!--                                                    <router-link-->
<!--                                                        :to="{name: 'products.show', params: {id: product.id}}">-->
<!--                                                        {{ product.title }}-->
<!--                                                    </router-link>-->
<!--                                                </h5>-->
<!--                                                <p>-->
<!--                                                    <del v-if="product.old_price !== null">-->
<!--                                                        ₽{{ product.old_price }}-->
<!--                                                    </del>-->
<!--                                                    ₽{{ product.price }}-->
<!--                                                </p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="tab-pane fade" id="pills-new-arrivals" role="tabpanel"-->
<!--                                 aria-labelledby="pills-new-arrivals-tab">-->
<!--                                <div class="catagory-slider-three">-->

<!--                                    <div v-for="product in products" class="products-three__inner">-->
<!--                                        <div v-if="product.id > 7" class="products-three-single w-100  mt-30">-->
<!--                                            <div class="products-three-single-img">-->
<!--                                                &lt;!&ndash;                                                            ссылка по фото&ndash;&gt;-->
<!--                                                <router-link-->
<!--                                                    :to="{name: 'products.show', params: {id: product.id}}"-->
<!--                                                    class="d-block"><img-->
<!--                                                    :src="product.image_url"-->
<!--                                                    class="first-img" alt=""/> <img-->
<!--                                                    :src="product.image_url" alt="" class="hover-img"/>-->

<!--                                                </router-link>-->
<!--                                                <div class="products-grid-one__badge-box"> <span-->
<!--                                                    class="bg_base badge new ">New</span>-->
<!--                                                    <span v-if="product.old_price !== null"-->
<!--                                                          class="bg_base badge discount ">{{-->
<!--                                                            Math.round((product.price / product.old_price) * 100) - 100-->
<!--                                                        }}%</span>-->
<!--                                                </div>-->
<!--                                                <a @click.prevent="addToCart(product, true)" href=""-->
<!--                                                   class="addcart btn&#45;&#45;primary style2">-->
<!--                                                    Добавить в корзину </a>-->
<!--                                                <div class="products-grid__usefull-links">-->
<!--                                                    <ul>-->
<!--                                                        <li><a @click="getProduct(product.id)"-->
<!--                                                               :href="`#popup${product.id}`"-->
<!--                                                               class="popup_link"> <i-->
<!--                                                            class="flaticon-visibility"></i>-->
<!--                                                            <span>быстрый просмотр</span>-->
<!--                                                        </a></li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div :id="`popup${product.id}`"-->
<!--                                                 class="product-gird__quick-view-popup mfp-hide">-->
<!--                                                <div v-if="popupProduct" class="container">-->
<!--                                                    <div-->
<!--                                                        class="row justify-content-between align-items-center">-->
<!--                                                        <div class="col-lg-6">-->
<!--                                                            &lt;!&ndash;                                                                         Провера: если картинок больше 2 то отобразятся все &ndash;&gt;-->
<!--                                                            <div class="quick-view__left-content"-->
<!--                                                                 v-if="popupProduct.product_images.length > 2">-->
<!--                                                                <div class="tabs">-->
<!--                                                                    <div class="popup-product-thumb-box">-->
<!--                                                                        <ul>-->
<!--                                                                            <li v-for="productImage in popupProduct.product_images"-->
<!--                                                                                class="tab-nav popup-product-thumb">-->
<!--                                                                                <a :href="`#tabb${productImage.id}`">-->
<!--                                                                                    <img-->
<!--                                                                                        :src="productImage.url"-->
<!--                                                                                        alt=""/> </a>-->
<!--                                                                            </li>-->
<!--                                                                        </ul>-->
<!--                                                                    </div>-->
<!--                                                                    <div-->
<!--                                                                        class="popup-product-main-image-box">-->
<!--                                                                        <div-->
<!--                                                                            v-for="productImage in popupProduct.product_images"-->
<!--                                                                            :id="`tabb${productImage.id}`"-->
<!--                                                                            class="tab-item popup-product-image">-->
<!--                                                                            <div-->
<!--                                                                                class="popup-product-single-image">-->
<!--                                                                                <img-->
<!--                                                                                    :src="productImage.url"-->
<!--                                                                                    alt=""/></div>-->
<!--                                                                        </div>-->
<!--                                                                        <button class="prev"><i-->
<!--                                                                            class="flaticon-back"></i>-->
<!--                                                                        </button>-->
<!--                                                                        <button class="next"><i-->
<!--                                                                            class="flaticon-next"></i>-->
<!--                                                                        </button>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                        <div class="col-lg-6">-->
<!--                                                            <div class="popup-right-content">-->
<!--                                                                <h3>{{ popupProduct.title }}</h3>-->
<!--                                                                <p class="text"> {{-->
<!--                                                                        popupProduct.description-->
<!--                                                                    }}-->
<!--                                                                </p>-->
<!--                                                                <div class="price">-->
<!--                                                                    <h2> ₽{{ popupProduct.price }}-->
<!--                                                                        <del-->
<!--                                                                            v-if="popupProduct.old_price !== null">-->
<!--                                                                            {{-->
<!--                                                                                popupProduct.old_price-->
<!--                                                                            }}-->
<!--                                                                        </del>-->
<!--                                                                    </h2>-->
<!--                                                                    <h6> В наличии</h6>-->
<!--                                                                </div>-->
<!--                                                                <div class="color-varient">-->

<!--                                                                    <template-->
<!--                                                                        v-for="groupProduct in popupProduct.group_products">-->
<!--                                                                        <a @click.prevent="getProduct(groupProduct.id)"-->
<!--                                                                           v-for="color in groupProduct.colors"-->
<!--                                                                           href="#0"-->
<!--                                                                           :style="`background: #${color.title};`"-->
<!--                                                                           class="color-name">-->
<!--                                                                            <span>{{ color.title }}</span>-->
<!--                                                                        </a>-->
<!--                                                                    </template>-->

<!--                                                                </div>-->
<!--                                                                <div class="add-product">-->
<!--                                                                    <h6>Количество:</h6>-->
<!--                                                                    <div class="button-group">-->
<!--                                                                        <div-->
<!--                                                                            class="qtySelector text-center">-->
<!--                                                                                    <span class="decreaseQty"><i-->
<!--                                                                                        class="flaticon-minus"></i>-->
<!--                                                                                    </span> <input type="number"-->
<!--                                                                                                   class="qtyValue"-->
<!--                                                                                                   value="1"/>-->
<!--                                                                            <span class="increaseQty"> <i-->
<!--                                                                                class="flaticon-plus"></i>-->
<!--                                                                                    </span></div>-->
<!--                                                                        <button @click.prevent="addToCart(product)"-->
<!--                                                                                class="btn&#45;&#45;primary ">-->
<!--                                                                            Добавить в корзину-->
<!--                                                                        </button>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="products-three-single-content text-center">-->
<!--                                                <span>{{ product.category.title }}</span>-->
<!--                                                <h5>-->
<!--                                                    <router-link-->
<!--                                                        :to="{name: 'products.show', params: {id: product.id}}">-->
<!--                                                        {{ product.title }}-->
<!--                                                    </router-link>-->
<!--                                                </h5>-->
<!--                                                <p>-->
<!--                                                    <del v-if="product.old_price !== null">-->
<!--                                                        ₽{{ product.old_price }}-->
<!--                                                    </del>-->
<!--                                                    ₽{{ product.price }}-->
<!--                                                </p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="loder">-->
<!--                                <div id="overlay" style="display:none;">-->
<!--                                    <div class="spinner"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
            <!-- Categories tab End -->

            <!--Start Categories Two-->
            <section class="categories-three overflow-hidden">
                <div class="auto-container container">
                    <div class="row">
                        <div class="categories-three__inner pt-120 pb-120">
                            <div class="row align-items-center justify-content-xl-start justify-content-center">
                                <div class="col-xl-4 col-md-7">
                                    <div
                                        class="categories-three__content text-xl-start text-center wow fadeInUp animated">
                                        <div class="sec-title-style2 style3">
                                            <h2>Популярные категории</h2>
                                        </div>
                                        <div class="btn-box"><router-link to="/products" href=""
                                                                class="btn--primary style2">Смотреть остальные</router-link></div>
                                    </div>
                                </div>

                                <div class="col-xl-8">
                                    <div class="row  justify-content-center">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                                <div class="categories-three__list-item-inner"><router-link to="/products"
                                                    href="" class="img-box"> <img
                                                    src="public/assets/images/home-three/categories-v2-img1.jpg"
                                                    alt=""/>
                                                    <div class="text"><span>69 товаров</span></div>
                                                </router-link>
                                                    <div class="title text-center">
                                                        <h4><router-link to="/products" href="">Игрушки</router-link></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                                <div class="categories-three__list-item-inner"><router-link
                                                    to="/products" href="" class="img-box"> <img
                                                    src="public/assets/images/home-three/categories-v2-img2.jpg"
                                                    alt=""/>
                                                    <div class="text"><span>74 товаров</span></div>
                                                </router-link>
                                                    <div class="title text-center">
                                                        <h4><router-link to="/products" href="">Косметика</router-link></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="categories-three__list-item mt-30 wow fadeInUp animated">
                                                <div class="categories-three__list-item-inner"><router-link
                                                    to="/products" href="" class="img-box"> <img
                                                    src="public/assets/images/home-three/categories-v2-img3.jpg"
                                                    alt=""/>
                                                    <div class="text"><span>36 товаров</span></div>
                                                </router-link>
                                                    <div class="title text-center">
                                                        <h4><router-link to="/products" href="">Книги</router-link></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Categories Two-->

            <!-- core-features Start -->
            <section class="core-features pt-120 mb-60 overflow-hidden">
                <div class="container auto-container">
                    <div class="row mt--30">
                        <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.2s">
                            <div class="core-features__box d-flex ms-0"><span class="one"></span> <span
                                class="two"></span>
                                <div class="icon"><img src="public/assets/images/icon/f-icon-1.png" alt=""></div>
                                <div class="core-features__box-content"><router-link to="/sign" href="" class="d-block">
                                    <h4> Безопасный платеж </h4>
                                </router-link>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.3s">
                            <div class="core-features__box d-flex "><span class="one"></span> <span class="two"></span>
                                <div class="icon"><img src="public/assets/images/icon/f-icon-2.png" alt=""></div>
                                <div class="core-features__box-content"><a href="/sign" class="d-block">
                                    <h4> 27/7 Быстрая доставка </h4>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.4s">
                            <div class="core-features__box d-flex "><span class="one"></span> <span class="two"></span>
                                <div class="icon"><img src="public/assets/images/icon/f-icon-3.png" alt=""></div>
                                <div class="core-features__box-content"><a href="/sign" class="d-block">
                                    <h4> Возврат денежных средств </h4>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6 mt-30 wow fadeInUp animated " data-wow-delay="0.5s">
                            <div class="core-features__box d-flex me-0"><span class="one"></span> <span
                                class="two"></span>
                                <div class="icon"><img src="public/assets/images/icon/f-icon-4.png" alt=""></div>
                                <div class="core-features__box-content"><a href="/sign" class="d-block">
                                    <h4> Качественная поддержка </h4>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>
</template>

<script>
export default {
    name: "Index",
    mounted() {
        $(document).trigger('initi')
        this.getProducts()
    },
    data() {
        return {
            products: [],
            popupProduct: null,
            filterList: [],
            categories: [],
            colors: [],
            tags: [],
            prices: [],
            pagination: [],
        }
    },

    methods: {


        addToCart(product, isSingle) {
            let qty = isSingle ? 1 : $('.qtyValue').val()
            let cart = localStorage.getItem('cart')
            $('.qtyValue').val(1)


            let newProduct = [{
                'id': product.id,
                'image_url': product.image_url,
                'title': product.title,
                'price': product.price,
                'qty': qty
            }]
            if (!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct));
            } else {
                cart = JSON.parse((cart))

                cart.forEach(productInCart => {
                    if (productInCart.id === product.id) {
                        productInCart.qty = Number(productInCart.qty) + Number(qty)
                        newProduct = null
                    }

                })

                Array.prototype.push.apply(cart, newProduct)
                localStorage.setItem('cart', JSON.stringify(cart))
                location.reload();
                console.log(cart)
            }
        },


        filterProducts() {
            let prices = $('#priceRange').val()
            this.prices = prices.replace(/[\s+]|[₽]/g, '').split('-')
            this.getProducts()

        },

        addColor(id) {
            if (!this.colors.includes(id)) {
                this.colors.push(id)
            } else {
                this.colors = this.colors.filter(elem => {
                    return elem !== id
                })
            }
        },

        addTag(id) {
            if (!this.tags.includes(id)) {
                this.tags.push(id)
            } else {
                this.tags = this.tags.filter(elem => {
                    return elem !== id
                })
            }
        },


        getProducts(page = 1) {
            this.axios.post('/api/products', {
                'categories': this.categories,
                'colors': this.colors,
                'tags': this.tags,
                'prices': this.prices,
                'page': page
            })
                .then(res => {
                    this.products = res.data.data
                    this.pagination = res.data.meta
                    console.log(res);
                })
                .finally(v => {
                    $(document).trigger('initi')
                })
        },
        getProduct(id) {
            this.axios.get(`/api/products/${id}`)
                .then(res => {
                    this.popupProduct = res.data.data
                    console.log(res);
                })
                .finally(v => {
                    $(document).trigger('initi')
                })
        }
    }
}
</script>

<style scoped>

</style>
