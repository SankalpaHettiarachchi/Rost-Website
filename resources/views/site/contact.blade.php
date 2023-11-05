@extends('site.layout')

@section('content')

    <div class="page-title contact_img">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </div>
    <section class="contact-section">
        <div class="contact-map">
            <div class="container" id="res_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.4775670392123!2d80.50113777474395!3d8.354590699181472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc8b973a460e4b%3A0xa3534eae30ebcdbf!2sFaculty%20of%20Technology%20-%20Rajarata%20University%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1689349462960!5m2!1sen!2slk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6">
                    <div class="contact-form">
                        <h3>Contact Form</h3>
                        <h4>Send Message</h4>
                        <form  action="{{ route('messages.store') }}" method="POST" class="form contact-validation-active">
                            @csrf
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Full Name">
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div>
                                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="submit">
                                <button type="submit">Send</button>
                            </div>
                            <div class="error-handling-messages">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection