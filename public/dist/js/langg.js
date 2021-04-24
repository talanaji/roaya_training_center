function switchlang( x ) {
 			if ( x != '' ) {
				$.ajax({
					url: baseURL+'Defaults/swithlang',
					type: 'POST',
					data: {
						random: Math.random(),
						key_post: x
					},
					success: function ( data ) {
 						if ( data > 0 ){
							 window.location = baseURL;}
					}
				});
			}

		}