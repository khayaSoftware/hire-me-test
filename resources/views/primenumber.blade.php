@include('includes.nav');

<section>
    <div class="container">
        <div class="row">
            <h3>Please enter the range below:</h3>
            <br />
        </div>
        <div class="row">
            <!-- Form for inputting range !-->

            <form id="primeNumberForm">
                <label for="beginning">Beginning:</label><br>
                <input required type="number" id="beginning" name="beginning"><br>
                <label for="end">End:</label><br>
                <input required type="number" id="end" name="end"><br><br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="Show prime numbers">
            </form>
        </div>
        <div class="row">
            <!-- Marked range will be displayed here from ajax result !-->

            <p id="primeNumbers" class="pt-3 pb-3"></p>
        </div>
    </div>
</section>

<script>
    // Override the form submit function to use ajax to return marked prime numbers
    $("#primeNumberForm").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var actionUrl = "primenumbersrange";

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data) {
                // This is where the magic happens, append the result to the above
                $('#primeNumbers').html(data);
            }
        });

    });
</script>

</body>

</html>