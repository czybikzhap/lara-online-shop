<div class="container content">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item">Футболки</a>
                <a href="#" class="list-group-item">Джинсы</a>
                <a href="#" class="list-group-item">Брюки</a>
                <a href="#" class="list-group-item">Кроссовки</a>
                <a href="#" class="list-group-item">Куртки</a>
            </div>
        </div>
        <div class="col-md-8">CONTENT</div>
    </div>
</div>

{{--<div class="col-md-8 products">--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-4">--}}
{{--            <div class="product">--}}
{{--                <div class="product-img">--}}
{{--                    <a href="#"><img src="img/goods1.jpg" alt=""></a>--}}
{{--                </div>--}}
{{--                <p class="product-title">--}}
{{--                    <a href="#">Cream jane jeans dress</a>--}}
{{--                </p>--}}
{{--                <p class="product-desc">Signature NYX cosmetics</p>--}}
{{--                <p class="product-price">Price: €10.00</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<style>

    body{
        background: #ececec;
    }
    img {
        height: auto;
        max-width: 100%;
    }
    .content{
        margin-top: 50px;
    }
    .product {
        background: #fff none repeat scroll 0 0;
        border: 1px solid #c0c0c0;
        height: 390px;
        overflow: hidden;
        padding: 25px 15px;
        position: relative;
        text-align: center;
        transition: all 0.5s ease 0s;
        margin-bottom: 20px;
    }
    .product:hover {
        box-shadow: 0 0 16px rgba(0, 0, 0, 0.5);
    }
    .product-img {
        height: 200px;
    }
    .product-title a {
        color: #001;
        font-weight: 500;
        text-transform: uppercase;
    }
    .product-desc {
        max-height: 60px;
        overflow: hidden;
    }
    .product-price {
        bottom: 15px;
        left: 0;
        position: absolute;
        width: 100%;
        color: #d51e08;
        font-size: 18px;
        font-weight: 500;
    }

</style>
