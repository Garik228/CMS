<script type="text/javascript" src="http://localhost/Blog/admin/js/tinymce.min.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        // General
        directionality: "ltr",
        language : "ru",
        mode : "specific_textareas",
        autosave_restore_when_empty: false,
        skin : "lightgray",
        theme : "modern",
        schema: "html5",
        selector: "textarea",
        // Cleanup/Output
        inline_styles : true,
        gecko_spellcheck : true,
        entity_encoding : "raw",
        valid_elements : "",
        extended_valid_elements : "hr[id|title|alt|class|width|size|noshade]",
        force_br_newlines : false, force_p_newlines : true, forced_root_block : 'p',
        toolbar_items_size: "small",
        invalid_elements : "script,applet,iframe",
        // Plugins
        plugins : "table link image code hr charmap autolink lists importcss",
        // Toolbar
        toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | bullist numlist",
        toolbar2: "outdent indent | undo redo | link unlink anchor image code | hr table | subscript superscript | charmap",
        removed_menuitems: "newdocument",
        // URL
        relative_urls : true,
        remove_script_host : false,
        document_base_url : "http://localhost/Blog/",
        // Layout
        content_css : "http://localhost/Blog/editor.css",
        importcss_append: true,
        // Advanced Options
        resize: "both",
        height : "550",
        width : "",

    });
</script>