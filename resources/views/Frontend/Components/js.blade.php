<!-- Vendor JS Files -->
<script src="{{ asset('/Frontend') }}/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="{{ asset('/Frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/Frontend') }}/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{ asset('/Frontend') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{ asset('/Frontend') }}/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/Frontend') }}/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{ asset('/Frontend') }}/js/main.js"></script>
{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
{{-- Select2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
{{-- Sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stack('custom-js')
