@extends('layouts.web_profile.app')
@section('content-register')
<section class="contact-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_09">
                    <div class="content-box">
                        <form method="post" id="contact-form"
                            class="default-form">
                            <div class="form-group">
                                <label><i class="far fa-user"></i>Your Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter name here" required="">
                            </div>
                            <div class="form-group">
                                <label><i class="far fa-envelope"></i>Email Address</label>
                                <input type="email" name="email" id="email" placeholder="Email Address" required="">
                            </div>
                            <div class="form-group">
                                <label><i class="far fa-user"></i>Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="Subject" required="">
                            </div>
                            <div class="form-group">
                                <label><i class="fas fa-text-height"></i>Message</label>
                                <textarea name="message" id="message" placeholder="Message goes here"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="theme-btn style-nine" type="button" id="btn-submit"
                                    name="submit-form">Send Your Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <figure class="image js-tilt"><img src="{{ asset('assets_web_profile/images/resource/illastration-6.png') }}"
                            alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn-submit').click(function(){
            // let url = "http://localhost:8000/web-profile";
            // ws dipush oo 
            //oke
            let url = "https://plugin-v2.herokuapp.com/web-profile"
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    subject: $('#subject').val(),
                    message: $('#message').val()
                },
                success: function(data){
                    swal({
                        title: "Berhasil",
                        text: "Pendafataran berhasil dilakukan",
                        icon: "success",
                    });
                    
                    $('#name').val(null)
                    $('#email').val(null)
                    $('#subject').val(null)
                    $('#message').val(null)
                },
                error: function(data){
                    console.log("Error "+ data);
                }
            })
        })
    })

</script>
@endsection
