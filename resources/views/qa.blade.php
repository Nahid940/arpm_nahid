<ul style="list-style: none;display: flex;">
    <li style="margin-right: 15px;"><a href="{{route('orders')}}">Task 2</a></li>
    <li style="margin-right: 15px;"><a href="{{route('collection')}}">Task 4</a></li>
    <li style="margin-right: 15px;"><a href="{{route('q&a')}}">Task 5</a></li>
</ul>


Answer Qestion A <br>
====================================================================================<br>
-- This is a schedule run command where first instruction tells that 
overlaping on previous task will not be happened,  <br>

-- hourly() command tells that this schedule whould exceute per hourly <br>

-- onOneServer() - tells that it will run only one Server <br>

-- runBackground will exceute the schedule simultaneously without affetcing the time long tasks. <br>


====================================================================================<br>
Answer of B)  <br>
Context : Capture facade will allow a proxy of passing data throughout the system <br>
Cache : Cache facade will provide a proxy of caching service. <br>
====================================================================================<br>

====================================================================================<br>
Answer of C) <br>
-- $query->update() This will update only by the sql instruction given. <br>

-- $model->update() will update the whole model <br>

-- $model->updateQuietly() will update the model without dispatching any events. <br>

