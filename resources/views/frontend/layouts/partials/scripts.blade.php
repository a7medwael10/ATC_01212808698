<script src="{{asset('assets')}}/plugins/jquery/jquery.js"></script>
<!-- Popper js -->
<script src="{{asset('assets')}}/plugins/popper/popper.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Smooth Scroll -->
<script src="{{asset('assets')}}/plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- Isotope -->
<script src="{{asset('assets')}}/plugins/isotope/mixitup.min.js"></script>
<!-- Magnific Popup -->
<script src="{{asset('assets')}}/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Slick Carousel -->
<script src="{{asset('assets')}}/plugins/slick/slick.min.js"></script>
<!-- SyoTimer -->
<script src="{{asset('assets')}}/plugins/syotimer/jquery.syotimer.min.js"></script>
<!-- Custom Script -->
<script src="{{asset('assets')}}/js/custom.js"></script>

<script>
    document.querySelectorAll('.booking-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const button = form.querySelector('button');

            fetch(this.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'booked') {
                        // عرض مودال التهنئة
                        new bootstrap.Modal(document.getElementById('congratsModal')).show();

                        // تحديث الزر
                        button.textContent = 'Cancel';
                        button.classList.remove('btn-primary');
                        button.classList.add('btn-danger');
                    } else if (data.status === 'cancelled') {
                        // عرض مودال الإلغاء
                        new bootstrap.Modal(document.getElementById('cancelModal')).show();

                        // تحديث الزر
                        button.textContent = 'Book';
                        button.classList.remove('btn-danger');
                        button.classList.add('btn-primary');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>



</body>
