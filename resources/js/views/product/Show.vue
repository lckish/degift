<template>
    <div>
        <main v-if="products">
            <!--Start Shop Details Breadcrumb-->
            <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="shop-details-inner">
                                <ul class="shop-details-menu">
                                    <li><router-link to="/">Главная</router-link></li>
                                    <li><router-link to="/products">Каталог</router-link></li>
                                    <li class="active">Подробнее</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Shop Details Breadcrumb-->
            <!--Start Shop Details Top-->
            <section class="shop-details-top two ">
                <div class="container">
                    <div class="row mt--30">
                        <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
                            <div class="single-product-box one">
                                <div  class="big-product single-product-one slider-for">
                                    <div v-for="productImage in products.product_images">
                                        <div  class="single-item"> <img :src="productImage.url" alt="">
                                            <div class="ptag">  <span v-if="products.old_price !== null" class="one">{{Math.round((products.price / products.old_price) * 100) - 100}}%</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navholder">
                                    <div  class="product-slicknav single-product-one-nav slider-nav">
                                        <div v-for="productImage in products.product_images"> <span class="single-item"> <img
                                            :src="productImage.url" alt=""> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
                            <div class="shop-details-top-right ">
                                <div class="shop-details-top-right-content-box">
                                    <div  class="shop-details-top-title">
                                        <h3>{{products.title}}</h3>
                                    </div>
                                    <div  class="shop-details-top-price-box">
                                        <h3>₽{{ products.price }} <del v-if="products.old_price !== null">₽{{products.old_price}}</del></h3>
                                    </div>
                                    <p class="shop-details-top-product-sale">Количество товара на складе: <span>{{products.count}}</span>
                                    </p>
                                    <div class="shop-details-top-color-sky-box">
                                        <h4>Другие цвета:</h4>
                                            <div class="color-varient">
                                                <template
                                                    v-for="groupProduct in products.group_products">
                                                    <a @click.prevent="getGroupProduct(groupProduct.id)"
                                                       v-for="color in groupProduct.colors"
                                                       href="#0"
                                                       :style="`background: #${color.title};`"
                                                       class="color-name">
                                                        <span>{{ color.title }}</span>
                                                    </a>
                                                </template>
                                            </div>
                                    </div>

                                    <div class="product-quantity">
                                        <h4>Количество</h4>
                                        <div class="product-quantity-box d-flex align-items-center flex-wrap">
                                            <div class="qty mr-2">
                                                <div class="qtySelector text-center"> <span class="decreaseQty"><i
                                                    class="flaticon-minus"></i> </span> <input type="number"
                                                                                               class="qtyValue" value="1" /> <span class="increaseQty"> <i
                                                    class="flaticon-plus"></i> </span> </div>
                                            </div>
                                            <div class="product-quantity-check"> <i class="flaticon-select"></i>
                                                <p>В наличии</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-details-top-order-now">
                                    </div>
                                    <div class="shop-details-top-cart-box-btn">
                                        <button  @click.prevent="addToCart(product)" class="btn--primary style2 "
                                                                                        type="submit">Добавить в корзину</button> </div>
                                    <div class="shop-details-top-order-now">
                                    </div>
                                    <ul class="shop-details-top-category-tags">
                                        <li>Категория: <span>{{products.category.title}}</span></li>
                                        <li>Теги: <span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Shop Details Top-->
            <!-- productdrescription-tabStart -->
            <section class="product pt-60 pb-60 wow fadeInUp overflow-hidden ">
                <div class="container">
                    <div class="row wow fadeInUp animated">
                        <div class="col-12">
                            <ul class="nav product-details-nav nav-one nav-pills justify-content-center" id="pills-tab-two"
                                role="tablist">
                                <li class="nav-item" role="presentation"> <button class="nav-link active"
                                                                                  id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description"
                                                                                  type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                                    Описание </button> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row wow fadeInUp animated">
                        <div class="tab-content" id="pills-tabContent-two">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                 aria-labelledby="pills-description-tab">
                                <div class="product-drescription">
                                    <h4> Описание товара:</h4>
                                    <p>{{products.content}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- productdrescription-tab End -->
        </main>
    </div>
</template>

<script>


export default {
    name: "Show",
    mounted() {
        $(document).trigger('initi')
        this.getProduct()
        this.getGroupProduct()
    },
    data() {
        return {
            products: null,
            groupProduct: null,
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
            }
            else {
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
            }
        },

        getProduct(id) {
            this.axios.get(`/api/products/${this.$route.params.id}`)
                .then(res => {
                    this.products = res.data.data
                    console.log(res);
                })
                .finally(v => {
                    $(document).trigger('initi')
                })
        },

        getGroupProduct(id) {
            this.axios.get(`/api/products/${id}`)
                .then(res => {
                    this.groupProduct = res.data.data
                    console.log(res);
                })
                .finally(v => {
                    $(document).trigger('initi')
                })
        },

    }
}
</script>

<style scoped>

</style>
