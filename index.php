<?php
 /*------------------------------------------------------------------------
# admirorgallery - Admiror Gallery Plugin
# ------------------------------------------------------------------------
# author   Nils Schwabe
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://minils.de
# Misc: Fancybox3 Version 3.0.47

# Originanlly created by Nikola Vasiljevski and Admiror Gallery (http://www.admiror-design-studio.com/admiror-joomla-extensions/admiror-gallery)
# The plugin (https://github.com/vasiljevski/admirorgallery/tree/master/com_admirorgallery/admirorgallery/admirorgallery/popups/fancybox) was used as a template
-------------------------------------------------------------------------*/
// Joomla security code
defined('_JEXEC') or die('Restricted access');

// Load CSS from current popup folder
$this->loadCSS($this->currPopupRoot . 'css/jquery.fancybox.min.css');

// Load JavaScript files from current popup folder
$this->loadJS($this->currPopupRoot . 'js/jquery-3.2.1.min.js');
$this->loadJS($this->currPopupRoot . 'js/jquery.fancybox.min.js');

// Set REL attribute needed for Popup engine
$this->popupEngine->rel = 'fancybox[AdmirorGallery' . $this->getGalleryID() . ']';

$this->popupEngine->customAttr = 'data-fancybox="AdmirorGallery' . $this->getGalleryID() . '"';

// Insert JavaScript code needed to be loaded after gallery is formed
$this->popupEngine->endCode = '
<script type="text/javascript" charset="utf-8">
	jjj(\'[data-fancybox]\').fancybox({
		 \'lang\' : \'de\'
	});
</script>
';
?>
