/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 *
 * @package Mathanasium
 */

( function () {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ('undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ('undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if (-1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function () {
		if (-1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus()
	{
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ('li' === self.tagName.toLowerCase() ) {
				if (-1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function ( container ) {
		var touchStartFn, i,
		parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ('ontouchstart' in window ) {
			touchStartFn = function ( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					var parentNode1 = menuItem.parentNode.children.length;
					for ( i = 0; i < parentNode1; ++i ) {
						if (menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};
			var parentcount = parentLink.length;
			for ( i = 0; i < parentcount; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if (isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener(
			'hashchange', function () {
				var id = location.hash.substring( 1 ),
				element;

				if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
					return;
				}

				element = document.getElementById( id );

				if (element ) {
					if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
						element.tabIndex = -1;
					}

					element.focus();
				}
			}, false
		);
	}
})();

/**
 * Smooth scroll to to ids.
 *
 * @param {[type]} document [description]
 *
 * @return {[type]}          [description]
 */
jQuery( document ).on(
	'click', 'a[href^="#"]', function (e) {
		// target element id.
		var id = jQuery( this ).attr( 'href' );

		// target element.
		var jQueryid = jQuery( id );
		if (jQueryid.size() === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE).
		e.preventDefault();

		// top position relative to the document.
		var pos = jQuery( id ).offset().top - 50;

		// animated top scrolling.
		jQuery( 'body, html' ).animate( {scrollTop: pos}, 500 );

		// jQuery( "#site-navigation li a" ).removeClass( "selected" );
        //
		// jQuery( this ).addClass( "selected" );

	}
);

/**
 * This is then function used to detect if the element is scrolled into view
 * @return {[type]} [description]
 */
jQuery(window).scroll(function(){

	function elementScrolled(elem)
	{
		var docViewTop = jQuery(window).scrollTop();
		var docViewBottom = docViewTop + jQuery(window).height();
		var elemTop = jQuery(elem).offset().top;
		return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
	}

	function elementTriggered( elem ) {
		var myString = elem;
		var getthisClass = myString.substr(1);
		var targetClass = '.' + getthisClass + ' a';

		console.log( targetClass );

		jQuery( "#site-navigation li a" ).removeClass( "selected" );

		jQuery( targetClass ).addClass( "selected" );
		// url hash has issues here
		// window.location.hash = elem;
	}

	var pageSections = [ "#aboutus", "#opportunity", "#nextsteps", "#testimonial", "#faq", "#awards" ];

	for ( i = 0; i < pageSections.length; i++) {

		if( elementScrolled( pageSections[i] ) ) {
			// alert( pageSections[i] );

			setTimeout(
				elementTriggered( pageSections[i] ),
				1000
			);
		}
	}
});

// # sourceMappingURL=themes.js.map
