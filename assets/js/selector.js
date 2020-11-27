// Need to have jQuery running
var $select1 = $( '[data-id="field_e5ztz2_51283"]' ),
    $select2 = $( '[data-id="field_u2lkmz_51283"]' ),
    $options = $select2.find( 'option' );

first_array.forEach(element => {
    $select1.append($('<option>', { 
        value: element.id,
        text : element.name 
    }));
});

second_array.forEach(element => {
    $select2.append($('<option>', { 
        value: element.id,
        text : element.name 
    }));
});

$select1.on( 'change', function() {
	$select2.html( $options.filter( '[id="' + this.value + '"]' ) );
} ).trigger( 'change' );