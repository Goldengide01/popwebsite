
    @extends('layout')
    @section('content')
    <div class="wrapper normal">
        <div class="divided-section-tall normal" style="background-color: #fff;">
            <p class="text-center p-header2">Contact Us</p>
            <form style="margin: 2%;" class="col-xs-12 col-sm-6 col-md-6" method="post" action = "{{url('/contact/add')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"  name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone"  name="phone" placeholder="Phone">
                </div>

                <div class="form-group">
                    <label for="comment">Comments Below</label>
                    <textarea class="form-control" rows="5" style="resize: none;" name="comment"></textarea>
                </div>
                
                <button type="submit" class="btn btn-default">Submit</button>
                @if (session('alert-success'))
                <p class="text-success">{{ session('alert-success')}}</p>
                @endif
                @if (session('alert-failure'))
                <p class="text-warning">{{ session('alert-failure')}}</p>
                @endif
            </form>
            <div class="divided-section normal left-border col-xs-12 col-sm-5 col-md-offset-1 col-md-4" style="background-color: #eee; padding: 3%; height: 10em;">
                <p class="text-center p-header">Contact Information</p>
                <dl class="text-left p-normal" >
                    <dt >Address: </dt>  <dd>{{$contact->address}}</dd>
                    <dt >Email: </dt> <dd>{{$contact->email}} </dd>
                    <dt >Call Us: </dt> <dd>{{$contact->phone}}</dd>
                </dl>
            </div>

        </div>
        <!-- <hr> -->

    </div>
    @stop
</div>
 <script src="assets/scripts/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>