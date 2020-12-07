<style>
    .fix-icon{
        position: fixed;
        right: 20px;
        bottom: 100px;
    }
    .cart-fix-icon{
        border-radius: 10px;
        background-color: #000000;
        color:#FFFFFF;
        width: 60px;
        height: 60px;
        text-align: center;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
        position: relative;
    }
    .fa-shopping-cart{
        color: #FFFFFF;
    }
    .badge{
        background-color: rgba(217, 0, 0, 0.8);
        position: absolute;
        width: 30px;
        height: 30px;
        line-height: 30px;
        left: -8px;
        top:-8px;
    }
    .top-fix-icon{
        border-radius: 10px;
        background-color: #000000;
        color:#FFFFFF;
        font-size: 30px;
        width: 60px;
        height: 60px;
        text-align: center;
        padding-top: 10px;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- 開始HTML -->
<div class="fix-icon">
    <!-- 購物車 -->
    <div class="cart-fix-icon"><span class="badge count-badge badge-pill badge-danger">0</span><i class="fas fa-shopping-cart"></i></div>
    <!-- 返回頂端 -->
    <div class="top-fix-icon mt-3"><i class="fas fa-arrow-up"></i></div>

</div>


<!-- 顯示購物車數量功能 -->
<script>
    const count_badge = $('.count-badge');

    function countCart(cart){
        let count = 0;
        for(let i in cart){
            count += cart[i].quantity * 1;
        }
        count_badge.html(count);
    }

    $.get('5_addToCart-API.php', function(data){
        console.log(data);
        countCart(data.cart);
    }, 'json');
</script>