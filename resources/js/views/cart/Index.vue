<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area"
                     style="background-image: url(public/assets/images/inner-pages/breadcum-bg.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content text-center wow fadeInUp animated">
                                <h2>Корзина</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="/"><i class="flaticon-home pe-2"></i>Главная</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Корзина</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->
            <!--Start cart area-->
            <section class="cart-area pt-120 pb-120">
                <div class="container">
                    <div class="row wow fadeInUp animated">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="cart-table-box">
                                <div class="table-outer">
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                        <tr>
                                            <th class="">Название</th>
                                            <th class="price">Цена</th>
                                            <th>Количество</th>
                                            <th>Итого</th>
                                            <th class="hide-me"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="product in products">
                                            <td>
                                                <div class="thumb-box">
                                                    <router-link
                                                        :to="{name: 'products.show', params: {id: product.id }}"
                                                        class="thumb">
                                                        <img :src="product.image_url" :alt="product.title">
                                                    </router-link>
                                                    <router-link
                                                        :to="{name: 'products.show', params: {id: product.id }}"
                                                        class="title">
                                                        <h5> {{ product.title }} </h5>
                                                    </router-link>
                                                </div>
                                            </td>
                                            <td>₽{{ product.price }}</td>
                                            <td class="qty">
                                                <div class="qtySelector text-center">
                                                    <span @click.prevent="minusQty(product)" class="decreaseQty">
                                                        <i class="flaticon-minus"></i>
                                                    </span>
                                                    <input type="number" class="qtyValue" :value="product.qty"/>
                                                    <span @click.prevent="plusQty(product)" class="increaseQty">
                                                        <i class="flaticon-plus"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="sub-total">₽{{ product.price * product.qty }}</td>
                                            <td>
                                                <div @click.prevent="removeProduct(product.id)" class="remove"><i
                                                    class="flaticon-cross"></i></div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cart-button-box">
                                <div class="apply-coupon wow fadeInUp animated">
                                    <div class="apply-coupon-input-box mt-30 "><input type="text" name="coupon-code"
                                                                                      value="" placeholder="Код купона">
                                    </div>
                                    <div class="apply-coupon-button mt-30">
                                        <button class="btn--primary style2"
                                                type="submit">Применить купон
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInUp animated">
                        <div class="cart-check-out mt-30">
                            <h3>Выбор упаковки</h3>
                            <div class="cart-total-box mt-30">
                            <table class="cart-table2">
                                <tbody>

                                <tr>
                                    <td class="shipping"> Упаковка</td>
                                    <td class="selact-box1">
                                        <ul class="shop-select-option-box-1">
                                            <li v-for="(pack, index) in packs" :key="index" >
                                                <input :value="pack" v-model="selectedItem"  type="radio" name="free_shipping" :id="pack.id">
                                                <label :for="pack.id"><span></span>{{ pack.name }}
                                                <p>Цена: {{ pack.price }}</p>
