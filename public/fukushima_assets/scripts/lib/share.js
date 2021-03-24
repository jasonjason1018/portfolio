"use strict";
	function share()
{
  FB.ui(
    {
      method: 'share',
      href: 'https://www.youtube.com/',
    },
    // callback
    function(response) {
      if (response && !response.error_message) {
        alert('分享成功後即可抽獎!');
      } else {
        // alert('Error while posting.');
      }
    }
  )
};