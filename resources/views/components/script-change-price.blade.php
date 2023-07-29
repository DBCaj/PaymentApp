<div>
    <script>
        $(document).ready(function() {
            $('select[name="amount"]').change(function() {
                var selectedAmount = $(this).val();
                $('#product-price').text('$' + selectedAmount + '.00');
            });
        });
    </script>
</div>  