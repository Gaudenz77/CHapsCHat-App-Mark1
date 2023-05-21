<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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