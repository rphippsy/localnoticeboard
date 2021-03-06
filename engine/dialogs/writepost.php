        <form id="newpost" action="?loc=engine/writeposthandler&ispage=false" method="post">
        ID: <strong>Now auto-generated ID instead</strong><br>
        Title: <input type="text" name="Title" id="Title"><br>
        Category: <select name="Category">
        <option value="Advert">Advert</option>
        <option value="Event">Event</option>
        <option value="General">General</option>
        <option value="Business">Business</option>
        <option value="Test">Test</option>
        </select><br/>
        Timestamp (auto-generated)<br/>
        User: <input type="text" name="User"><br>
        Content (max 255 chars.): <textarea  name="Content" onkeyup="checkLength"></textarea><br>
        Image URL:<input type="text" name="Image"><br>
        <button type="button" onclick="doSubmit()">Compose post</button>
        </form>

    <!-- Validation scripts -->
    <script>
    function checkLength() {
        if (tinyMCE.activeEditor.getContent().length > 2000)
            return true;
    };

    function checkTitle() {
        if (document.getElementById("Title").value == 0)
            return true;
    }

    function validate() {
        if ( checkLength() ) {
            window.alert("Your content is too long");
            return false;
        }

        else if ( checkTitle() ) {
            window.alert("Please enter a title");
            return false;
        }

        else {
            return true;
        };
    };

    function doSubmit() {
        if ( validate() ) {
            document.getElementById("newpost").submit();
            console.log("Post is ready to submit");
            return true;
        } else { return false; };
    }
    </script>

    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>

    <script>tinymce.init({
        selector:'textarea'
        });</script>

