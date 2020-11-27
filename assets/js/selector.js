console.log(first_array);
console.log(second_array);

// Need to have jQuery running
var $select1 = $( '[data-id="field_e5ztz2_51283"]' ),
    $select2 = $( '[data-id="field_u2lkmz_51283"]' ),
    $options = $select2.find( 'option' );

$.each(first_array, function (i, item) {
    $select1.append($('<option>', { 
        value: i.id,
        text : i.name 
    }));
});

$.each(second_array, function (i, item) {
    $select2.append($('<option>', { 
        value: i.id,
        text : i.name 
    }));
});

$select1.on( 'change', function() {
	$select2.html( $options.filter( '[id="' + this.value + '"]' ) );
} ).trigger( 'change' );