<!--                                                <img :src="pack.image" alt="Product Image" />-->
                                            </label></li>

                                        </ul>
                                    </td>
                                </tr>




                                <tr>
                                    <td>
                                        <h4 class="total">Итог</h4>
                                    </td>
                                    <td class="subtotal">₽500</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="cart-button-box-right wow fadeInUp animated">
                                <button class="btn--primary mt-30"
                                        type="submit">Выбрать упаковку
                                </button>
                            </div>
                        </div>
                    </div>
                    </div>





                    <div class="row pt-120">
                        <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                            <div class="cart-total-box">
                                <div class="inner-title">
                                    <h3>Итог</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                            <div class="cart-total-box mt-30">
                                <div class="table-outer">
                                    <table class="cart-table2">
                                        <thead class="cart-header clearfix">
                                        <tr>
                                            <th colspan="1" class="shipping-title">Доставка</th>
                                            <th class="price">₽500</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="shipping"> Доставка</td>
                                            <td class="selact-box1">
                                                <ul class="shop-select-option-box-1">
                                                    <li><input type="checkbox" name="free_shipping" id="option_1"
                                                               checked=""> <label for="option_1"><span></span>Бесплатная
                                                        доставка</label></li>
                                                    <li><input type="checkbox" name="flat_rate" id="option_2"> <label
                                                        for="option_2"><span></span>Платная доставка</label></li>
                                                    <li><input type="checkbox" name="local_pickup" id="option_3">
                                                        <label for="option_3"><span></span>Самовывоз</label></li>
                                                </ul>
                                                <div class="inner-text">
                                                    <p>Варианты доставки будут обновлены во время оформления заказа</p>
                                                </div>
                                                <h4>Расчитать стоимость доставки</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="total">Итог</h4>
                                            </td>
                                            <td class="subtotal">₽500</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                            <div class="cart-check-out mt-30">
                                <h3>Проверка</h3>
                                <ul class="cart-check-out-list">
                                    <li>
                                        <div class="left">
                                            <p>Доставка</p>
                                        </div>
                                        <div class="right">
                                            <p>₽500</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Стоимость товаров</p>
                                        </div>
                                        <div class="right">
                                            <p>₽{{ totalPrice }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left">
                                            <p>Итоговая цена:</p>
                                        </div>
                                        <div class="right">
                                            <p>₽{{ totalPrice }}</p>
                                        </div>
                                    </li>
                                </ul>






                            <div class="cart-check-out mt-30">
                                <h3>Контактные данные</h3>
                                <div class="col-xl-12">
                                    <div class="">
                                        <div class="apply-coupon wow fadeInUp animated">
                                            <div class="apply-coupon-input-box mt-30 border-info">
                                                <input type="text" v-model="name" placeholder="Имя">
                                            </div>

                                            <div class="apply-coupon-input-box mt-30 ">
                                                <input type="text" v-model="email" placeholder="Почта">
                                            </div>

                                            <div class="apply-coupon-input-box mt-30 ">
                                                <input type="text" v-model="address" placeholder="Адрес">
                                            </div>

                                            <div class="apply-coupon-button mt-30">
                                                <input @click.prevent="storeOrder" class="btn--primary style2 btn" value="Оформить" type="submit">
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
            <!--End cart area-->
        </main>
    </div>
</template>

<script>
export default {
    name: "Index",
    mounted() {
        $(document).trigger('initi')
        this.getCartProducts()
    },
    data() {
        return {
            products: [],
            name: '',
            email: '',
            address: '',
            selectedItem: null,
            packs: [
                {
                    id: '1',
                    name: 'Упаковочная бумага',
                    image: '/assets/images/menu/mega-menu.jpg',
                    price: 10
                },
                {
                    id: '2',
                    name: 'Подарочные пакеты',
                    image: 'public/assets/images/home-two/video-v1-img1.jpg',
                    price: 20
                },
                {
                    id: '3',
                    name: 'Крафт-бумага',
                    image: 'public/assets/images/inner-pages/breadcum-bg.png',
                    price: 20
                },
                {
                    id: '4',
                    name: 'Тканевая подарочная упаковка',
                    image: 'public/assets/images/inner-pages/breadcum-bg.png',
                    price: 20
                },
                {
                    id: '5',
                    name: 'Плетеная упаковка из натурального материала',
                    image: 'public/assets/images/inner-pages/breadcum-bg.png',
                    price: 20
                },
                {
                    id: '6',
                    name: 'Подарочная упаковка из дерева',
                    image: 'public/assets/images/inner-pages/breadcum-bg.png',
                    price: 30
                }
            ],

        }
    },
    methods: {
        storeOrder() {
            this.axios.post('/api/orders', {
                'products': this.products,
                'name': this.name,
                'email': this.email,
                'address': this.address,
                'total_price': this.totalPrice
            })
                .then(res => {
                    console.log(res);
                })
                .finally(v => {
                    $(document).trigger('initi')
                })
        },

        getCartProducts() {
            this.products = JSON.parse(localStorage.getItem('cart'))
        },
        minusQty(product) {
            if (product.qty === 0) return
            product.qty--
            this.updateCart()
        },
        plusQty(product) {
            product.qty++
            this.updateCart()
        },
        removeProduct(id) {
            this.products = this.products.filter(product => {
                return product.id !== id
            })
            this.updateCart()
        },

        updateCart() {
            localStorage.setItem('cart', JSON.stringify(this.products))
        }
    },

    computed: {
        totalPrice() {
            return this.products.reduce((total, product) => {
                return total + (product.qty * product.price);
            }, 0)
        }
    }
}
</script>

<style scoped>

</style>
