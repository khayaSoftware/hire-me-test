@include('includes.nav');

<section>
    <div class="container">
        <div class="row pt-5">
            <!-- Show random chars !-->

            <h3>Generated ASCII array:</h3>
            <p>
                @foreach($data['randomArray'] as $key => $row)
                {{$data['randomArray'][$loop->index]}}
                @endforeach
            </p>
        </div>
        <div class="row pt-5">
            <!-- Show random chars with missing char !-->

            <h3>Generated ASCII array with missing character:</h3>
            <p>
                @foreach($data['randomArrayMissingChar'] as $key_second => $row_second)
                {{$data['randomArrayMissingChar'][$key_second]}}
                @endforeach
            </p>
        </div>
        <div class="row pt-5">
            <!-- Show missing char !-->

            <h3>Missing character in second array: {{ $data['removedResult'] }}</h3>
        </div>
    </div>
</section>

</body>

</html>