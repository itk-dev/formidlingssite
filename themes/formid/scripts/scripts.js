(function ($) {

  function open_window(url,title,h,w,x,y) {
    var win = window.open(url,title,'scrollbars=1,resizable=yes,height=' + h + ',width=' + w +',left=' + x + ',top=' + y + '');
    if ( win ) win.focus();
    return win;
  }

  function show_data(keyno, listno){
     if ( listno == '64' ) {
       open_window('http://netpunkt.dk/pop_vis.php?database=Danbib&format=A&ignorebrowser=1&ccl=id%3D'+keyno, 'lektor',690,785,1,1);
     } else {
       open_window('http://netpunkt.dk/pop_vis.php?target=Lektor&format=pop_up&header=Lekt%F8rudtalelse&ccl=ld%3d('+keyno+')','lektor',690,585,1,1);
     }
  }

  /**
   * Run functions on document ready.
   */
  $(document).ready(function() {
     $('.netpunkt').click( function() {
        var vars=$(this).attr('rel').split('-')
        if ( vars ) {
          show_data(vars[0], vars[1]);
        }
        return false;
      }
    );
      
     
    $('.views-table').each( function(index){ 
	var prio = $('.priority-0', this).hide(); 
	$('tbody', this).append('<tr class="x"><td colspan="20">Vis/skjul (' + prio.length + ')</td></tr>') 
    });
    
    $('.x').click( function() { $('.priority-0', $(this).parent()).toggle(); });
    
    
  });

})(jQuery);

