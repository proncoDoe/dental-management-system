
ClassicEditor
    .create( document.querySelector( '#body'), {
        // The plugins are now passed directly to .create().
        plugins: [
            EssentialsPlugin,
            AutoformatPlugin,
            BoldPlugin,
            ItalicPlugin,
            BlockQuotePlugin,
            HeadingPlugin,
            ImagePlugin,
            ImageCaptionPlugin,
            ImageStylePlugin,
            ImageToolbarPlugin,
            EasyImagePlugin,
            ImageUploadPlugin,
            LinkPlugin,
            ListPlugin,
            ParagraphPlugin,
            UploadAdapterPlugin
        ],

        // So is the rest of the default configuration.
        toolbar: [
            'heading',
            'bold',
            'italic',
            'link',
            'bulletedList',
            'numberedList',
            'imageUpload',
            'blockQuote',
            'undo',
            'redo'
        ],
        image: {
            toolbar: [
                'imageStyle:full',
                'imageStyle:side',
                '|',
                'imageTextAlternative'
            ]
        }
    } )


    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );