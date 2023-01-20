@extends('layouts.frontend')

@section('content')

	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row text-center">
				<div class="text-center">

						<img src="{{ asset('public/frontend/image/logo-wide.png') }}" class="rounded mx-auto d-block" style="height: 100px" alt="HUMAUN KABIR" />

				</div>

				<div class="text-center">
					<h4><a href="{{ url('/') }}">BACK HOME</a></h4>
				</div>

                <div class="text-center">
                    <video width="25%" id="MyCameraOpen"></video>
                </div>

                <input type="text" id="text" />

                <script>
                // Step 01
                    //Start Camera
                    let video = document.getElementById("MyCameraOpen");
                    let text = document.getElementById("text");

                    let scanner = new Instascan.Scanner({
                        video : video
                    });
                    // For Camera Open
                    Instascan.Camera.getCameras()
                    .then(function(Our_Camera){
                        if(Our_Camera.length > 0){
                            scanner.start(Our_Camera[0]);
                        }
                        else
                        {
                            alert("camera field");
                        }
                    })
                    //Error Handel
                    .catch(function function_name(error) {
                        console.log("please try Again")
                    })


                    // Step 02
                    scanner.addListener('scan', function (input_value) {
                            text.value = input_value;
                        })

                </script>

			</div>
		</div>
	</div>
	<!-- End Content -->

@endsection


