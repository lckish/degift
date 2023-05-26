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
                                                                                  placeholder="Поиск"
                                                                                  name="email">
                                            <button type="submit" class="subscribe_btn"><i
                                                class="flaticon-magnifying-glass"></i></button>
                                        </div>
                                    </form>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                        <!--                                        фильтр по категориям-->
                                        <h4>Выберете категорию</h4>
                                        <div class="checkbox-item">
                                            <form>
                                                <div v-for="category in filterList.categories" class="form-group"><input
                                                    :value="category.id" v-model="categories" type="checkbox"
                                                    :id="category.id"> <label
                                                    :for="category.id">{{ category.title }}</label></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <!--                                        фильтр по цветам-->
                                        <h4>Выбор цвета</h4>
                                        <ul class="color-option">
                                            <li v-for="color in filterList.colors">
                                                <a @click.prevent="addColor(color.id)" class="color-option-single"
                                                   :style="`background: #${color.title}`">
                                                    <span>{{ color.title }}</span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <!--                                        Фильтр по цене-->
                                        <h4>Фильтровать по цене</h4>
                                        <div class="slider-box">
                                            <div id="price-range" class="slider"></div>
                                            <div class="output-price"><label for="priceRange">Цена:</label> <input
                                                type="text" id="priceRange" readonly></div>
                                            <!--                                            кнопка фильтровать-->
                                            <button @click.prevent="filterProducts" class="filterbtn"
                                                    type="submit"> Фильтровать
                                            </button>
                                        </div>
                                    </div>
                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                                        <!--                                        фильтр по тегам-->
                                        <h4>Теги </h4>
                                        <ul class="popular-tag">
                                            <li v-for="tag in filterList.tags">
                                                <a @click.prevent="addTag(tag.id)">{{ tag.title }}</a>
                                            </li>
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
                                        </div>
                                        <div
                                            class="right-box justify-content-md-between justify-content-center wow fadeInUp  animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="short-by">
                                                <div class="select-box">
                                                    <select class="wide" style="display: none;">
                                                        <option data-display="Сортировать по">Рекомендуемые</option>
                                                        <option value="1">Популярное</option>
                                                        <option value="3">По возростанию цены</option>
                                                        <option value="3">По убыванию цены</option>
                                                    </select>
                                                    <div class="nice-select wide" tabindex="0"><span class="current">Сортировать по</span>
                                                        <ul class="list">
                                                            <li data-value="Featured" data-display="Рекомендуемые"
                                                                class="option selected">Рекомендуемые
                                                            </li>
                                                            <li data-value="1" class="option">Популярное</li>
                                                            <li data-value="3" class="option">По возростанию цены</li>
                                                            <li data-value="3" class="option">По убыванию цены</li>
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
                                                        <div class="products-three-single-img">
                                                            <!--                                                            ссылка по фото-->
                                                            <router-link
                                                                :to="{name: 'products.show', params: {id: product.id}}"
                                                                class="d-block"><img
                                                                :src="product.image_url"
                                                                class="first-img" alt=""/> <img
                                                                :src="product.image_url" alt="" class="hover-img"/>

                                                            </router-link>
                                                            <div class="products-grid-one__badge-box"> <span
                                                                class="bg_base badge new ">New</span>
                                                                <span
                                                                    class="bg_base badge discount ">-20%</span>
                                                            </div>
                                                            <a @click.prevent="addToCart(product.id, true)" href="cart.html"
                                                               class="addcart btn--primary style2">
                                                                Добавить в корзину </a>
                                                            <div class="products-grid__usefull-links">
                                                                <ul>
                                                                    <li><a href="wishlist.html"> <i
                                                                        class="flaticon-heart">
                                                                    </i> <span>
                                                                            wishlist</span> </a></li>
                                                                    <li><a @click="getProduct(product.id)"
                                                                           :href="`#popup${product.id}`"
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
                                                                        <div class="quick-view__left-content"
                                                                             v-if="popupProduct.product_images.length > 2">
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
                                                                                    <div
                                                                                        v-for="productImage in popupProduct.product_images"
                                                                                        :id="`tabb${productImage.id}`"
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
                                                                            <p class="text"> {{
                                                                                    popupProduct.description
                                                                                }}
                                                                            </p>
                                                                            <div class="price">
                                                                                <h2> ₽{{ popupProduct.price }}
                                                                                    <del
                                                                                        v-if="popupProduct.old_price !== null">
                                                                                        {{
                                                                                            popupProduct.old_price
                                                                                        }}
                                                                                    </del>
                                                                                </h2>
                                                                                <h6> В наличии</h6>
                                                                            </div>
                                                                            <div class="color-varient">

                                                                                <template
                                                                                    v-for="groupProduct in popupProduct.group_products">
                                                                                    <a @click.prevent="getProduct(groupProduct.id)"
                                                                                       v-for="color in groupProduct.colors"
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
                                                                                    <button @click.prevent="addToCart(product.id)" class="btn--primary ">
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
                                                            <h5>
                                                                <router-link
                                                                    :to="{name: 'products.show', params: {id: product.id}}">
                                                                    {{ product.title }}
                                                                </router-link>
                                                            </h5>
                                                            <p>
                                                                <del v-if="product.old_price !== null">
                                                                    ₽{{ product.old_price }}
                                                                </del>
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
                                        <li v-if="pagination.current_page !== 1" class="next">
                                            <a @click.prevent="getProducts(pagination.current_page - 1)" href="#0">
                                                <i class="flaticon-back"
                                                   aria-hidden="true">
                                                </i>
                                            </a>
                                        </li>


                                        <li v-for="link in pagination.links">
                                            <template v-if="Number(link.label) &&
                                            (pagination.current_page - link.label < 2 &&
                                            pagination.current_page - link.label > -2) ||
                                            Number(link.label) === 1 || Number(link.label) === pagination.last_page">
                                                <a @click.prevent="getProducts(link.label)"
                                                   :class="link.active ? 'active' : ''" href="#0">{{ link.label }}</a>
                                            </template>
                                            <template v-if="
                                            Number(link.label) &&
                                            pagination.current_page !==3 &&
                                            (pagination.current_page - link.label === 2) ||

                                            Number(link.label) &&
                                            pagination.current_page !== pagination.last_page - 2 &&
                                            (pagination.current_page - link.label === -2)
">
                                                <a>...</a>
                                            </template>
                                        </li>


                                        <li v-if="pagination.current_page !== pagination.last_page" class="next">
                                            <a @click.prevent="getProducts(pagination.current_page + 1)" href="#0">
                                                <i class="flaticon-next"
                                                   aria-hidden="true">

                                                </i>
                                            </a>
                                        </li>
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
        this.getFilterList()
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

        addToCart(id, isSingle) {
            let qty = isSingle ? 1 : $('.qtyValue').val()
            let cart = localStorage.getItem('cart')
            $('.qtyValue').val(1)


            let newProduct = [{
                'id': id,
                'qty': qty
            }]
            if (!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct));
            }
            else {
                cart = JSON.parse((cart))

                cart.forEach(productInCart => {
                    if (productInCart.id === id) {
                        productInCart.qty = Number(productInCart.qty) + Number(qty)
                        newProduct = null
                    }

                })

                Array.prototype.push.apply(cart, newProduct)
                localStorage.setItem('cart', JSON.stringify(cart))

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
