

<section>
    <form>
        <select name="users" onchange="showUser(this.value)">
            <option value="">Select a person:</option>
            <option value="1">Yarne</option>
            <option value="2">Jos</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>Person info will be listed here...</b></div>
</section>

<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };

            //xmlhttp.open("GET", "/wp-content/themes/yds/templates/includes/getuser.php?q="+str,true);

            xmlhttp.open("GET", "/wp-content/themes/yds/templates/includes/getuser.php",true);
            xmlhttp.send();
        }
    }
</script>