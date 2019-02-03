<?php
/*
	David Bray
	BrayWorth Pty Ltd
	e. david@brayworth.com.au

	This work is licensed under a Creative Commons Attribution 4.0 International Public License.
		http://creativecommons.org/licenses/by/4.0/

	*/	?>
<br />
<br />
<br />
<ul class="list-unstyled mt-4">
	<li><h4>Index</h4></li>
	<li><a href="#" id="<?= $uid = strings::rand() ?>">Tic Tac Toe</a></li>

</ul>
<br />
<br />
<br />
<br />
<script>
(function($) {
	$(document).ready( function() {
		$('#<?= $uid ?>').on( 'click', function( e) {
			e.stopPropagation(); e.preventDefault();

			_brayworth_.loadModal( {
				url : _brayworth_.url( 'hello/tictactoe')

			});

		});

	});

})( jQuery);
</script>