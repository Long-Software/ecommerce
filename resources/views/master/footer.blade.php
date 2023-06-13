<footer class="footer">
    <div class="footer-container text-center">
        <div class="footer-row">
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Store Location</h3>
                <a>500 Terry Francine Street</a>
                <a>San Francisco, CA 94158</a>
                <a>info@mysite.com</a>
                <a>123-456-7890</a>
                <div class="footer-social">
                    <a href="https://www.facebook.com"><img src="{{ asset('images/fb.png') }}" alt="Facebook"
                            style="max-width: 30px; max-height: 30px;"></a>
                    <a href="https://www.instagram.com"><img src="{{ asset('images/ig.png') }}" alt="Instagram"
                            style="max-width: 30px; max-height: 30px;"></a>
                    <a href="https://www.twitter.com"><img src="{{ asset('images/tw.png') }}" alt="Twitter"
                            style="max-width: 30px; max-height: 30px;"></a>
                    <a href="https://www.youtube.com"><img src="{{ asset('images/yt.png') }}" alt="YouTube"
                            style="max-width: 30px; max-height: 30px;"></a>
                </div>
            </div>
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Shop</h3>
                <a href="{{ route('shop-all') }}">Shop All</a><br>
                <a href="{{ route('computers') }}">Computers</a><br>
                <a href="{{ route('tablets') }}">Tablets</a><br>
                <a href="{{ route('drones-cameras') }}">Drones & Cameras</a><br>
                <a href="{{ route('audio') }}">Audio</a><br>
                <a href="{{ route('mobile') }}">Mobile</a><br>
                <a href="{{ route('tv-home-cinema') }}">T.V & Home Cinema</a><br>
                <a href="{{ route('wearable-tech') }}">Wearable Tech</a><br>
                <a href="{{ route('sale') }}">Sale</a>
            </div>
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Customer Support</h3>
                <a href="{{ route('contact-us') }}">Contact Us</a><br>
                <a href="{{ route('help-center') }}">Help Center</a><br>
                <a href="{{ route('about-us') }}">About Us</a><br>
                <a href="{{ route('careers') }}">Careers</a>
            </div>
            <div class="footer-section col-md-3 col-sm-6">
                <h3 class="footer-heading mb-4">Policy</h3>
                <a href="{{ route('shipping-returns') }}">Shipping & Returns</a><br>
                <a href="{{ route('terms-conditions') }}">Terms & Conditions</a><br>
                <a href="{{ route('payment-methods') }}">Payment Methods</a><br>
                <a href="{{ route('faq') }}">FAQ</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <div class="col-md-4 col-sm-12">
                    <p class="footer-end mb-4" style="text-align: center;">We accept the following payment methods</p>
                    <br>
                    <div class="footer-payment">
                        <a href="https://www.visa.com"><img src="{{ asset('images/visa.png') }}" alt="Instagram"
                                style="max-width: 45px; max-height: 45px;"></a>
                        <a href="https://www.mastercard.com"><img src="{{ asset('images/mastercard.png') }}"
                                alt="Twitter" style="max-width: 45px; max-height: 45px;"></a>
                        <a href="https://www.paypal.com"><img src="{{ asset('images/paypal.png') }}" alt="YouTube"
                                style="max-width: 45px; max-height: 45px;"></a>
                        <a href="https://www.unionpay.com"><img src="{{ asset('images/unionpay.png') }}" alt="YouTube"
                                style="max-width: 45px; max-height: 45px;"></a>
                        <a href="https://www.jcb.com"><img src="{{ asset('images/jcb.png') }}" alt="YouTube"
                                style="max-width: 45px; max-height: 45px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="back-to-top" id="backToTopButton" title="Back to Top">&uarr;</a>
</footer>

<link href="{{ asset('css/footer.css') }}" rel="stylesheet" />
<script>
// Back-to-top button functionality
var backToTopButton = document.getElementById("backToTopButton");
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 100) {
        backToTopButton.classList.add("show");
    } else {
        backToTopButton.classList.remove("show");
    }
});

backToTopButton.addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>