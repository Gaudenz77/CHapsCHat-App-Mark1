@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')






@auth
<section class="codeSpaceChat">
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-sm-4 card1 circle mt-0 p-4 text-center">
        <div class="logiInfo mt-2 p-1">
          {{-- @if (Auth::check())
              <h3 class="p-3">Welcome, {{ Auth::user()->name }}! You are logged in.</h3>
          @else
              <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
          @endif --}}
          <div class="chatFormField mt-5 p-2">
            <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>
            <h5>Chats:</h5>
          </div>
        </div>
        <div class="scrollableChat">
          <chat-messages :messages="messages"></chat-messages>
        </div>
      </div>

      <div class="col-sm-4 card1 p-3" style="padding-left:0rem; padding-right:0rem;">
        <h2 class="editorTitle mx-2 my-2">Editor:</h2>
      <div id="editor"></div>
      </div>

      <div class="col-sm-4 card1 p-3">
        <h2 class="editorTitle mx-2 my-2">Preview:</h2>
        <iframe id="preview" style="width:100%"></iframe>
      </div>

     {{--  <div class="col-sm-3 card1">
        <div class="logiInfo mt-2 p-1">
          @if (Auth::check())
              <h3>Welcome, {{ Auth::user()->name }}! You are logged in.</h3>
          @else
              <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
          @endif
        </div> --}}
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-3 card1 circle mt-3 p-4">
       
        <div class="logiInfo mt-2 p-1">
          @if (Auth::check())
              <h3 class="text-center">Welcome, {{ Auth::user()->name }}!<br>You are logged in.</h3>
              <div class="text-center"><button id="showButton" class="btn btn-primary">Show Paint Sphere</button>
                <div class="col" id="paintsphere" style="position:relative; left:0;  margin-left:-150%; margin-right:100px;">
                  <div class="row d-flex align-items-start">
                    <a href="#" class="btn-close" aria-label="Close" id="hideButton"></a>
                  </div>
                  
                    <paint-app>
                  </div>
                </div>
              </div>
              

          {{-- @include('components.toggle') --}}
          @else
              <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
          @endif
        </div>
      </div>
      <div class="col-sm-12 card1 circle">

      <!-- Button to trigger the modal -->
      {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Open Modal
      </button> --}}


        
        
    </div>
  </div>
</section>
@endauth



 <script>
  // FUNCTIONAL HTMML ONLY START --------------------------------
  
// script Monaco in-site editor/preview --------------------------------
require.config({ paths: { 'vs': 'https://unpkg.com/monaco-editor@0.37.0/min/vs' }});
    require(['vs/editor/editor.main'], function() {
      monaco.editor.defineTheme('dark-theme', {
        base: 'vs-dark',
        inherit: true,

        rules: [
          { token: 'comment', foreground: '7f7f7f' },
          { token: 'delimiter', foreground: 'd4d4d4' },
          { token: 'string', foreground: 'ce9178' },
          { token: 'keyword', foreground: '569cd6' },
          { token: 'number', foreground: 'b5cea8' },
          { token: 'tag', foreground: '569cd6' },
          { token: 'attribute.name', foreground: '9cdcfe' },
          { token: 'attribute.value', foreground: 'ce9178' },
          { token: 'operator', foreground: 'd4d4d4' },
        ],
        colors: {
          'editor.background': '#1e1e1e',
          'editor.foreground': '#d4d4d4',
        }
        
      });
          
  
    // localstorage insite editor for keep code when reload page,  Monaco in-site editor/preview --------------------------------
          var editorValue = localStorage.getItem('editorValue');
          var editor = monaco.editor.create(document.getElementById('editor'), {
            value: editorValue || '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>My Test Page</title>\n<style>body{color:white;}</style>\n</head>\n<body> \n</body>\n</html>',
            language: 'html',
            theme: 'dark-theme',
            automaticLayout: true ,
            suggestOnTriggerCharacters: true, // enable auto-completion on trigger characters
            autoClosingBrackets: true, // enable auto-closing brackets
            autoClosingQuotes: true, // enable auto-closing quotes
            autoIndent: true, // enable auto-indent
            snippets: [{
              label: 'HTML5 Template', // HTML5 template snippet
              body: '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>${1:Document Title}</title>\n</head>\n<body>\n ${2}\n</body>\n</html>',
              description: 'HTML5 Template'
            }]
          });
    // script Monaco in-site function updatePreview --------------------------------
          function updatePreview() {
            var preview = document.getElementById('preview');
            var previewDoc = preview.contentDocument || preview.contentWindow.document;
            previewDoc.open();
            previewDoc.write(editor.getValue());
            previewDoc.close();
          }
  
    // script Monaco in-site preview keeping when type code in editor --------------------------------
          editor.onDidChangeModelContent(function(event) {
            var value = editor.getValue();
            localStorage.setItem('editorValue', value);
            updatePreview();
          });
  
          updatePreview();
        });
  // FUNCTIONAL HTMML ONLY END --------------------------------

  // MS PAINT START  --------------------------------

  document.addEventListener('DOMContentLoaded', () => {
  const showButton = document.getElementById('showButton');
  const hideButton = document.getElementById('hideButton');
  const paintsphereDiv = document.getElementById('paintsphere');

    showButton.addEventListener('click', () => {
      paintsphereDiv.style.display = 'inline-block';
    });

    hideButton.addEventListener('click', () => {
      paintsphereDiv.style.display = 'none';
    });

    // Optional: Hide the div by default
    paintsphereDiv.style.display = 'none';
  });

  
  </script>

@endsection

