

<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
<script type="text/javascript">
	function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	                $('#preview')
	                    .attr('src', e.target.result)
	                    .width(180)
	                    .height(200);
	            };

	            reader.readAsDataURL(input.files[0]);
	        }
	    }
</script>
<footer class="footer">
	<p class="text-center"> This is a footer </p>
</footer>