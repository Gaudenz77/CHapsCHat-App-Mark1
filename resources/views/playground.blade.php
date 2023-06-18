@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'playgroundMain')

@section('content')

@auth

<section class="">
  <div class="container-fluid">

    <div class="row">

      <div class="chatCol col-md-3 px-4 mt-2 pb-4">
        <div class="mt-2 p-1 pt-4">
          <h5>WELCOME to the MESSAGECORNER</h5>
          <div class="chatFormField mt-5 px-0">
            <chat-form :user="{{ Auth::user() }}"></chat-form>
          </div>
        </div>
          <div class="smooth-scroll scrollableChat">
              <chat-messages :auth-user-id="{{ Auth::id() }}"></chat-messages>
          </div>
       <p class="test text-center mb-0 m-2 pt-5">Messageservice brought to you by<a href="https://pusher.com/">Pusher&copy;</a></p>
      </div>

      <div class="editorCol col-md-5 px-4 mt-2 pb-4">
          <div class="mt-2 p-1 pt-4">
            <h5 class="mb-0 pb-0">ThiS iS Your EdiTor!</h5>
            <div class="row text-end">
              <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button  id="undoButton" type="button" class="btn btn-danger">Undo</button>
                  <button  id="redoButton" type="button" class="btn btn-success">Redo</button>
                </div>
              </div>

            </div>

            {{-- <div id="editor" style="height:75vh;"></div> --}}
            <div id="editor" style="height: 500px;"></div>
            
          </div>
      </div>

      <div class="previewCol col-md-4 px-4 mt-2 pb-4">
          <div class="mt-2 p-1 pt-4">

            <h5 class="mb-3 pb-3">YouR ouTpuT!</h5>
              <iframe id="preview" style="height:75vh;"></iframe>
          </div>
      </div>
    </div>

{{--     <div class="row justify-content-center mt-5">
      <div class="col-sm-3 card1 mt-3 p-4">
        <div class="logiInfo mt-2 p-1">
          @if (Auth::check())
              <h3 class="text-center">Welcome, {{ Auth::user()->name }}!<br>You are logged in.</h3>
              <div class="text-center">
                <button id="showButton" class="btn btn-primary">Show Paint Sphere</button>
                <div class="col" id="paintsphere" style="position:relative; left:0;  margin-left:-150%; margin-right:100px;">
                  <div class="row d-flex align-items-start">
                    <a href="#" class="btn-close" aria-label="Close" id="hideButton"></a>
                  </div>
                  <paint-app></paint-app>
                </div>
              </div>
          @else
              <p><a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.</p>
          @endif
        </div>
      </div>  
    </div> --}}

  </div>
</section>

@endauth

<script src="https://unpkg.com/monaco-editor@0.37.0/min/vs/loader.js"></script>
<script>
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
        { token: 'operator', foreground: 'd4d4d4' }
      ],
      colors: {
        'editor.background': '#1e1e1e',
        'editor.foreground': '#d4d4d4'
      }
    });

    // localstorage inside editor to keep code when reloading page
    var editorValue = localStorage.getItem('editorValue');
    var editor = monaco.editor.create(document.getElementById('editor'), {
      value: editorValue || '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>My Test Page</title>\n<style>body{color:white;}</style>\n</head>\n<body> \n</body>\n</html>',
      language: 'html',
      theme: 'dark-theme',
      automaticLayout: true,
      suggestOnTriggerCharacters: true, // enable auto-completion on trigger characters
      autoClosingBrackets: true, // enable auto-closing brackets
      autoClosingQuotes: true, // enable auto-closing quotes
      autoIndent: true, // enable auto-indent
      snippets: [
        {
          label: 'HTML5 Template', // HTML5 template snippet
          body: '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>${1:Document Title}</title>\n</head>\n<body>\n ${2}\n</body>\n</html>',
          description: 'HTML5 Template'
        }
      ]
    });

    // Update the styles for IntelliSense items
    const styles = document.createElement('style');
    styles.textContent = `
      .monaco-editor .suggest-widget .monaco-list .monaco-list-row .monaco-highlighted-label .monaco-icon-label-entry .monaco-icon-name-container .monaco-icon-label .monaco-icon-name {
        white-space: normal !important;
        line-height: normal !important;
      }
    `;
    document.head.appendChild(styles);

    // Update preview on editor change
    function updatePreview() {
      var preview = document.getElementById('preview');
      var previewDoc = preview.contentDocument || preview.contentWindow.document;
      previewDoc.open();
      previewDoc.write(editor.getValue());
      previewDoc.close();
    }

    // Save editor value to local storage and update preview
    function saveEditorValue() {
      var value = editor.getValue();
      localStorage.setItem('editorValue', value);
      updatePreview();
    }
    // Save editor value to local storage and update preview
    function saveEditorValue() {
      var value = editor.getValue();
      localStorage.setItem('editorValue', value);
      updatePreview();
    }

    // Event listener for editor content change
    editor.onDidChangeModelContent(function(event) {
      saveEditorValue();
    });

    // Undo the last change
    function undo() {
      editor.trigger('keyboard', 'undo', null);
    }

    // Redo the last undone change
    function redo() {
      editor.trigger('keyboard', 'redo', null);
    }

    // Attach undo and redo functions to buttons or events
    var undoButton = document.getElementById('undoButton');
    undoButton.addEventListener('click', undo);

    var redoButton = document.getElementById('redoButton');
    redoButton.addEventListener('click', redo);


    updatePreview();
  });

// FUNCTIONAL HTMML ONLY END --------------------------------

// MS PAINT START  --------------------------------

/*   document.addEventListener('DOMContentLoaded', () => {
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
}); */

</script>

@endsection

