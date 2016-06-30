$(document).ready(function() {
    // página cargada, inicializamos el calendario...
    $('#calendario').fullCalendar({
        height : 450,
        width  : 650,
        events : [
        {
            title  : 'event1',
            start  : '2010-01-01'
        },
        {
            title  : 'event2',
            start  : '2010-01-05',
            end    : '2010-01-07'
        },
        {
            title  : 'event3',
            start  : '2010-01-09 12:30:00',
            allDay : false // will make the time show
        }
    ]
    });
    //document.getElementById('rotar'),60);
});

/**/

function activos()
{
    document.getElementsByClassName("verde");
}