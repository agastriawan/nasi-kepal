{{-- <script src="https://kit.fontawesome.com/27a041baf1.js" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }} "></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }} "></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }} "></script>
<script src="{{ asset('assets/js/aos.js') }} "></script>
<script src="{{ asset('assets/js/custom.js') }} "></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const priceList = document.querySelectorAll('.price-list');
        const totalPriceElement = document.getElementById('total-price');
        const checkoutButton = document.getElementById('checkout');

        function updateTotalPrice() {
            let total = 0;
            priceList.forEach(item => {
                const qty = parseInt(item.querySelector('.product-qty').value) || 0;
                const price = parseInt(item.getAttribute('data-price')) || 0;
                total += qty * price;
            });
            totalPriceElement.textContent = `Rp. ${total.toLocaleString('id-ID')}`;
        }

        priceList.forEach(item => {
            const minusButton = item.querySelector('.qty-count--minus');
            const addButton = item.querySelector('.qty-count--add');
            const input = item.querySelector('.product-qty');

            // Listener for the "+" button
            addButton.addEventListener('click', function() {
                let currentQty = parseInt(input.value) || 0; // Ensure valid number
                input.value = currentQty + 1;
                updateTotalPrice();
            });

            // Listener for the "-" button
            minusButton.addEventListener('click', function() {
                let currentQty = parseInt(input.value) || 0; // Ensure valid number
                if (currentQty > 0) {
                    input.value = currentQty - 1;
                    updateTotalPrice();
                }
            });
        });

        // Event listener for checkout button
        checkoutButton.addEventListener('click', function() {
            let message = '';
            let total = 0;

            priceList.forEach(item => {
                const qty = parseInt(item.querySelector('.product-qty').value) || 0;
                const name = item.getAttribute('data-name');
                const price = parseInt(item.getAttribute('data-price')) || 0;
                if (qty > 0) {
                    message += `${name}: ${qty}\n`;
                    total += qty * price;
                }
            });

            message += `Total Pembayaran: Rp. ${total.toLocaleString('id-ID')}\n \n`;
            message += `Nama :\n`;
            message += `Alamat :`;
            message += ``;

            const whatsappUrl = `https://wa.me/6288295747113?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        });

        updateTotalPrice();
    });
</script>
