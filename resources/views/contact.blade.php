@extends('layouts.main')

@section('content')
    <div class="container my-3">
    <div class="row g-5 my-4">
      <div class="col-md-5 col-lg-5">
        <form method="POST" action="{{route('contact.store')}}">
            @csrf
          <div class="row g-3">

            @if ($errors->any())
                <div class="alert alert-success" role="alert">
                    Message sent success!
                </div>
            @endif

            <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jhon Doe" required>
                <div class="invalid-feedback">
                    Please enter your name.
                </div>
            </div>

            <div class="col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
              <div class="invalid-feedback">
                Please enter a title.
              </div>
            </div>

            <div class="col-12">
              <label for="message" class="form-label">Message</label>
              <textarea type="text" name="message" class="form-control" id="message" required></textarea>
              <div class="invalid-feedback">
                Please enter a message.
              </div>
            </div>

          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Send</button>

        </form>
      </div>
      <div class="col-md-7 col-lg-7 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-dark">Contact</span>
            </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3606100215015!2d19.666349915606023!3d46.89562597914391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sJohn%20von%20Neumann%20University%20GAMF%20Faculty%20of%20Engineering%20and%20Computer%20Science!5e0!3m2!1sen!2shu!4v1650733377804!5m2!1sen!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>

@endsection