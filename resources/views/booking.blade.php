<x-app-layout>
    <script>
        document.addEventListener('DOMContentLoaded', async function() {

            const property = {{ $property }}
            console.log(property);
            const response = await axios.get(`/booking/show/${property}`)

            console.log(response);

            const events = response.data.events;
            console.log(events);
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    right: window.innerWidth < 768 ? 'timeGridDay' :
                        'dayGridMonth',
                    center: 'title',
                    left: window.innerWidth < 900 ? '' : 'listMonth, listWeek',
                },
                views: {
                    listDay: {
                        buttonText: 'Day Event',
                    },
                    listWeek: {
                        buttonText: 'Week Event',
                    },
                    listMonth: {
                        buttonText: 'Month Event',
                    },
                    timeGridDay: {
                        buttonText: 'Day',
                    },
                    timeGridWeek: {
                        buttonText: 'Week',
                    },
                    dayGridMonth: {
                        buttonText: 'Month',
                    },
                },


                initialView: "dayGridMonth",
                nowIndicator: true,
                selectable: true,
                selectMirror: true,
                selectOverlap: false,
                weekends: true,

                events: events,



                selectAllow: (info) => {
                    let instant = new Date()
                    return info.start >= instant
                },



                select: (info) => {
                    let start = info.start
                    let end = info.end

                    // formmatData(start)

                    document.getElementById('start_date').value = formmatData(start).day
                    document.getElementById("end_date").value = formmatData(end).day
                },
            });

            if (window.innerWidth < 768) {
                calendar.changeView("timeGridDay");
            } else {
                calendar.changeView("timeGridWeek");
            }
            calendar.render();

            function formmatData(date) {

                let year = String(date.getFullYear())
                let month = String(date.getMonth() + 1).padStart(2, 0)
                let day = String(date.getDate()).padStart(2, 0)

                let hour = String(date.getHours()).padStart(2, 0)
                let min = String(date.getMinutes()).padStart(2, 0)
                let sec = String(date.getSeconds()).padStart(2, 0)

                return {
                    day: `${year}-${month}-${day}`,
                    time: `${hour}:${min}:${sec}`
                }
            }

        });
    </script>
    <div class="flex flex-col lg:flex-row">
        <form method="POST" action="{{ route('bookings.store') }}" class="flex flex-col w-full lg:w-[40vw] items-center ">
            @csrf
            <input type="hidden" name="property_id" value="{{ $property }}">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            <label class="text-center">Start Date:</label>
            <input class="rounded-lg w-[70%] lg:w-[90%]" type="date" id="start_date" name="start_date" required>

            <label class="text-center">End Date:</label>
            <input class="rounded-lg w-[70%] lg:w-[90%]" type="date" id="end_date" name="end_date" required>

            <label class="text-center">Number of Guests:</label>
            <input class="rounded-lg w-[70%] lg:w-[90%]" type="number" name="guests" required>

            <label class="text-center">Total Price:</label>
            <input class="rounded-lg w-[70%] lg:w-[90%]" type="number" name="total_price" required>

            <button type="submit">Submit</button>
        </form>

        <div class="w-full flex justify-center lg:min-w-[80vw]">
            <div id="calendar" class="w-[90%]">
            </div>
        </div>
    </div>
</x-app-layout>
