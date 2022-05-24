@include('includes.nav');

<section>
    <div class="container">
        <div class="row pt-5">
            <!-- table for tv shows and their listings !-->
            <table id="tv_listings">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Channel</th>
                        <th>Week Day</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tv_listings as $key => $row)
                    <tr>
                        <td>{{$row->title}}</td>
                        <td>{{$row->channel}}</td>
                        <td>{{$row->week_day}}</td>
                        <td>{{$row->show_time}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    //datatable for multiple listings
    $('#tv_listings').dataTable({});
</script>

</body>

</html>