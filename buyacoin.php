<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <link rel="stylesheet" href="styles.css">

<style>
    .buy-coin {
    position: absolute;
    top: 50%;
    left: 70%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: linear-gradient(#ffffff, #13b7e7 );
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
    border-radius: 10px;
}
input#pid {
    padding: 10px;
    width: 100%;
    margin-top: 10px;
}
input#btn {
    padding: 9px;
    width: 88px;
    border: none;
    background: #dfb32d;
    color: white;
}
input#name {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
}

 form {
     margin: auto;
     align-items: center;
     padding-top: 34px;
     /* background-color:rgba(0,0,0,0.75); */
     padding: 0px;
     /* display: flex; */
     align-items: center;
     justify-content: center;
     width: 100%;
     /* border-radius: px; */
     padding-bottom: 60px;
 } 
.bg img {
    background-position: 100% 100%;
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
}
</style>
<!-- <section class= "food-search"> -->
<div class="bg">
    <img src="images/buycoin.jpg">
   <div class="buy-coin">
    <h2>Purchase Coin</h2>
    <form action="">
   
      <div class="user-box">
        <label>Name</label> <br>
        <!-- <input type="text" name="name" id="name" placeholder="Enter your name" /> <br /><br /> -->
       <!-- <input type="text" name="pid" id="pid" placeholder="Enter product name" /><br /><br /> -->
        <input type="text" name="name" id="name"  placeholder="Enter your name" required><br><br>
      </div>
      <div class="user-box">
        <label>Product Name</label><br>
       <input type="text" name="pid" id="pid" placeholder="Enter product name" required/><br /><br />
      </div>
       <input type="hidden" name="product_id" id="productid" value="<?php echo $_GET['product_id'] ?>" />
      <!-- <a href="#"  class="box"> -->
        <input type="button" name="btn" id="btn" value="Buy Coin" onclick="pay_now()" /> </form>
      <!-- </a> -->
    </form>
  </div>
</div>
    <!-- <form action="">
    <input type="text" name="name" id="name" placeholder="Enter your name" /> <br /><br />
    <input type="text" name="pid" id="pid" placeholder="Enter product name" /><br /><br />
    <input type="hidden" name="product_id" id="productid" value="<?php //echo $_GET['product_id'] ?>" /> 
     <input type="text" name="amt" id="amt" placeholder="Enter amount" /><br /><br /> -->
    <!-- <input type="button" name="btn" id="btn" value="buy coin" onclick="pay_now()" /></form>
        -->
<script>

    function pay_now() {
        var name = jQuery('#name').val();
        // var amt = jQuery('#amt').val();
        var pid = jQuery('#pid').val();
        var productid = jQuery('#productid').val();

        var options = {
            "key": "rzp_test_9E2Cg52ykhP7a6", // Enter the Key ID generated from the Dashboard
            "amount": 10000, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Let's Bid", //your business name
            "description": "Test Transaction",
            "image": "./Logo.png",
            // "prefill": {
            //     "name": "Gaurav Kumar", //your customer's name
            //     "email": "gaurav.kumar@example.com",
            //     "contact": "9000090000"
            // },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            },
            "handler": function(response) {
                jQuery.ajax({
                    type: 'post',
                    url: 'payment_process.php',
                    data: "payment_id=" + response.razorpay_payment_id + "&name=" + name + "&pid=" + pid  + "&productid=" + productid,
                    success: function(result) {
                       
                        window.location.href = "bid.php?food_id="+result;
                     }
                });
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>
 