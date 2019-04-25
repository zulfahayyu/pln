"use strict";
var jktTime = new Date().toLocaleString("en-US", {
    timeZone: "Asia/Jakarta"
});
var eventList = null;
var testjson = null;
jktTime = new Date(jktTime);
$.ajax({
    url: 'proses/model_event.php?method=get_all_event',
    type: 'GET',
    success: function (result) {
        eventList = JSON.parse(result);
        $('#calendar').fullCalendar({

            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: jktTime,
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar
            drop: function () {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            eventLimit: true, // allow "more" link when too many events
            events: eventList
        });
    }
});