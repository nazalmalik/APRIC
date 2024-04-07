<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: left;
        }
        h1{
            text-align: center;
        }

     h2 {
            color: #333;
            cursor: pointer;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            position: relative;
        }

        .toggle-sign {
            display: inline-block;
            cursor: pointer;
            user-select: none;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        section div {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            display: none;
            margin-top: 5px;
        }

        section.active div {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Help Center</h1>

        <!-- Policy Section -->
       <!-- Policy Section -->
<section id="policy">
    <h2>
        Policy
        <span class="toggle-sign" onclick="toggleDropdown('policy')">+</span>
    </h2>
    <div>
        <p>Welcome to APRIC, your go-to destination for premium clothing. Our policies are designed to provide you with a seamless and enjoyable shopping experience. Please take a moment to review our key policies:</p>

        <h3>1. Quality Assurance</h3>
        <p>At APRIC, we are committed to delivering high-quality clothing that meets and exceeds your expectations. Each piece is crafted with precision and attention to detail.</p>

        <h3>2. Easy Returns and Exchanges</h3>
        <p>We understand that sometimes items may not fit perfectly. That's why we offer a hassle-free return and exchange policy. If you're not satisfied, we're here to make it right.</p>

        <h3>3. Secure Payment</h3>
        <p>Your online transactions with us are secure. We use industry-standard encryption to protect your sensitive information, ensuring a safe and secure shopping environment.</p>

        <h3>4. Privacy Policy</h3>
        <p>Your privacy matters to us. Our privacy policy outlines how we collect, use, and protect your personal information. Rest assured, your data is in safe hands.</p>

        <h3>5. Shipping and Delivery</h3>
        <p>We strive to get your orders to you as quickly as possible. Explore our shipping and delivery options to choose the one that best suits your needs.</p>

        <h3>6. Customer Support</h3>
        <p>Have questions or concerns? Our dedicated customer support team is ready to assist you. Contact us for any assistance regarding your order or general inquiries.</p>

        <p>Thank you for choosing APRIC. We appreciate your trust in us and look forward to serving you with the finest clothing and exceptional service.</p>
    </div>
</section>


        <!-- Terms and Conditions Section -->
        <!-- Terms and Conditions Section -->
<section id="terms">
    <h2>
        Terms and Conditions
        <span class="toggle-sign" onclick="toggleDropdown('terms')">+</span>
    </h2>
    <div>
        <p>Welcome to Apric, your go-to destination for trendy and fashionable clothing. By accessing and using our website, you agree to comply with and be bound by the following terms and conditions:</p>

        <h3>1. Use of the Website</h3>
        <p>You are granted permission to access and use our website for personal, non-commercial purposes. We reserve the right to terminate or suspend your access to the site without prior notice if you violate these terms.</p>

        <h3>2. Product Information</h3>
        <p>While we strive to provide accurate product information, we do not guarantee the completeness or accuracy of the content on our website. Prices, product descriptions, and availability are subject to change without notice.</p>

        <h3>3. Ordering and Payments</h3>
        <p>When you place an order with Apric, you agree to provide accurate and complete information. Payments are processed securely, and we do not store your payment information. Orders are subject to acceptance and availability.</p>

        <h3>4. Shipping and Returns</h3>
        <p>Details about shipping and returns can be found in our dedicated shipping and returns policies. It is important to review and understand these policies before making a purchase.</p>

        <h3>5. User Accounts</h3>
        <p>If you create an account on our website, you are responsible for maintaining the confidentiality of your account and password. You agree to accept responsibility for all activities that occur under your account or password.</p>

        <p>By using our website, you agree to abide by these terms and conditions. If you do not agree with any part of these terms, please refrain from using our site. Apric reserves the right to update, change, or replace any part of these terms at its discretion.</p>
    </div>
</section>


        <!-- How to Place an Order Section -->
       <!-- How to Place an Order Section -->
<section id="place-order">
    <h2>
        How to Place an Order
        <span class="toggle-sign" onclick="toggleDropdown('place-order')">+</span>
    </h2>
    <div>
        <p>Placing an order with Apric is quick and easy. Follow these simple steps to get the latest fashion delivered to your doorstep:</p>

        <h3>1. Browse Our Collection</h3>
        <p>Explore our trendy collection of clothing and accessories. Click on the categories or use the search feature to find the items you love.</p>

        <h3>2. Select Your Items</h3>
        <p>Click on the product images to view details, choose your preferred size and color, and click the 'Add to Cart' button. Your selected items will be added to your shopping cart.</p>

        <h3>3. View Your Shopping Cart</h3>
        <p>When you're ready to place your order, navigate to your shopping cart. Review your selected items, make any necessary adjustments, and click 'Proceed to Checkout.'</p>

        <h3>4. Enter Your Details</h3>
        <p>Provide your shipping details, including your name, address, and contact information. Double-check that the information is accurate to ensure a smooth delivery process.</p>

        <h3>5. Choose Payment Method</h3>
        <p>Select your preferred payment method. We offer secure options for payment, including credit/debit cards and other available payment gateways.</p>

        <h3>6. Confirm Your Order</h3>
        <p>Review your order summary, including the items, quantities, and total amount. If everything looks good, click 'Place Order' to confirm your purchase.</p>

        <h3>7. Order Confirmation</h3>
        <p>Once your order is successfully placed, you'll receive an order confirmation email with details about your purchase and estimated delivery time.</p>

        <p>That's it! Sit back, relax, and await the arrival of your stylish new wardrobe additions. If you have any questions or need assistance, feel free to contact our customer support team.</p>
    </div>
</section>


        <!-- How to Track an Order Section -->
        <!-- How to Track Your Order Section -->
<section id="track-order">
    <h2>
        How to Track Your Order
        <span class="toggle-sign" onclick="toggleDropdown('track-order')">+</span>
    </h2>
    <div>
        <p>Tracking your order with Apric is hassle-free. Follow these steps to stay updated on the status of your purchase:</p>

        <h3>1. Order Confirmation Email</h3>
        <p>Once you've successfully placed your order, you'll receive an order confirmation email. This email contains essential information, including your order number and a summary of the items you've purchased.</p>

        <h3>2. Shipment Notification</h3>
        <p>Once your order is processed and ready for shipment, you'll receive a shipment notification email. This email will include a tracking number and a link to the courier's website or a third-party tracking service.</p>

        <h3>3. Click the Tracking Link</h3>
        <p>Click on the provided tracking link in the email. You'll be redirected to the courier's website, where you can enter your tracking number or follow the prompts to view the real-time status of your delivery.</p>

        <h3>4. Check Your Order Status</h3>
        <p>Once on the courier's website, you can check the current location and estimated delivery time of your order. The tracking information will be regularly updated as your package moves through the shipping process.</p>

        <h3>5. Email Updates</h3>
        <p>Expect regular email updates throughout the shipping journey. You'll receive notifications for key milestones, such as when your order is out for delivery or has been successfully delivered to your address.</p>

        <p>For any concerns or further assistance with tracking your order, feel free to contact our customer support team. We strive to keep you informed and make your shopping experience with Apric enjoyable and stress-free.</p>
    </div>
</section>

    </div>

    <script>
        function toggleDropdown(sectionId) {
            const section = document.getElementById(sectionId);
            section.classList.toggle('active');
        }
    </script>
</body>
</html>
