<div>

    @php
        $editorId = uniqid();
    @endphp

 <div class="m-1">
     <textarea {!! $attributes->merge([]) !!} id="editor-{{$editorId}}"></textarea>
 </div>

    <script>
        mw.require('editor.js');
        $(document).ready(function () {
            let mwEditorId{{$editorId}} = mw.Editor({
                selector: '#editor-{{$editorId}}',
                mode: 'div',
                smallEditor: false,
                minHeight: 250,
                maxHeight: '70vh',
                controls: [
                    [
                        'undoRedo', '|',
                        {
                            group: {
                                controller: 'bold',
                                controls: ['italic', 'underline', 'strikeThrough']
                            }
                        },
                        '|',
                        {
                            group: {
                                icon: 'mdi mdi-format-align-left',
                                controls: ['align']
                            }
                        },
                        '|', 'format',
                        '|', 'link', 'unlink', 'removeFormat'
                    ],
                ]
            });

        });
    </script>
</div>