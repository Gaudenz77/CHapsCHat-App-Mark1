<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'playgroundMain')

@section('content')

    @auth
    <section class="">
        <div class="container-fluid" style="display:inline-block;">
            <div class="row">
                <div class="chatCol col-md-3 px-3 py-0 pb-md-5">
                    <div class="mt-1 p-2 pt-3">
                        <h5 class="mb-0">WELCOME to the MESSAGECORNER Test
                            <a tabindex="0" 
                            data-bs-toggle="popover" 
                            data-bs-custom-class="popoverInfoOne"
                            data-bs-trigger="focus" 
                            data-bs-placement="right" 
                            data-bs-html="true"
                            data-bs-title="
                        <div class='lead animate__animated animate__zoomInUp'><b>How To Message</b></div>"
                            data-bs-content='
                        <div class="animate__animated animate__zoomInUp animate__delay-1s">
                            <ol>
                                <li>Write your message below in the form-field.</li>
                                <li>Press the paperplane-icon to send your message.</li>
                                <li>Your message and all incoming messages appear below, and your own messages can be deleted.</li>
                            </ol>
                        </div>'><i
                                    class="fa-solid fa-circle-info">
                                </i></a>
                        </h5>

                        <h1 class="mt-3 my-0 playgLandsTitle animate__animated animate__rubberBand">
                            <strong class="text-warning">{{ Auth::user()->name }}'s </strong><small>Chatspace</small>
                        </h1>

                        <div class="chatFormField my-4 px-0">
                            <chat-form :user="{{ Auth::user() }}"></chat-form>
                        </div>
                    </div>
                    <div class="smooth-scroll scrollableChat chatBody rounded">
                        <chat-messages :auth-user-id="{{ Auth::id() }}"></chat-messages>
                    </div>
                    <p class="text-end m-2 mb-0 mb-md-5 pt-2 pb-0 pb-md-3"><small>Messageservice brought <br>to you by </small><a
                            href="https://pusher.com/">Pusher&copy;</a>
                    </p>

                    <div class="d-sm-block d-md-none text-center p-3 pt-0 pb-3">
                        <div class="row justify-content-center">
                            <a tabindex="0" 
                            data-bs-toggle="popover" 
                            data-bs-custom-class="popoverInfoOne"
                            data-bs-trigger="focus" 
                            data-bs-placement="right" 
                            data-bs-html="true"
                            data-bs-title="
                                <div class=''><b>Quick-Access Editor/Preview</b></div>"
                            data-bs-content='
                                <div class="">
                                    <p class="">Toggle to quickly change between editor and preview.
                                </div>'><i class="fa-solid fa-circle-info"></i></a>
                        </div>

                        <div class="btn-group mobileGoner" role="group" aria-label="Basic example">
                            <button class="btn btn-sm btn-warning"  type="button" onclick="toggleEditorMain()"><i
                                    class="fa-solid fa-power-off"></i> Editor</button>
                            <button class="btn btn-sm  btn-dark" type="button" onclick="togglePreviewMain()"><i
                                    class="fa-solid fa-power-off"></i> Preview</button>
                        </div>
                    </div>

                </div>

                <div class="editorCol col-md-5 px-3 px-md-3 py-0 pb-3 pb-md-5" id="editorColumn" style="background-image: url('./assets/img/test_toolbox.jpeg');background-size: inherit;z-index:2;">
                    <div class="mt-2 p-2 pt-2 pb-md-3 d-flex align-items-center justify-content-between">
                        <img src="./assets/img/tool_plaque_yellow_bg_black.png" alt="Info" class="img-fluid toolPlaque pt-2" alt="tool_plaque">
                        <h5 class="text-center text-md-start bg-danger mb-0 pb-2 ms-0 py-2 py-md-2  px-2 ps-md-2 px-md-1 mx-1 me-md-3">ThiS iS Your EdiTor!
                            <a tabindex="0" 
                                data-bs-toggle="popover" 
                                data-bs-custom-class="popoverInfoOne"
                                data-bs-trigger="focus" 
                                data-bs-placement="right" 
                                data-bs-html="true"
                                data-bs-title="
                            <div class='lead animate__animated animate__zoomInUp'>
                            <strong>Code-Space:<br>Here you can code to yours delight!</strong>
                        </div>"
                                data-bs-content='
                        <div class="animate__animated animate__zoomInUp animate__delay-1s">
                            
                            <ol>
                                <li>Copy/Paste codes from messenger into editor:<br> Instant testing</li>
                                <li>Inline CSS for styling<br> (Seperate files tbc)</li>
                                <li>In-Code Javascript for<br> function/coding (Seperate files tbc)</li>
                                <li>Important: The code is stored in the local storage. If you like to keep it beyond session time, store it in your personal <a href="{{ url('/knowledgeSphere') }}">library</a></li>
                            </ol>
                        </div>'>
                                <i class="fa-solid fa-circle-info pe-2"></i></a>
                                
                        </h5>
                    </div>

                    <div class="container px-0">
                        <div class="row justify-content-between">
                            <div class="col-4 px-3 d-flex align-items-end">
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input fontColrSwitchCl" type="checkbox" role="switch"
                                        id="fontColorSwitch">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                    <a tabindex="0" 
                                        data-bs-toggle="popover" 
                                        data-bs-custom-class="popoverInfoOne"
                                        data-bs-trigger="focus" 
                                        data-bs-placement="right" 
                                        data-bs-html="true"
                                        data-bs-title="
                                        <div class=''>Output-Visibility</div>"
                                        data-bs-content="
                                        <div class=''>If not seeing code rendered in preview column (output), switch once to adjust to pages dark.bright-mode.</div>"
                                        style="font-size:1rem;">
                                        <i class="fa-solid fa-circle-info infoToggle mt-1 mb-2"></i></a>
                                </div>
                            </div>

                            <div class="col-4 d-flex justify-content-center">
                                <div class="mt-3 pt-md-1 pb-2">
                                    <button class="btn btn-sm btn-info p-1 mb-1 mb-md-0 pb-1" id="formatButton"><i class="fa-solid fa-code"></i> Prettify!</button>
                                </div>
                            </div>

                            <div class="col-4 d-flex mt-3 mt-md-0 pe-3 justify-content-end">
                                <div class="btn-group undoRedoGroup mb-2 pt-1" role="group" aria-label="Basic example">
                                    <button id="undoButton" type="button" class="btn btn-undo">
                                        <i class="fa-solid fa-arrow-rotate-left fa-2x"></i>
                                    </button>
                                    <button id="redoButton" type="button" class="btn btn-redo">
                                        <i class="fa-solid fa-arrow-rotate-right fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="editor" class="editor-container" style="height: 62vh;"></div>
                        <div id="cssEditor" class="editor-container" style="height: 62vh; display: none;"></div>
                        <div id="jsEditor" class="editor-container" style="height: 62vh; display: none;"></div>

                        <div class="row">
                            <div class="col text-end">
                                <div class="btn-group mt-2">
                                    <button class="btn btn-danger btn-circlesmallEditor ps-2 pt-1 pe-0" onclick="toggleEditor('editor')"><i class="fa-brands fa-html5 fa-2x"></i><p class="editorBtnFonthtml">html</p></button>
                                    <button class="btn btn-info btn-circlesmallEditor pt-1" onclick="toggleEditor('cssEditor')"><i class="fa-brands fa-css3-alt fa-2x"></i><p class="editorBtnFonthtml">css</p></button>
                                    <button class="btn btn-success btn-circlesmallEditor pt-1 ps-0" onclick="toggleEditor('jsEditor')"><i class="fa-brands fa-square-js fa-2x"></i><p class="editorBtnFonthtml">jscript</p></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="previewCol col-md-4 px-2 px-md-3 py-0 pb-5" id="previewColumn">
                    <div class="mt-3 p-2 pt-2 pb-md-2">
                        <h5 class="mt-2 mb-0 mb-md-5 py-md-2">YouR ouTpuT!</h5>
                        <div class="col">
                            <button class="btn btn-sm btn-success mx-1" id="runJavaScriptButton" style="display:none;">
                                <i class="fa-brands fa-square-js fa-xl"></i> Run JavaScript</button>
                        </div>
                        <iframe class="mt-0 mt-md-3 px-0 pt-0 mb-2 mb-md-0 pt-md-2 pb-4 pb-md-0 rounded" id="preview" style="height:68vh;"></iframe>
                    </div>

                    <div class="mt-0 px-1 pt-2 pt-md-0">
                        <div class="bg-secondary p-3" id="consoleOutput"
                            style="height: 62vh; overflow-y: scroll;display:none;"></div>

                        
                    </div>
                </div>
            </div>
    </section>
    @endauth

    <script>
        require.config({
            paths: {
                'vs': 'https://unpkg.com/monaco-editor@0.45.0/min/vs'
            }
        });
        require(['vs/editor/editor.main'], function() {
            monaco.editor.defineTheme('dark-theme', {
                base: 'vs-dark',
                inherit: true,
                rules: [{
                        token: 'comment',
                        foreground: '7f7f7f'
                    },
                    {
                        token: 'delimiter',
                        foreground: 'd4d4d4'
                    },
                    {
                        token: 'string',
                        foreground: 'ce9178'
                    },
                    {
                        token: 'keyword',
                        foreground: '569cd6'
                    },
                    {
                        token: 'number',
                        foreground: 'b5cea8'
                    },
                    {
                        token: 'tag',
                        foreground: '569cd6'
                    },
                    {
                        token: 'attribute.name',
                        foreground: '9cdcfe'
                    },
                    {
                        token: 'attribute.value',
                        foreground: 'ce9178'
                    },
                    {
                        token: 'operator',
                        foreground: 'd4d4d4'
                    }
                ],
                colors: {
                    'editor.background': '#1e1e1e',
                    'editor.foreground': '#d4d4d4'
                }
            });

            var editorValue = localStorage.getItem('editorValue');
            var editor = monaco.editor.create(document.getElementById('editor'), {
                value: editorValue ||
                    '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>My Test Page</title>\n<style></style>\n</head>\n<body> \n</body>\n</html>',
                /* '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>My Test Page</title>\n<style>body{background-color:black;\ncolor:white;}</style>\n</head>\n<body> \n</body>\n</html>', */
                language: 'html',
                theme: 'dark-theme',
                automaticLayout: true,
                suggestOnTriggerCharacters: true,
                autoClosingBrackets: true,
                autoClosingQuotes: true,
                autoIndent: true,
                snippets: [{
                    label: 'HTML5 Template',
                    body: '<!DOCTYPE html>\n<html>\n<head>\n  <meta charset="UTF-8">\n  <title>${1:Document Title}</title>\n</head>\n<body>\n ${2}\n</body>\n</html>',
                    description: 'HTML5 Template'
                }]
            });

            // CSS Editor
            var cssEditorValue = localStorage.getItem('cssEditorValue');
            var cssEditor = monaco.editor.create(document.getElementById('cssEditor'), {
                value: cssEditorValue || 'body {\n  color: white;\n}',
                language: 'css',
                theme: 'dark-theme',
                automaticLayout: true,
                suggestOnTriggerCharacters: true,
                autoClosingBrackets: true,
                autoClosingQuotes: true,
                autoIndent: true
            });

            var jsEditorValue = localStorage.getItem('jsEditorValue');
            var jsEditor = monaco.editor.create(document.getElementById('jsEditor'), {
                value: jsEditorValue || 'console.log("Hello, world!");',
                language: 'javascript',
                theme: 'dark-theme',
                automaticLayout: true,
                suggestOnTriggerCharacters: true,
                autoClosingBrackets: true,
                autoClosingQuotes: true,
                autoIndent: true
            });

            function runJavaScript() {
  var code = jsEditor.getValue(); // Get the JavaScript code from the JavaScript Editor

  var consoleOutput = document.getElementById('consoleOutput');
  consoleOutput.innerHTML = '';

  try {
    // Capture console.log output
    var logs = [];
    var originalConsoleLog = console.log;
    console.log = function(message) {
      logs.push(message);
    };

    // Evaluate the JavaScript code
    eval(code);

    // Restore console.log
    console.log = originalConsoleLog;

    // Display console.log output in the console output area
    if (logs.length > 0) {
      var output = document.createElement('pre');
      output.textContent = logs.join('\n');
      consoleOutput.appendChild(output);
    }
  } catch (error) {
    // Display the error in the console output area
    var errorOutput = document.createElement('pre');
    errorOutput.style.color = 'red';
    errorOutput.textContent = error;
    consoleOutput.appendChild(errorOutput);
  }
}

function saveJsEditorValue() {
  var value = jsEditor.getValue();
  localStorage.setItem('jsEditorValue', value);
}

// Add event listener to the JavaScript editor content change
jsEditor.onDidChangeModelContent(function(event) {
  saveJsEditorValue();
});

// Run the JavaScript code on button click
var runJavaScriptButton = document.getElementById('runJavaScriptButton');
runJavaScriptButton.addEventListener('click', runJavaScript);


            function formatCode() {
                var value = editor.getValue();
                var formattedCode = prettier.format(value, {
                    parser: 'html',
                    plugins: prettierPlugins
                });
                editor.setValue(formattedCode);
            }

            var formatButton = document.getElementById('formatButton');
            formatButton.addEventListener('click', formatCode);

            var prettierPlugins = [window.prettierPlugins.html];

            function updateFontColor() {
                var fontColorSwitch = document.getElementById('fontColorSwitch');
                var newValue = fontColorSwitch.checked ? 'white' : 'black';
                var currentValue = editor.getValue();
                var updatedValue = currentValue.replace(/<style>body{color:(.*?);}<\/style>/, '');

                if (fontColorSwitch.checked) {
                    // Add the body style tag if it doesn't exist
                    if (!currentValue.includes('<style>body{')) {
                        updatedValue = currentValue.replace(
                            /<\/head>/,
                            '<style>body{color:' + newValue + ';}</style></head>'
                        );
                    } else {
                        // Update the body style tag if it already exists
                        updatedValue = currentValue.replace(
                            /<style>body{color:(.*?);}<\/style>/,
                            '<style>body{color:' + newValue + ';}</style>\n'
                        );
                    }
                } else {
                    // Remove the body style tag
                    updatedValue = currentValue.replace(/<style>body{color:(.*?);}<\/style>/, '');
                }

                editor.setValue(updatedValue);
                saveEditorValue();
            }

            var fontColorSwitch = document.getElementById('fontColorSwitch');
            fontColorSwitch.addEventListener('change', updateFontColor);

            // Update the styles for IntelliSense items
            const styles = document.createElement('style');
            styles.textContent = `
            .monaco-editor 
            .suggest-widget 
            .monaco-list 
            .monaco-list-row 
            .monaco-highlighted-label 
            .monaco-icon-label-entry 
            .monaco-icon-name-container 
            .monaco-icon-label 
            .monaco-icon-name {  white-space: normal !important; line-height: normal !important; } `;
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

        function toggleEditorMain() {
            var column = document.getElementById('editorColumn');
            if (column.style.display === 'none') {
                column.style.display = 'block';
            } else {
                column.style.display = 'none';
            }
        }

        function togglePreviewMain() {
            var column = document.getElementById('previewColumn');
            if (column.style.display === 'none') {
                column.style.display = 'block';
            } else {
                column.style.display = 'none';
            }
        }

        function toggleEditor(editorId) {
            const editorContainer = document.getElementById(editorId);
            const currentEditorContainer = document.querySelector('.editor-container:not([style*="display: none"])');
            const previewColumn = document.getElementById('previewColumn');
            const previewIframe = document.getElementById('preview');
            const consoleOutput = document.getElementById('consoleOutput');
            const runJavaScriptButton = document.getElementById('runJavaScriptButton');

            // Hide the current editor and console output
            currentEditorContainer.style.display = 'none';
            consoleOutput.style.display = 'none';

            if (editorId === 'jsEditor') {
                // Show the JavaScript editor and console output
                editorContainer.style.display = 'block';
                consoleOutput.style.display = 'block';
                runJavaScriptButton.style.display = 'block';

                // Hide the HTML editor and its preview
                document.getElementById('editor').style.display = 'none';
                document.getElementById('preview').style.display = 'none';
            } else {
                // Show the HTML editor and its preview
                editorContainer.style.display = 'block';
                document.getElementById('jsEditor').style.display = 'none';
                previewColumn.style.display = 'block';
                previewIframe.style.display = 'block';
                runJavaScriptButton.style.display = 'none';
            }
        }
    </script>

    {{-- ROW FOR PAIN MS TBC ----------------------------------------------------------------START --}}

    {{-- // FUNCTIONAL HTMML ONLY END --------------------------------

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
}); */ --}}

    {{-- <div class="row justify-content-center mt-5">
<div class="col-sm-3 card1 mt-3 p-4">
    <div class="logiInfo mt-2 p-2">
@if (Auth::check())

        <h3 class="text-center">Welcome, {{ Auth::user()->name }}! <br>You are logged in. </h3>
<div class="text-center">
<button id="showButton" class="btn btn-primary">Show Paint Sphere</button>
<div class="col" id="paintsphere" style="position:relative; left:0;  margin-left:-150%; margin-right:100px;">
<div class="row d-flex align-items-start">
<a href="#" class="btn-close" aria-label="Close" id="hideButton"></a>
</div>
<paint-app></paint-app>
</div>
</div> @else <p>
<a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">Register</a> to post a new topic.
</p> @endif
</div>
</div>
</div> --}}

    {{-- ROW FOR PAIN MS TBC ----------------------------------------------------------------START --}}

@endsection
