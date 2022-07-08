<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row align-items-center vh-100">
            <div class="col-6 mx-auto">
                <div class="card shadow border">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-row mb-3">
                            <div class="p-2"><a href="#">Logout</a></div>
                            <div class="p-2">{{Carbon\Carbon::now()->format('j F, Y')}}</div>
                        </div>
                        <form action="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Publisher</label>
                                <input type="text" class="form-control" id="publisher" value="01" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">SL No.</label>
                                <input type="text" class="form-control" id="number" value="SGGS-000001" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">QR URL</label>
                                <input type="text" class="form-control" id="url" value="https://youtube.com/" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Number of Pages</label>
                                <input type="number" id="pages" value="5" min="1" max="50" class="form-control">
                            </div>
                            <button class="btn btn-success" id="submit">Submit</button>
                            <span id="dwn-pdf">
                            </span>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script>
        let apiURL = "{{env('API_URL')}}";
            let qr1 = '';
            let qr2 = '';
        $('#submit').on('click', function(e) {
            e.preventDefault();
            $('#dwn-pdf').html(`<p class="text-end">Processing</p>`);
            console.log('OK');
            generateQR()
        });

        function generateQR()
        {
            let formData = new FormData();
            formData.append('url', $('#url').val());
            // formData.append('pages', $('#pages').val());
            console.log(formData.getAll('url'));
            $.ajax({
                type: 'POST',
                url: apiURL + 'api/create-qr',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: async function(data) {
                    qr1 = data.qr1;
                    qr2 = data.qr2;
                    createPDF()
                },
                error: function(data) {
                    //showMessage(data);
                }
            });
        }

        function setQRCodes(qr1, qr2)
        {
            let formData = new FormData();
            formData.append('qr1', qr1);
            formData.append('qr2', qr2);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/set-qr-session',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: async function(data) {
                    console.log(data);
                    createPDF()
                },
                error: function(data) {
                    //showMessage(data);
                }
            });
        }

        function createPDF()
        {
            let nmbr = String($('#number').val());
            let formData = new FormData();
            formData.append('number', $('#number').val());
            formData.append('pages', $('#pages').val());
            $.ajax({
                type: 'POST',
                url: apiURL + 'api/create-pdf',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: async function(data) {
                    console.log(data)
                    // downloadPDF($('#number').val())
                    $('#dwn-pdf').html(`<a href="${apiURL+'files/'+nmbr+'.pdf'}" class="btn btn-info float-end" target="_blank" attributes-list download>Download PDF</a>`);
                },
                error: function(data) {
                    //showMessage(data);
                }
            });
        }

        function downloadPDF(number)
        {
            let formData = new FormData();
            formData.append('number', number);
            $.ajax({
                type: 'POST',
                url: apiURL + 'api/fetch-pdf',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: async function(data) {
                    console.log(data)
                },
                error: function(data) {
                    //showMessage(data);
                }
            });
        }
    </script>
    </body>
</html>
