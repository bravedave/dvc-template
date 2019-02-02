<?php
/*
	David Bray
	BrayWorth Pty Ltd
	e. david@brayworth.com.au

	This work is licensed under a Creative Commons Attribution 4.0 International Public License.
		http://creativecommons.org/licenses/by/4.0/

	*/	?>
<style>
.pointer { cursor: pointer; }
.forbidden { cursor: not-allowed; }
</style>
<h1 class="d-none d-print-block">TIC TAC TOE</h1>

<div class="jumbotron" style="font-size: 3rem" id="tictactoe"></div>

<script>
(function( $) {
	let props = {
		move : 'X',
		winner : ''

	}

	let turn = function( e) {
		if ( props.winner == '') {
			if ( /(X|O)/.test( $( this).html())) return;

			$( this).html( props.move).removeClass('pointer').addClass('forbidden').trigger( 'change');
			props.move = props.move == 'X' ? 'O' : 'X';

		}

	}

	let board = ( host) => {
		let row = ( host) => {
			return $('<div class="row" />').appendTo( host);

		};

		let square = ( host) => {
			let el = $('<div class="col border text-center pointer">&nbsp;</div>')

			el
			.on( 'click', turn)
			.on( 'change', () => { host.trigger( 'winner')})
			.appendTo( host);

			return el;

		};

		let squares = [];

		host
		.on('render', function( e) {
			$(this).html('');

			(function( r) { squares.push( square( r), square( r), square( r))})(row( this));
			(function( r) { squares.push( square( r), square( r), square( r))})(row( this));
			(function( r) { squares.push( square( r), square( r), square( r))})(row( this));

		})
		.on('winner', function( e) {
			let win = [
				[1,2,3],
				[1,5,9],
				[1,4,7],
				[2,5,8],
				[3,5,7],
				[3,6,9],
				[4,5,6],
				[7,5,3],
				[7,8,9]

			];

			$.each( win, function( i, arr) {
				let a = squares[ arr[0]-1].html();
				let b = squares[ arr[1]-1].html();
				let c = squares[ arr[2]-1].html();

				if ( a == b && a == c && /(O|X)/.test( a)) {
					props.winner = a;
					return false;	// break

				}

			});

			if ( /(O|X)/.test( props.winner)) {
				$('<div class="col" />').html('Winner : ' + props.winner).appendTo( row( host));

			}

		})

		host.trigger( 'render');

	};

	board( $('#tictactoe'));

})( jQuery);
</script>