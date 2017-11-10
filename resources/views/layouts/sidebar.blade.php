@guest

@else
  <div class="col-sm-3 col-md-2 sidebar">
   
     <!--   <li class="active"><a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a></li>-->
        <ul class="nav nav-sidebar">
          <label class="nav-header"> TRANSACTION</label>
            <li><a href="{{ route('hei') }}">HEI Evaluation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <label class="nav-link"> MAINTENANCE</label>
            <li><a href="{{ route('school') }}">School</a></li>
            <li><a href="{{ route('user') }}">User</a></li>
            <li><a href="{{ route('usertype') }}">Usertype</a></li>
            <li><a href="{{ route('program') }}">Program</a></li>
            <li><a href="{{ route('tool') }}">Evaluation Tool</a></li>
          </ul>

  </div>
@endguest


