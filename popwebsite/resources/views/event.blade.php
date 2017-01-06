    @extend('layouts')
    @session('content')
    <div class="wrapper style-1">
        <div class="event-section" style="background-image: url(assets/img/torch.fw.png); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="overlay">
                <p class="text-left p-header">Event Names</p>
                <p class="text-justify p-normal">Event Name is an event that has not gotten a name but this is section where the event will get its name</p>
                <p class="text-justify p-normal">Invited Guest are <a href="">Mr Kennedy Rose</a>, <a href="">Mr President Obama</a></p>
                <p class="text-justify p-normal">Venue & Time: Odudua Cresceny by 2pm</p>
                <p class="text-justify p-normal">Regiter to Get Seat Number   121seats remianing, 2300seats taken</p>
                <p class="text-justify p-normal">Socials</p>
            </div>
        </div>
        <div class="space"></div>
        <div class="style-2 event-section">
            <p class="text-center p-header">THE SAVIOURS</p>
            <p class="text-center p-normal">Answer is</p> 
        </div>
    </div>
    @stop
    @section('footer')
 <script src="assets/scripts/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
    @stop