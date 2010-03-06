/**
 * @copyright  Andreas Schempp 2009
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

var SixImages = (function()
{
	var container, overlay, fxm, timer, thumbHeight, thumbWidth;
	
	window.addEvent('domready', function() {
		container = $('sixContainer').addEvent('mouseleave', close);
		overlay = $('sixOverlay').addEvent('mouseout', close);
		fxm = new Fx.Morph(overlay);
	});
	
	function close() {
		$clear(timer);
		
		fxm.cancel().chain( function() {
			overlay.setStyle('display', 'none');
		}).start({height: thumbHeight, width: thumbWidth});
	}
	
	return {
		zoom: function(el, image, width, height, xZoom, yZoom)
		{
			$clear(timer);
			
			timer = (function() { 
			
				new Asset.image(image, {
					onload: function() {
						var coords = $(el).getCoordinates(container);
						coords.bottom = (container.getSize().y - coords.bottom);
						coords.right = (container.getSize().x - coords.right);
						
						if (Browser.Engine.trident && Browser.Engine.version < 5) {
							coords.bottom = coords.bottom + 12;
						}
						
						thumbHeight = coords.height;
						thumbWidth = coords.width;
						
						overlay.set('src', image).setStyles({
							left: 'auto',
							right: 'auto',
							top: 'auto',
							bottom: 'auto',
							width: coords.width,
							height: coords.height,
							display: 'block'
						}).setStyle((xZoom == 'left' ? 'right' : 'left'), (xZoom == 'left' ? coords.right : coords.left)).setStyle(yZoom, (yZoom == 'bottom' ? coords.bottom : coords.top));
						
						fxm.cancel().start({height: height, width: width});
					}
				});
			}).delay(500);
		}
	};
	
})();