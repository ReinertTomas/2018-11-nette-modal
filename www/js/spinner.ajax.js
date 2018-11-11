( function ( $, undefined )
{

    $.nette.ext( 'loader', {
	init: function ()
	{
	    this.spinner = $( '#loader' );
	},
	start: function ()
	{
	    this.counter++;
	    if ( this.counter === 1 )
	    {
		this.spinner.fadeIn( this.speed );
	    }
	},
	complete: function ()
	{
	    this.counter--;
	    if ( this.counter <= 0 )
	    {
		this.spinner.fadeOut( this.speed );
	    }
	}
    }, {
	spinner: null,
	speed: 200,
	counter: 0
    } );

} )( jQuery );
