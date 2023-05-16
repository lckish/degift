<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <div class="breadcrumb-area"
                 style="background-image: url(public/assets/images/inner-pages/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
                                <h2>Товары</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="/"><i class="flaticon-home pe-2"></i>Главная</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Страница товаров</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Breadcrumb Style2-->
<!--            &lt;!&ndash;Start Product Categories One&ndash;&gt;-->
<!--            <section class="product-categories-one pb-60">-->
<!--                <div class="container">-->
<!--                    <div class="row wow fadeInUp animated">-->
<!--                        <div class="col-xl-12">-->
<!--                            <div class="product-categories-one__inner">-->
<!--                                <ul>-->
<!--                                    <li><a href="#0" class="img-box">-->
<!--                                        <div class="inner"><img-->
<!--                                            src="public/assets/images/shop/product-categories-v1-img1.png"-->
<!--                                            alt=""/></div>-->
<!--                                    </a>-->
<!--                                        <div class="title"><a href="#0">-->
<!--                                            <h6>Accessories</h6>-->
<!--                                        </a></div>-->
<!--                                    </li>-->
<!--                                    <li><a href="#0" class="img-box">-->
<!--                                        <div class="inner"><img-->
<!--                                            src="public/assets/images/shop/product-categories-v1-img2.png"-->
<!--                                            alt=""/></div>-->
<!--                                    </a>-->
<!--                                        <div class="title"><a href="#0">-->
<!--                                            <h6>Furnitures</h6>-->
<!--                                        </a></div>-->
<!--                                    </li>-->
<!--                                    <li><a href="#0" class="img-box">-->
<!--                                        <div class="inner"><img-->
<!--                                            src="public/assets/images/shop/product-categories-v1-img3.png"-->
<!--                                            alt=""/></div>-->
<!--                                    </a>-->
<!--                                        <div class="title"><a href="#0">-->
<!--                                            <h6>Jewellery</h6>-->
<!--                                        </a></div>-->
<!--                                    </li>-->
<!--                                    <li><a href="#0" class="img-box">-->
<!--                                        <div class="inner"><img-->
<!--                                            src="public/assets/images/shop/product-categories-v1-img4.png"-->
<!--                                            alt=""/></div>-->
<!--                                    </a>-->
<!--                                        <div class="title"><a href="#0">-->
<!--                                            <h6>Shoes</h6>-->
<!--                                        </a></div>-->
<!--                                    </li>-->
<!--                                    <li><a href="#0" class="img-box">-->
<!--                                        <div class="inner"><img-->
<!--                                            src="public/assets/images/shop/product-categories-v1-img5.png"-->
<!--                                            alt=""/></div>-->
<!--                                    </a>-->
<!--                                        <div class="title"><a href="#0">-->
<!--                                            <h6>Electronics</h6>-->
<!--                                        </a></div>-->
<!--                                    </li>-->
<!--                                    <li><a href="#0" class="img-box">-->
<!--                                        <div class="inner"><img-->
<!--                                            src="public/assets/images/shop/product-categories-v1-img6.png"-->
<!--                                            alt=""/></div>-->
<!--                                    </a>-->
<!--                                        <div class="title"><a href="#0">-->
<!--                                            <h6>Fashion</h6>-->
<!--                                        </a></div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
<!--            &lt;!&ndash;End Product Categories One&ndash;&gt;-->
            <!--Start product-grid-->
            <div class="product-grid pt-60 pb-120">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-xl-3 col-lg-4">
                            <div class="shop-grid-sidebar">
                                <button class="remove-sidebar d-lg-none d-block"><i
                                    class="flaticon-cross"> </i></button>
                                <div class="sidebar-holder">
                                    <form action="#0"
                                          class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                                        <div class="footer-input-box p-0 "><input type="email"
                                                                                  placeholder="Email address"
                                                                                  name="email">
                                            <button type="submit" class="subscribe_btn"><i
                                                class="flaticon-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                        <h4>Выберете категорию</h4>
                                        <div class="checkbox-item">
                                            <form>
                                                <div v-for="category in filterList.categories" class="form-group"><input type="checkbox" :id="category.id"> <label
                                                    :for="category.id">{{ category.title }}</label></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div  class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <h4>Выбор цвета</h4>
                                        <ul class="color-option">
                                            <li v-for="color in filterList.colors">
                                                <a class="color-option-single" :style="`background: #${color.title}`"> <span>{{color.title}}</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <h4>Фильтровать по цене</h4>
                                        <div class="slider-box">
                                            <div id="price-range" class="slider"></div>
                                            <div class="output-price"><label for="priceRange">Цена:</label> <input
                                                type="text" id="priceRange" readonly></div>
                                            <button class="filterbtn"
                                                    type="submit"> Фильтровать
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                                        <h4>Теги </h4>
                                        <ul class="popular-tag">
                                            <li v-for="tag in filterList.tags"><a>{{ tag.title }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <!--                            табло над продуктами-->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div
                                        class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                                        <div class="left-box wow fadeInUp  animated"
                                             style="visibility: visible; animation-name: fadeInUp;">
                                            <p>Showing 1–12 of 50 Results</p>
                                        </div>
                                        <div
                                            class="right-box justify-content-md-between justify-content-center wow fadeInUp  animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="short-by">
                                                <div class="select-box">
                                                    <select class="wide" style="display: none;">
                                                        <option data-display="Short by latest">Featured</option>
                                                        <option value="1">Best selling</option>
                                                        <option value="2">Alphabetically, A-Z</option>
                                                        <option value="3">Alphabetically, Z-A</option>
                                                        <option value="3">Price, low to high</option>
                                                        <option value="3">Price, high to low</option>
                                                        <option value="3">Date, old to new</option>
                                                    </select>
                                                    <div class="nice-select wide" tabindex="0"><span class="current">Short by latest</span>
                                                        <ul class="list">
                                                            <li data-value="Featured" data-display="Short by latest"
                                                                class="option selected">Featured
                                                            </li>
                                                            <li data-value="1" class="option">Best selling</li>
                                                            <li data-value="2" class="option">Alphabetically, A-Z</li>
                                                            <li data-value="3" class="option">Alphabetically, Z-A</li>
                                                            <li data-value="3" class="option">Price, low to high</li>
                                                            <li data-value="3" class="option">Price, high to low</li>
                                                            <li data-value="3" class="option">Date, old to new</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                            продукты-->
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                             aria-labelledby="pills-grid-tab">
                                            <div class="row">
                                                <div v-for="product in products" class="col-xl-4 col-lg-6 col-6 ">
                                                    <div class="products-three-single w-100  mt-30">
                                                        <div class="products-three-single-img"><a
                                                            href="shop-details-3.html" class="d-block"> <img
                                                            :src="product.image_url"
                                                            class="first-img" alt=""/> <img
                                                            :src="product.image_url" class="hover-img"/>


                                                        </a>
                                                            <div class="products-grid-one__badge-box"> <span
                                                                class="bg_base badge new ">New</span>
                                                            </div>
                                                            <a href="cart.html" class="addcart btn--primary style2">
                                                                Добавить в корзину </a>
                                                            <div class="products-grid__usefull-links">
                                                                <ul>
                                                                    <li><a href="wishlist.html"> <i
                                                                        class="flaticon-heart">
                                                                    </i> <span>
                                                                            wishlist</span> </a></li>
                                                                    <li><a @click="getProduct(product.id)" :href="`#popup${product.id}`"
                                                                           class="popup_link"> <i
                                                                        class="flaticon-visibility"></i>
                                                                        <span>быстрый просмотр</span>
                                                                    </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div :id="`popup${product.id}`"
                                                             class="product-gird__quick-view-popup mfp-hide">
                                                            <div v-if="popupProduct" class="container">
                                                                <div
                                                                    class="row justify-content-between align-items-center">
                                                                    <div class="col-lg-6">
<!--                                                                         Провера: если картинок больше 2 то отобразятся все -->
                                                                        <div class="quick-view__left-content" v-if="popupProduct.product_images.length > 2">
                                                                            <div class="tabs">
                                                                                <div class="popup-product-thumb-box">
                                                                                    <ul>
                                                                                        <li v-for="productImage in popupProduct.product_images"
                                                                                            class="tab-nav popup-product-thumb">
                                                                                            <a :href="`#tabb${productImage.id}`">
                                                                                                <img
                                                                                                    :src="productImage.url"
                                                                                                    alt=""/> </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div
                                                                                    class="popup-product-main-image-box">
                                                                                    <div v-for="productImage in popupProduct.product_images" :id="`tabb${productImage.id}`"
                                                                                         class="tab-item popup-product-image">
                                                                                        <div
                                                                                            class="popup-product-single-image">
                                                                                            <img
                                                                                                :src="productImage.url"
                                                                                                alt=""/></div>
                                                                                    </div>
                                                                                    <button class="prev"><i
                                                                                        class="flaticon-back"></i>
                                                                                    </button>
                                                                                    <button class="next"><i
                                                                                        class="flaticon-next"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="popup-right-content">
                                                                            <h3>{{ popupProduct.title }}</h3>
                                                                            <div class="ratting"><i
                                                                                class="flaticon-star"></i> <i
                                                                                class="flaticon-star"></i> <i
                                                                                class="flaticon-star"></i>
                                                                                <i class="flaticon-star"></i> <i
                                                                                    class="flaticon-star"></i>
                                                                                <span>(112)</span></div>
                                                                            <p class="text"> {{ popupProduct.description }}
                                                                            </p>
                                                                            <div class="price">
                                                                                <h2> ₽{{ popupProduct.price }}
                                                                                    <del>₽{{ popupProduct.old_price }}</del>
                                                                                </h2>
                                                                                <h6> В наличии</h6>
                                                                            </div>
                                                                            <div class="color-varient">

                                                                                <template
                                                                                    v-for="groupProduct in popupProduct.group_products">
                                                                                    <a @click.prevent="getProduct(groupProduct.id)" v-for="color in groupProduct.colors"
                                                                                       href="#0"
                                                                                       :style="`background: #${color.title};`"
                                                                                       class="color-name">
                                                                                        <span>{{ color.title }}</span>
                                                                                    </a>
                                                                                </template>

                                                                            </div>
                                                                            <div class="add-product">
                                                                                <h6>Количество:</h6>
                                                                                <div class="button-group">
                                                                                    <div
                                                                                        class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                        class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                                        <span class="increaseQty"> <i
                                                                                            class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                                    <button class="btn--primary ">
                                                                                        Добавить в корзину
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-three-single-content text-center">
                                                            <span>{{ product.category.title }}</span>
                                                            <h5><a href="shop-details-3.html"> {{ product.title }} </a>
                                                            </h5>
                                                            <p>
                                                                <del>₽{{ product.old_price }}</del>
                                                                ₽{{ product.price }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--                            циферки снизу-->
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                                    <ul class="pagination text-center">
                                        <li class="next"><a href="#0"><i class="flaticon-left-arrows"
                                                                         aria-hidden="true"></i> </a></li>
                                        <li><a href="#0">1</a></li>
                                        <li><a href="#0" class="active">2</a></li>
                                        <li><a href="#0">3</a></li>
                                        <li><a href="#0">...</a></li>
                                        <li><a href="#0">10</a></li>
                                        <li class="next"><a href="#0"><i class="flaticon-next-1"
                                                                         aria-hidden="true"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End product-grid-->
        </main>
    </div>
</template>

<script>


export default {
    name: "Index",
    mounted() {
        $(document).trigger('initi')
        this.getProducts()
        this. getFilterList()
    },
    data() {
        return {
            products: [],
            popupProduct: null,
            filterList: [],
        }
    },

    methods: {
        getProducts() {
            this.axios.get('/api/products')
                .then(res => {
                    this.products = res.data.data
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
        },

        getFilterList() {
            this.axios.get(`/api/products/filters`)
                .then(res => {
                    this.filterList = res.data
                    //  Price Filter
                    if ($("#price-range").length) {
                        $("#price-range").slider({
                            range: true,
                            min: this.filterList.price.min,
                            max: this.filterList.price.max,
                            values: [this.filterList.price.min, this.filterList.price.max],
                            slide: function (event, ui) {
                                $("#priceRange").val("₽" + ui.values[0] + " - ₽" + ui.values[1]);
                            }
                        });
                        $("#priceRange").val("₽" + $("#price-range").slider("values", 0) + " - ₽" + $("#price-range").slider("values", 1));
                    }

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
