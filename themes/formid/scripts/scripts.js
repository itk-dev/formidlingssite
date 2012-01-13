(function ($) {

  function OpenWinExe(url,title,variables) {
    popupWin = window.open(url,title,variables);
    if ( popupWin ) popupWin.focus();
    return popupWin;
  }

  function PopWinxy(url,title,h,w,x,y) {
    return OpenWinExe(url,title,'scrollbars=1,resizable=yes,height=' + h + ',width=' + w +',left=' + x + ',top=' + y + '');
  }

  function Show(keyno, listno){
     if ( listno == '64' ) {
       PopWinxy('http://netpunkt.dk/pop_vis.php?database=Danbib&format=A&ignorebrowser=1&ccl=id%3D'+keyno, 'lektor',690,785,1,1);
     } else {
       PopWinxy('http://netpunkt.dk/pop_vis.php?target=Lektor&format=pop_up&header=Lekt%F8rudtalelse&ccl=ld%3d('+keyno+')','lektor',690,585,1,1);
     }
  }

  /**
   * Run functions on document ready.
   */
  $(document).ready(function() {
     $('.netpunkt').click( function() {
        var vars=$(this).attr('rel').split('-')
        if ( vars ) {
          Show(vars[0], vars[1]);
        }
        return false;
      }
    )
  });

})(jQuery);


