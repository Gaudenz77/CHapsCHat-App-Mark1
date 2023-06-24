<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumenttest</title>
</head>
<body>
    

                                    <!-- Loop through the blogs and display them -->
                               {{--  @foreach($blogs as $blog)
                                <div class="col-sm-3 bg-danger circleBlog mx-2">
                                        <h2>{{ $blog->title }}</h2>
                                        <p>Topic: {{ $blog->topic }}</p>
                                        <p>{{ $blog->content }}</p>
                                        <!-- Add any other fields you want to display -->
                        
                                        <!-- Add edit and delete buttons if necessary -->
                                        <a href="{{ route('blogosphere.edit', $blog->id) }}">Edit</a>
                                        <form action="{{ route('blogosphere.destroy', $blog->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                @endforeach --}}
</body>
</html>


<div class="input-group">
    <span class="input-group-text"><i class="fa-solid fa-file-signature" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your content"></i></span>
    <textarea class="form-control" placeholder="Content" name="content" id="content" v-model="form.content" required></textarea>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text login" for="email"><i class="fa-solid fa-file-signature" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your content">{{ __('Email') }}</i></span>
    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
    @error('email')
      <div class="text-danger mt-2">{{ $message }}</div>
    @enderror
  </div>


<!-- Icons Fontawesome -->

<i class="fa-solid fa-at"></i>
<i class="fa-solid fa-file-signature"></i>
<i class="fa-solid fa-key"></i>
<i class="fa-solid fa-signature"></i>
<i class="fa-solid fa-signature"></i>
<i class="fa-solid fa-circle-plus"></i>
<i class="fa-solid fa-paper-plane"></i>
<i class="fa-solid fa-book-bookmark"></i>
<i class="fa-regular fa-book-bookmark"></i>
<i class="fa-solid fa-socks"></i>


<span class="material-symbols-outlined">
undo
</span>

<span class="material-symbols-outlined">
redo
</span>

<span class="material-symbols-outlined">
save
</span>

welcome @php
    
    {{-- <div class="col-md-4 bg-red" style="background-image: url('../assets/img/square_red.svg'); background-size:cover; height: 400px;"></div>
                <div class="col-md-4 bg-yellow" style="background-image: url('../assets/img/circle_yellow.svg'); background-size: contain; height: 30%;"></div>
                <div class="col-md-4 bg-blue" style="background-image: url('../assets/img/triangle_blue.svg'); background-size: contain; height: 300px;"></div>
               
                <div class="col-md-3" style="background-image: url('../assets/img/square_red.svg'); width:400px;"></div>
                <div class="col-md-3" style="background-image: url('../assets/img/circle_yellow.svg');width:400px;"></div>
                <div class="col-md-3" style="background-image: url('../assets/img/triangle_blue.svg'); width:400px; display:flex; justify-content:center; margin-left:-100px; padding-right:20%;"></div> --}}
 
@endphp