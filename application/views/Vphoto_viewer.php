<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <!-- <link href="plugins/support/photo_viewer/docs.css"> -->
    <link href="plugins/support/photo_viewer/photoviewer.css" rel="stylesheet">
    <!-- <link href="plugins/support/photo_viewer/snack.css" rel="stylesheet"> -->
    <!-- <link href="plugins/support/photo_viewer/snack-helper.css" rel="stylesheet"> -->
</head>

<body>
    <a data-gallery="manual" data-title="Slipping Away by Jerry Fryer" href="https://dotobjyajpegd.cloudfront.net/photo/5d3a66f962710e25dc99ffa3">
        <img src="https://dotobjyajpegd.cloudfront.net/photo/5d3a66f962710e25dc99ffa3" alt="">
    </a>

    <script src="plugins/support/photo_viewer/jquery.min.js"></script>
    <!-- <script src="plugins/support/photo_viewer/prettify.min.js"></script> -->
    <script src="plugins/support/photo_viewer/photoviewer.js"></script>

    <script>
        // initialize manually with a list of links
        $('[data-gallery=manual]').click(function(e) {

            e.preventDefault();

            var items = [],
                options = {
                    index: $(this).index(),
                };

            $('[data-gallery=manual]').each(function() {
                items.push({
                    src: $(this).attr('href'),
                    title: $(this).attr('data-title')
                });
            });

            new PhotoViewer(items, options);

        });
    </script>

</body>

</html>