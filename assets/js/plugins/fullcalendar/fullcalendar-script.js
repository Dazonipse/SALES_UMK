
  $(document).ready(function() {
    

    /* initialize the external events
    -----------------------------------------------------------------*/
    $('#external-events .fc-event').each(function() {

      // store data so the calendar knows to render an event upon drop
      $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
        stick: true, // maintain when user navigates (see docs on the renderEvent method)
        color: '#00bcd4'
      });

      // make the event draggable using jQuery UI
      $(this).draggable({
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });

    });


    /* initialize the calendar
    -----------------------------------------------------------------*/
    $('#calendario').fullCalendar({

      header: {
        left: 'prev,next',
        center: 'title',
        right: ''
      },
      lang: 'es',   
      defaultView: 'basicWeek', 
      weekends: false,// no mostrar los fin de semana
      editable: false,// no mover elementos
      droppable: true, // this allows things to be dropped onto the calendar
      eventLimit: true, // allow "more" link when too many events
     events: [
        {
          title: 'All Day Event',
          start: '2016-06-27',
          color:'red'
        },
        {
          title: 'Long Event',
          start: '2016-06-27'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-27',
          color:'grey'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-29',
          color:'red'
        },
        {
          title: 'Meeting',
          start: '2016-06-28',
          color:'grey'
        },
        {
          title: 'Lunch',
          start: '2016-06-28',
          color:'blue'
        },
        {
          title: 'Birthday Party',
          start: '2016-06-13T07:00:00'
        },
        {
          title: 'Click for Google',
          start: '2016-06-28'
        },
        {
          title: 'Click for Google',
          start: '2016-06-28',
          color:'red'
        }
      ]
    });
    
  });
$('#calendar').fullCalendar({
    dayClick: function(date, jsEvent, view, resourceObj) {

        alert('Date: ' + date.format());
        alert('Resource ID: ' + resourceObj.id);

    }
});