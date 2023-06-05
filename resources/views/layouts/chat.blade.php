@extends('layouts.app')

@section('content')

<!-- editor/ preview part---------------------------------------------------------------->


<!-- chat card (tbc) ---------------------------------------------------------------->
{{-- <div class="container"> --}}
  <div class="row justify-content-center">
    <div class="col-md-6 card1">
      <div class="editorTitle">Chats</div>
      <div class="chatFormField">
        {{-- <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form> --}}
      </div>
      <div class="chatbody">
        {{-- <chat-messages :messages="messages"></chat-messages> --}}
      </div>
    </div>
  </div>
</div>

{{-- <script>
// FUNCTIONAL HTML ONLY START --------------------------------

  // script Monaco in-site editor/preview --------------------------------
      require.config({ paths: { 'vs': 'https://unpkg.com/monaco-editor@0.27.0/min/vs' }});
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

</script> --}}

@endsection